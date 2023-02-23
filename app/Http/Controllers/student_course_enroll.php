<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Response;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Support\Facades\Storage;

class student_course_enroll extends Controller
{
    public function index()
    {
        $id = Session::get('$sid');
        $data = DB::select("SELECT * FROM `take_courses` WHERE sid='$id'");
        return view('home', ['data' => $data]);


    }

    public function destroy($id)
    {


        DB::delete('DELETE FROM `take_courses` where id = ?', [$id]);

        return redirect("home");
    }
    public function studentinfo()
    {
        $id = Session::get('$sid');
        $data = DB::select("SELECT * FROM `bokking` WHERE sid='$id' ORDER BY id DESC");

        return view('counsilling', ['data' => $data]);
    }

    public function login(Request $req)
    {

        $username = $_GET['username'];
        $pass = md5($_GET['password']);



        $users = DB::select("SELECT * FROM `student` WHERE id= '$username' AND password='$pass'");

        foreach ($users as $user) {
            echo $user->name;
            Session::put('$sid', $user->id);
            Session::put('$sname', $user->name);
            Session::put('$simage', $user->image);
            $data = DB::select("SELECT * FROM `take_courses` WHERE sid='$user->id'");

            return redirect("home");


        }
        if ($users == false) {

            return redirect("login");
        }
    }
    public function addcourse()
    {

        $data = DB::select("SELECT * FROM `course`");
        return view('addcourses', ['data' => $data]);


    }

    public function searchcourses(Request $req)

    {

        $cid = $_GET['courses'];
        $data = DB::select("Select distinct(section),id,cname,cid,Room,ctimestart,ctimeend,tname,department from course where cid like'%$cid%' or  cname like'%$cid%'");
        return view('searchcourses', ['data' => $data]);
    }

    public function addcourses($id)

    {

        echo $id;

        $data = DB::select("SELECT * FROM `course` WHERE id='$id'");
        foreach ($data as $u) {
            $cname = $u->cname;
            $cid = $u->cid;
            $tname = $u->tname;
            $department = $u->department;
            $section = $u->section;
            $room = $u->Room;
            $ctimestart = $u->ctimestart;
            $ctimeend = $u->ctimeend;
            $sid = Session::get('$sid');
            $sname = Session::get('$sname');
            $image = Session::get('$simage');
        }
        $data = array('sid' => $sid, "cid" => $cid, "sname" => $sname, "tname" => $tname, "department" => $department, "cname" => $cname, "section" => $section, "Room" => $room, "ctimestart" => $ctimestart, "ctimeend" => $ctimeend, "image" => $image);
        DB::table('take_courses')->insert($data);


        return redirect("home");




    }
    public function slogout()

    {
        session()->forget('$sid');
        session()->forget('$sname');

        return redirect("/");
    }
    public function destroys($id)
    {


        DB::delete('DELETE FROM `bokking` WHERE id= ?', [$id]);

        return redirect("counsilling");
    }
    public function showallteacher()
    {

        $data = DB::select("SELECT * FROM `teacher`");
        return view('studentaddcounsilling', ['data' => $data]);
    }

    public function  showteacherprofile($id)
    {
        $data = DB::select("SELECT * FROM `teacher` where id='$id'");
        $data1 = DB::select("SELECT * FROM `course` WHERE tid='$id'");

        $data2 = DB::select(" SELECT * FROM time_schedule WHERE tid='$id'");

        $data3 = DB::select("SELECT * FROM `bokking` WHERE tid='$id'");




        return view('show_teacher_profile')->with(['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
    }
    public function  studentprofile()
    {
        $sid = Session::get('$sid');
        $data20 = DB::select("SELECT * FROM `student` WHERE id= '$sid'");

        $data21 = DB::select("SELECT * FROM `education` WHERE sid='$sid'");

        $data22 = DB::select(" Select * from project where sid='$sid'");

        $data26 = DB::select(" Select * from experience where  sid='$sid'");

        $data27 = DB::select(" SELECT * FROM `achievements` WHERE sid='$sid'");

        foreach ($data22 as $u) {
            $project_id = $u->project_id;
            $data23 = DB::select(" SELECT * FROM `project_partner` WHERE project_id='$project_id'");


            $data24 = DB::select(" SELECT * FROM `project_faculty` WHERE project_id='$project_id'");

            $data25 = DB::select("  SELECT * FROM `project_image` WHERE id='$project_id'");
            return view('studentprofile')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data23' => $data23, 'data24' => $data24, 'data25' => $data25, 'data26' => $data26, 'data27' => $data27]);
        }
        return view('studentprofile')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data26' => $data26, 'data27' => $data27]);
    }
    public function  showallbook()
    {

        $data = DB::select(" SELECT * FROM `book` ORDER BY(coursename)");


        return view('allbook', ['data' => $data]);
    }

    public function  mybook()
    {
        $id = Session::get('$sid');

        $data = DB::select(" SELECT * FROM `book` where sid='$id' ORDER BY(coursename)");


        return view('mybook', ['data' => $data]);
    }

    public function  uploadbook(Request $req)
    {
        $topic = $req->topic;
        $file = $req->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $req->file->move('allbooks', $filename);

        $id = Session::get('$sid');
        $data = array('sid' => $id, "coursename" => $topic, "name" => $filename);
        DB::table('book')->insert($data);

        $data = DB::select(" SELECT * FROM `book` where sid='$id' ORDER BY(coursename)");




        return view('mybook', ['data' => $data]);
    }
    public function  download($id)
    {




        return response()->download(public_path('allbooks/' . $id));
    }

    public function deletebook($id)
    {

        DB::delete('DELETE FROM `book` WHERE id= ?', [$id]);

        return redirect("mybook");
    }
    public function participations($id)
    {



        $data = DB::select(" SELECT * FROM `take_courses` WHERE id='$id'");



        foreach ($data as $u) {

            $cid = $u->cid;
            $section = $u->section;
        }


        $data1 = DB::select(" SELECT * FROM `take_courses` WHERE cid='$cid' AND section='$section'");
        return view('participation', ['data1' => $data1]);
    }
    public function showprofile($id)
    {



        $data20 = DB::select("SELECT * FROM `student` WHERE id= '$id'");

        $data21 = DB::select("SELECT * FROM `education` WHERE sid='$id'");

        $data22 = DB::select(" Select * from project where sid='$id'");

        $data26 = DB::select(" Select * from experience where  sid='$id'");

        $data27 = DB::select(" SELECT * FROM `achievements` WHERE sid='$id'");

        foreach ($data22 as $u) {
            $project_id = $u->project_id;
            $data23 = DB::select(" SELECT * FROM `project_partner` WHERE project_id='$project_id'");


            $data24 = DB::select(" SELECT * FROM `project_faculty` WHERE project_id='$project_id'");

            $data25 = DB::select("  SELECT * FROM `project_image` WHERE id='$project_id'");
            return view('showstudentprofile')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data23' => $data23, 'data24' => $data24, 'data25' => $data25, 'data26' => $data26, 'data27' => $data27]);
        }
        return view('showstudentprofile')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data26' => $data26, 'data27' => $data27]);
    }
    public function  formet()
    {
        $sid = Session::get('$sid');
        $data20 = DB::select("SELECT * FROM `student` WHERE id= '$sid'");

        $data21 = DB::select("SELECT * FROM `education` WHERE sid='$sid'");

        $data22 = DB::select(" Select * from project where sid='$sid'");

        $data26 = DB::select(" Select * from experience where  sid='$sid'");

        $data27 = DB::select(" SELECT * FROM `achievements` WHERE sid='$sid'");

        foreach ($data22 as $u) {
            $project_id = $u->project_id;
            $data23 = DB::select(" SELECT * FROM `project_partner` WHERE project_id='$project_id'");


            $data24 = DB::select(" SELECT * FROM `project_faculty` WHERE project_id='$project_id'");

            $data25 = DB::select("  SELECT * FROM `project_image` WHERE id='$project_id'");
            return view('formetresume')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data23' => $data23, 'data24' => $data24, 'data25' => $data25, 'data26' => $data26, 'data27' => $data27]);
        }
        return view('formetresume')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data26' => $data26, 'data27' => $data27]);
    }

    public function hideeducation($id)
    {
        DB::update("UPDATE `education` SET `hide`='1' WHERE id=?", [$id]);
        //DB::table('education') ->where('id', '$id') ->limit(1) ->update( [ 'hide' =>'1' ]);

        return redirect("formetresume");
    }
    public function  formetapi()
    {
        $id = Session::get('$sid');

        DB::update("UPDATE `education` SET `hide`='0' WHERE sid=?", [$id]);
        DB::update("UPDATE `achievements` SET `hide`='0' WHERE  sid=?", [$id]);
        DB::update("UPDATE `experience` SET `hide`='0' WHERE  sid=?", [$id]);
        DB::update("UPDATE `project` SET `hide`='0' WHERE  sid=?", [$id]);

        return redirect("formetresume");
    }
    public function hideproject($id) {
        DB::update("UPDATE `project` SET `hide`='1' WHERE  project_id=?", [$id]);
        //DB::table('education') ->where('id', '$id') ->limit(1) ->update( [ 'hide' =>'1' ]);

        return redirect("formetresume");


    }
    public function hideexprience($id){

        DB::update("UPDATE `experience` SET `hide`='1' WHERE  id=?", [$id]);
        //DB::table('education') ->where('id', '$id') ->limit(1) ->update( [ 'hide' =>'1' ]);

        return redirect("formetresume");

    }
    public function hidecertificated($id) {
        DB::update("UPDATE `achievements` SET `hide`='1' WHERE  id=?", [$id]);
        //DB::table('education') ->where('id', '$id') ->limit(1) ->update( [ 'hide' =>'1' ]);

        return redirect("formetresume");


    }
    public function studentinfoedit(){

        $id = Session::get('$sid');
        $data = DB::select("SELECT * FROM `student` WHERE id= '$id'");
        return view('studentinfoedit', ['data' => $data]);

    }
    public function simage(Request $req){
        $id = Session::get('$sid');
        $file = $req->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $req->file->move('images', $filename);
        DB::update("UPDATE `student` SET `image`='$filename' WHERE  id=?", [$id]);

        return redirect("formetresume");

    }
    public function adminlogin(Request $req){
        $user=$req->username;
        $pass=$req->password;
        if($user="Admin" && $pass="1234"){
            //return redirect("formetresume");
            return redirect("adminhome");
        }

        else{
            return redirect("adminlogin");
        }

    }
    public function  addstudent(Request $req)
    {
        $data = array("name" => $req->name, "id" =>$req->id, "department" => $req->department, "email" => $req->email, "number" => $req->number, "gender" => $req->gender, "password" => md5($req->password), "dob" => $req->birthdaytime,"image"=>"","cgpa"=>"","github"=>"","website"=>"","linkedin"=>"","address"=>"","intro"=>"","about"=>"");
        DB::table('student')->insert($data);
        try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'uiu.ecats@gmail.com';                     //SMTP username
            $mail->Password   = 'aeuzdymxmohxcdxq';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('uiu.ecats@gmail.com', 'UIU E-CATS Administrator (via eCATS)');
            $mail->addAddress($req->email, $req->name);     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'UIU E-CATS: New user account';
            $mail->Body    = "Hi ".$req->id."  ".$req->name."<br>

            A new account has been created for you at <b>'UIU E-CATS'</b>
            and you have been issued with a new temporary password.<br>

            Your current login information is now:<br>
            username:".$req->id."<br>
            password: 1234<br>
            (you will have to change your password
            when you login for the first time)

            To start using 'UIU E-CATS’,login at
            http://lms.uiu.ac.bd/login/?lang=en

            <br> In most mail programs, this should appear as a blue link
            which you can just click on. If that doesn't work,
            then cut and paste the address into the address
            line at the top of your web browser window.<br>

            Cheers from the 'UIU E-CATS’ administrator,

            <br> UIU E-CATS Administrator
            <br> uiu.ecats@gmail.com";


            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


        return redirect("addstudent");

    }
    public function  addteacher(Request $req)
    {
        $data = array("name" => $req->name, "id" =>$req->id, "department" => $req->department, "email" => $req->email, "number" => $req->number, "gender" => $req->gender, "password" => md5($req->password),"profession"=>$req->profession, "dob" => $req->birthdaytime,"room"=>"","pid"=>"6","image"=>"");
        DB::table('teacher')->insert($data);
        try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'uiu.ecats@gmail.com';                     //SMTP username
            $mail->Password   = 'aeuzdymxmohxcdxq';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('uiu.ecats@gmail.com', 'UIU E-CATS Administrator (via eCATS)');
            $mail->addAddress($req->email, $req->name);     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'UIU E-CATS: New user account';
            $mail->Body    = "Hi ".$req->id."  ".$req->name."<br>

            A new account has been created for you at <b>'UIU E-CATS'</b>
            and you have been issued with a new temporary password.<br>

            Your current login information is now:<br>
            username:".$req->id."<br>
            password: 1234<br>
            (you will have to change your password
            when you login for the first time)

            To start using 'UIU E-CATS’,login at
            http://lms.uiu.ac.bd/login/?lang=en

            <br> In most mail programs, this should appear as a blue link
            which you can just click on. If that doesn't work,
            then cut and paste the address into the address
            line at the top of your web browser window.<br>

            Cheers from the 'UIU E-CATS’ administrator,

            <br> UIU E-CATS Administrator
            <br> uiu.ecats@gmail.com";


            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }



        return redirect("addteacher");

    }


    public function tlogin(Request $req)
    {

        $username = $req->username;
        $pass = md5($req->password);



        $users = DB::select("SELECT * FROM `teacher` WHERE id= '$username' AND password='$pass'");

        foreach ($users as $user) {
            echo $user->name;
            Session::put('$tid', $user->id);
            Session::put('$tname', $user->name);
            Session::put('$timage', $user->image);


            return redirect("teacherhome");


        }
        if ($users == false) {

            return redirect("tlogin");
        }
    }
}
