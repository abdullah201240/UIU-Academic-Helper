<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_course_enroll;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::view('home', 'home');

Route::get('home', [student_course_enroll::class, 'index']);

Route::get('addcourses',[student_course_enroll::class, 'addcourse']);
Route::get('studentdeletecourse/{id}',[student_course_enroll::class, 'destroy']);
Route::get('counsilling',[student_course_enroll::class, 'studentinfo']);

Route::get("slogin", [student_course_enroll::class, 'login']);
Route::view("login", "slogin");
// Route::get('slogin', function () {
//     return view('slogin');
// });
Route::get("searchcourses", [student_course_enroll::class, 'searchcourses']);

Route::get("addcoursesapi/{id}", [student_course_enroll::class, 'addcourses']);
Route::get('slogout', [student_course_enroll::class, 'slogout']);
Route::get('deletecounsling/{id}',[student_course_enroll::class, 'destroys']);

Route::get('studentaddcounsilling', [student_course_enroll::class, 'showallteacher']);

Route::get('show_teacher_profile/{id}', [student_course_enroll::class, 'showteacherprofile']);

Route::get('studentprofile', [student_course_enroll::class, 'studentprofile']);
Route::get('allbook', [student_course_enroll::class, 'showallbook']);
Route::get('mybook', [student_course_enroll::class, 'mybook']);

Route::post("mybook", [student_course_enroll::class, 'uploadbook']);
Route::get("/download/{id}", [student_course_enroll::class, 'download']);
//Route::post("mybook", [student_course_enroll::class, 'save']);

Route::get("deletebook/{id}", [student_course_enroll::class, 'deletebook']);

Route::get("participation/{id}", [student_course_enroll::class, 'participations']);
Route::get('showstudentprofile/{id}', [student_course_enroll::class, 'showprofile']);
Route::get('formetresume', [student_course_enroll::class, 'formet']);
Route::get('formetresumeapi', [student_course_enroll::class, 'formetapi']);
Route::get('hideeducation/{id}', [student_course_enroll::class, 'hideeducation']);
Route::get('hideproject/{id}', [student_course_enroll::class, 'hideproject']);
Route::get('hideexprience/{id}', [student_course_enroll::class, 'hideexprience']);

Route::get('hidecertificated/{id}', [student_course_enroll::class, 'hidecertificated']);

Route::get('studentinfoedit', [student_course_enroll::class, 'studentinfoedit']);
Route::post("studentinfoedit", [student_course_enroll::class, 'simage']);

Route::get('print', [student_course_enroll::class, 'formet']);
Route::post('adminlogin', [student_course_enroll::class, 'adminlogin']);
Route::view("adminlogin", "adminlogin");
Route::view("adminhome", "adminhome");

Route::post("addstudent", [student_course_enroll::class, 'addstudent']);
Route::view("addstudent", "addstudent");
Route::post("addteacher", [student_course_enroll::class, 'addteacher']);
Route::view("addteacher", "addteacher");
Route::get('teacherhome', [student_course_enroll::class, 'thome']);
Route::post("tlogin", [student_course_enroll::class, 'tlogin']);
Route::view("tlogin", "tlogin");
Route::get('uahome', [student_course_enroll::class, 'ua']);
Route::post('uahome', [student_course_enroll::class, 'uaapply']);
Route::get('graderhome', [student_course_enroll::class, 'grader']);
Route::post('graderhome', [student_course_enroll::class, 'graderapply']);

Route::get('teacher_ua_list', [student_course_enroll::class, 'showua']);
Route::get('teacher_request', [student_course_enroll::class, 'myua']);
Route::get('uarej/{id}', [student_course_enroll::class, 'uarej']);
Route::get('uaasp/{id}', [student_course_enroll::class, 'uaasp']);
Route::get('teacherua/{id}/{cid}', [student_course_enroll::class, 'ualist']);
Route::get('uaadd/{sid}/{sname}/{cid}/{cname}/{section}/{tid}', [student_course_enroll::class, 'addua']);
Route::get('deleteua/{id}', [student_course_enroll::class, 'deleteua']);
Route::get('teacher_grader_list', [student_course_enroll::class, 'showgrader']);
Route::get('teachergrader/{id}/{cid}', [student_course_enroll::class, 'graderlist']);
Route::get('graderadd/{sid}/{sname}/{cid}/{cname}/{section}/{tid}', [student_course_enroll::class, 'addgrader']);

Route::get('publicgrader', [student_course_enroll::class, 'publicgrader']);
Route::get('publicua', [student_course_enroll::class, 'publicua']);



