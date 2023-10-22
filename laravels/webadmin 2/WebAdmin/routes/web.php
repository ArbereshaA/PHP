<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Course;
use App\Models\User;
use App\Http\Controllers\login_logout;
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
//testsassert-status
Route::get('assert-status', function () {
    return " a view will be here";
});


Route::get('/', function () {
    return view('firstPage');
});
Route::get('/', function () {
    return view('firstPage');
});
Route::get('/loginUser',[login_logout::class,'login']);
Route::post('/login_submit',[login_logout::class,'loginUser']);
// Route::get('/dashboard',[login_logout::class,'dashboardd']);

Route::get('/loginTeacher',[login_logout::class,'logint']);
Route::post('/login_submit1',[login_logout::class,'loginTeacher']);

Route::get('/loginStudent',[login_logout::class,'logins']);
Route::post('/login_submit2',[login_logout::class,'loginStudent']);

//dashboards
Route::get('/dashboard',function(){
    $students=Student::count();
    $teachers=Teacher::count();
    $subjects=Subject::count();
    $courses=Course::count();

    return view('header', compact('students','teachers','subjects','courses'));
});
Route::get('/dashboardd',function(){
    $students=Student::count();
    $subjects=Subject::count();
    $courses=Course::count();

    return view('teacherdashboard', compact('students','subjects','courses'));
});
Route::get('/dashboarddd',function(){
    $subjects=Subject::all();

    return view('student_subject',compact('subjects'));
});

//Admin Routes
Route::get('/showstudent_subject/{id}',function($id){

    $subjects=Subject::where('id',$id)->get();
    $students=Student::where('subject_id',$id)->get();

    return view('showSubject',compact('subjects','students'));

});
Route::get('/profile', function () {
    $users=User::all();
    return view('profile',compact('users'));
});


//Admin Student Table
Route::get('/liststudents', function () {
    $students=Student::all();
    return view('students',compact('students'));
});
Route::get('/showstudent/{id}',function ($id){
     $students=Student::where('id',$id)->get();
    return view('showStudent',compact('students'));
});
Route::get('/addStudent', function () {
    $students=Student::all();
    return view('AddStudent',compact('students'));
});
Route::post('/addstudent1', function (Request $request){
    $student=new Student;

    $student->id=$request->id;
    $student->name=$request->name;
    $student->phone=$request->phone;
    $student->gender=$request->gender;
    $student->dayofbirth=$request->dayofbirth;
    $student->address=$request->address;
    $student->email=$request->email;
    $student->subject_id=$request->subject_id;
    $student->save();
    return redirect('/liststudents');
});
Route::get('/delstudent/{id}',function ($id){
    $student=Student::find($id);
    $student->delete();
    return redirect('/liststudents');
});
Route::get('/editstudent/{id}',function ($id){
    $student=Student::where('id',$id)->get();
    return view('editStudent',compact('student'));
});
Route::post('/editt/{id}', function(Request $request,$id){
    $student=Student::find($id);
    $student->name=$request->name;
    $student->phone=$request->phone;
    $student->dayofbirth=$request->dayofbirth;
    $student->address=$request->address;
    $student->email=$request->email;
    $student->subject_id=$request->subject_id;

    $student->save();
    return redirect('/liststudents');
     
});

//Admin Teachers Table
Route::get('/listteachers', function () {
    $teachers=Teacher::all();
    return view('teachers',compact('teachers'));
});
Route::get('/showteacher/{id}',function ($id){
    $teachers=Teacher::where('id',$id)->get();
    return view('showTeacher',compact('teachers'));
});
Route::get('/delteacher/{id}',function ($id){
    $teacher=Teacher::find($id);
    $teacher->delete();
    return redirect('/listteachers');
});
Route::get('/addTeacher', function () {
    $teachers=Teacher::all();
    return view('AddTeacher',compact('teachers'));
});
Route::post('/addteacher1', function (Request $request){
    $teacher=new Teacher;

     $teacher->id=$request->id;
     $teacher->teacher_name=$request->teacher_name;
     $teacher->gender=$request->gender;
     $teacher->phone=$request->phone;
     $teacher->dateofbirth=$request->dateofbirth;
    $teacher->email=$request->email;
     $teacher->address=$request->address;

 

     

     $teacher->save();
     return redirect('/listteachers');
          
});
Route::get('/editteacher/{id}',function ($id){
    $teacher=Teacher::where('id',$id)->get();
    return view('editTeacher',compact('teacher'));
});
Route::post('/edit/{id}', function(Request $request,$id){
    $teacher=Teacher::find($id);

     $teacher->teacher_name=$request->teacher_name;
     $teacher->phone=$request->phone;
     $teacher->dateofbirth=$request->dateofbirth;
     $teacher->email=$request->email;
     $teacher->address=$request->address;
 
 


     $teacher->save();
     return redirect('/listteachers');
     
});

//Admin Subject Table
Route::get('/listsubjects', function () {
    $subjects=Subject::all();
    return view('subjects',compact('subjects'));
});
Route::get('/addSubject', function () {
    $subjects=Subject::all();
    return view('AddSubject',compact('subjects'));
});
Route::post('/addsubject1', function (Request $request){
    $subject=new Subject;

     $subject->id=$request->id;
     $subject->subject_name=$request->subject_name;
     $subject->slug=$request->slug;
     $subject->subject_code=$request->subject_code;
     $subject->teacher_id=$request->teacher_id;
     $subject->description=$request->description;



     $subject->save();
     return redirect('/listsubjects');
          
});
Route::get('/delsubject/{id}',function ($id){
    $subject=Subject::find($id);
    $subject->delete();
    return redirect('/listsubjects');
});
Route::get('/editsubject/{id}',function ($id){
   $subject=Subject::where('id',$id)->get();
    return view('editSubject',compact('subject'));
});
Route::post('/edittt/{id}', function(Request $request,$id){
     $subject=Subject::find($id);

     $subject->subject_name=$request->subject_name;
     $subject->slug=$request->slug;
     $subject->subject_code=$request->subject_code;
     $subject->teacher_id=$request->teacher_id;
     $subject->description=$request->description;

     $subject->save();
     return redirect('/listsubjects');
});

//Admin Course Table
Route::get('/listclasses', function () {
    $courses=Course::all();
    return view('classes',compact('courses'));
});
Route::get('/addClass', function () {
    $courses=Course::all();
    return view('AddClass',compact('courses'));
});
Route::post('/addclass1', function (Request $request){
    $course=new Course;

     $course->id=$request->id;
     $course->class_name=$request->class_name;
     $course->teacher_id=$request->teacher_id;
     $course->description=$request->description;

     $course->save();
     return redirect('/listclasses');
          
});
Route::get('/delclass/{id}',function ($id){
    $course=Course::find($id);
    $course->delete();
    return redirect('/listclasses');
});
Route::get('/editclass/{id}',function ($id){
   $course=Course::where('id',$id)->get();
    return view('editClass',compact('course'));
});
Route::post('/editttt/{id}', function(Request $request,$id){
     $course=Course::find($id);

     $course->class_name=$request->class_name;
     $course->teacher_id=$request->teacher_id;
     $course->description=$request->description;

     $course->save();
     return redirect('/listclasses');
});
//Attendance Table
Route::get('/att',function(){
    $students=Student::all();

     return view('attendance',compact('students'));
});
Route::get('/attendance/{id}',function($id){
       $subject=Subject::where('id',$id)->get();
    $student=Student::where('subject_id',$id)->get();

    return view('addAttendance',compact('student','subject'));
});
Route::post('/addattendance/{id}',function(Request $request,$id){
    $student=Student::find($id);

    $student->isPresent=$request->isPresent;

    $student->save();
    return redirect('/teachersubject');

});
Route::get('/showattendance',function(){
    $students=Student::all();

    return view('attendance',compact('students'));
});
//routes for the teacher
Route::get('/teachersubject', function () {
    $subjects=Subject::all();
    return view('teacher_subject',compact('subjects'));
});
Route::get('/teacherstudent', function () {
    $students=Student::all();
    return view('teacher_student',compact('students'));
});
Route::get('/teacherclass', function () {
    $courses=Course::all();
    return view('teacher_class',compact('courses'));
});
Route::get('/teachersubject/{id}',function($id){
    $teachers=Teacher::where('id',$id)->get();
    $subjects=Subject::where('teacher_id',$id)->get();

    return view('showSubject',compact('teachers','subjects'));
});


//routes for the student
Route::get('/subjectstudent/{id}',function($id){
    $subjects=Subject::where('id',$id)->get();
    $students=Student::where('subject_id',$id)->get();

    return view('showstudentStudent',compact('students','subjects'));

});