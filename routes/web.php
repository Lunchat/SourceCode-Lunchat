<?php

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
    return view('index');
});
Route::get('/tentang', 'MainController@tentang');
Route::get('/kontak', 'MainController@kontak');
Route::get('/events', 'MainController@events');
Route::get('/events_detail', 'MainController@events_detail');

 
 // STUDENT
Auth::routes(['verify' => true]);
Route::resource('users', 'ProfileController');
Route::get('/student', 'StudentController@index')->name('student')->middleware('verified');
Route::get('/student/profil/', 'HomeController@show');
Route::get('/student/data_student', 'HomeController@data_student');
Route::get('/student/edit', 'HomeController@edit');
Route::get('/student/detail_student/{student}', 'HomeController@detail_student');
Route::patch('/student', 'HomeController@update');
Route::get('/student/data_mentor', 'HomeController@data_mentor');
Route::get('/student/detail_mentor/{mentor}', 'HomeController@detail_mentor');
 Route::get('/student/room', 'HomeController@room');
 Route::get('/student/grammar', 'HomeController@grammar');
 Route::get('/student/writing', 'HomeController@writing');
 Route::get('/student/speaking', 'HomeController@speaking');
   Route::get('/student/belajar/{mentor}', 'HomeController@belajar');
   Route::get('/student/room_grammar/{mentor}', 'HomeController@room_grammar');
   Route::get('/student/room_speaking/{mentor}', 'HomeController@room_speaking');
   Route::get('/student/room_writing/{mentor}', 'HomeController@room_writing');
 Route::get('/mentor/belajar/{mentor}', 'HomeController@join_materi');

// ADMIN
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/data_student', 'AdminController@data_student');
Route::get('/admin/detail_student/{student}', 'AdminController@detail_student');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/data_mentor', 'AdminController@data_mentor');
Route::get('/admin/detail_mentor/{mentor}', 'AdminController@detail_mentor');
Route::get('/admin/data_materi', 'AdminController@data_materi');
  Route::get('/admin/room', 'AdminController@room');
  Route::get('/admin/grammar', 'AdminController@grammar');
  Route::get('/admin/writing', 'AdminController@writing');
  Route::get('/admin/speaking', 'AdminController@speaking');

// MENTOR
Route::resource('mentors', 'ProfileMentorController');
Route::get('/mentor', 'MentorController@index')->name('mentor.dashboard')->middleware('verified');
Route::get('/mentor/profil/', 'MentorController@show');
Route::get('/mentor/edit', 'MentorController@edit');
Route::get('/mentor/data_student', 'MentorController@data_student');
Route::get('/mentor/detail_student/{student}', 'MentorController@detail_student');
Route::get('/login/mentor', 'Auth\LoginController@showMentorLoginForm');
Route::get('/register/mentor', 'Auth\RegisterController@showMentorRegisterForm');
Route::get('/mentor/data_mentor', 'MentorController@data_mentor');
Route::get('/mentor/detail_mentor/{mentor}', 'MentorController@detail_mentor');
Route::get('/mentor/tambah_materi', 'MaterialController@upload');
Route::get('/mentor/add_grammar', 'GrammarController@upload');
Route::get('/mentor/add_writing', 'WritingController@upload');
Route::get('/mentor/add_speaking', 'SpeakingController@upload');


Route::get('/mentor/data_materi', 'MentorController@data_materi');

Route::post('/login/mentor', 'Auth\LoginController@mentorLogin');
Route::post('/register/mentor', 'Auth\RegisterController@createMentor');

Route::view('/home', 'home')->middleware('auth');
Route::view('/mentor', 'mentor');
  Route::get('/mentor/room', 'MentorController@room');
  Route::get('/mentor/grammar', 'MentorController@grammar');
  Route::get('/mentor/writing', 'MentorController@writing');
  Route::get('/mentor/speaking', 'MentorController@speaking');
  Route::get('/mentor/belajar/{mentor}', 'MentorController@belajar');
// MATERI
Route::post('/mentor/room', 'MaterialController@proses_upload');
Route::post('/mentor/grammar', 'GrammarController@proses_upload');
Route::post('/mentor/speaking', 'SpeakingController@proses_upload');
Route::post('/mentor/writing', 'WritingController@proses_upload');
 Route::post('/student/room/materi_join', 'MaterialController@join_materi');
 Route::post('/student/grammar/grammar_join', 'GrammarController@join_grammar');
 Route::post('/student/writing/writing_join', 'WritingController@join_writing');
 Route::post('/student/speaking/speaking_join', 'SpeakingController@join_speaking');