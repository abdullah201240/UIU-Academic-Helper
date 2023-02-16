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

