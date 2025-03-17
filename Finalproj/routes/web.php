<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/enroll', 'EnrollmentController@showForm')->name('enroll');


Route::get('/schedule', 'ScheduleController@show')->name('schedule');


Route::get('/payment', 'PaymentController@showPaymentForm')->name('payment');


Route::get('/grades', 'GradesController@show')->name('grades');

// 
Route::get('/check', 'CheckController@show')->name('check');

