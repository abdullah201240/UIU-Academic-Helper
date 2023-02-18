<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Response;

use Illuminate\Support\Facades\Storage;
class student_course_enroll extends Controller
{
    public function index()
    {
        $id = Session::get('$sid');
        $data = DB::select("SELECT * FROM `take_courses` WHERE sid='$id'");
        return view('home', ['data' => $data]);

        //return view('home', ['oka'=>$a]);
    }

    public function destroy($id)
    {

        //$data= DB::select("SELECT * FROM `take_courses` WHERE sid='011201240'");
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
            $data = DB::select("SELECT * FROM `take_courses` WHERE sid='$user->id'");
            //return view('home',['data' => $data]);
            return redirect("home");
            //return view('home',['d' =>  $user]);

        }
        if ($users == false) {

            return redirect("login");
        }
    }
    public function addcourse()
    {

        $data = DB::select("SELECT * FROM `course`");
        return view('addcourses', ['data' => $data]);

        //return view('home', ['oka'=>$a]);
    }

    public function searchcourses(Request $req)

    {
        //echo$_GET['inputEmail4'];
        //return view('searchcourses');
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
        }
        $data = array('sid' => $sid, "cid" => $cid, "sname" => $sname, "tname" => $tname, "department" => $department, "cname" => $cname, "section" => $section, "Room" => $room, "ctimestart" => $ctimestart, "ctimeend" => $ctimeend);
        DB::table('take_courses')->insert($data);


        return redirect("home");
        //return $req->input();



    }
    public function slogout()

    {
        session()->forget('$sid');
        session()->forget('$sname');

        return redirect("/");
    }
    public function destroys($id)
    {

        //$data= DB::select("SELECT * FROM `take_courses` WHERE sid='011201240'");
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


        //return view('show_teacher_profile', ['data' => $data] ,['data1' => $data1]);

        return view('show_teacher_profile')->with(['data' => $data,'data1' => $data1,'data2' => $data2 ,'data3' => $data3]);

    }
    public function  studentprofile()
    {
        $sid = Session::get('$sid');
        $data20 = DB::select("SELECT * FROM `student` WHERE id= '$sid'");

        $data21 = DB::select("SELECT * FROM `education` WHERE sid='$sid'");

        $data22 = DB::select(" Select * from project where sid='$sid'");

        $data26= DB::select(" Select * from experience where  sid='$sid'");

        $data27= DB::select(" SELECT * FROM `achievements` WHERE sid='$sid'");

        foreach ($data22 as $u) {
            $project_id=$u->project_id;
            $data23 = DB::select(" SELECT * FROM `project_partner` WHERE project_id='$project_id'");


            $data24 = DB::select(" SELECT * FROM `project_faculty` WHERE project_id='$project_id'");

            $data25=DB::select("  SELECT * FROM `project_image` WHERE id='$project_id'");
            return view('studentprofile')->with(['data20' => $data20,'data21' => $data21,'data22' => $data22 ,'data23' => $data23,'data24' => $data24,'data25' => $data25,'data26' => $data26,'data27' => $data27]);

        }
        return view('studentprofile')->with(['data20' => $data20,'data21' => $data21,'data22' => $data22,'data26' => $data26,'data27' => $data27]);






    }
    public function  showallbook()
    {

        $data = DB::select(" SELECT * FROM `book` ORDER BY(coursename)");


        return view('allbook',['data' => $data]);

    }

    public function  mybook()
    {
        $id = Session::get('$sid');

        $data = DB::select(" SELECT * FROM `book` where sid='$id' ORDER BY(coursename)");


        return view('mybook',['data' => $data]);

    }

    public function  uploadbook(Request $req)
    {
        $topic=$req->topic;
        $file=$req->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $req->file->move('allbooks',$filename);

        $id = Session::get('$sid');
        $data = array('sid' => $id, "coursename" => $topic, "name" =>$filename);
        DB::table('book')->insert($data);

        $data = DB::select(" SELECT * FROM `book` where sid='$id' ORDER BY(coursename)");




        return view('mybook',['data' => $data]);

    }
    public function  download($id)
    {

        echo$id;

        // $path=storage_path("public/allbooks/{$file}");
        // //return \Response::download($path);
        // return $path;

        return response()->download(public_path('allbooks/'.$id));

    }
    // public function save(Request $request){
    //     $topic=$req->topic;
    //     $file=$req->file;
    //     $filename=time().'.'.$file->getClientOriginalExtension();
    //     $req->file->move('allbooks',$filename);

    //     $id = Session::get('$sid');
    //     $data = array('sid' => $id, "coursename" => $topic, "name" =>$filename);
    //     DB::table('book')->insert($data);

    //     $data = DB::select(" SELECT * FROM `book` where sid='$id' ORDER BY(coursename)");

















    //     return view('mybook',['data' => $data]);



    // }
    public function deletebook($id){

     DB::delete('DELETE FROM `book` WHERE id= ?', [$id]);

        return redirect("mybook");

    }

}
