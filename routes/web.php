<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.dashboard');
});

Route::get('/attendance', function () {
    return view('pages.attendance.index');
});

Route::get('/attendanceedit', function () {
    return view('pages.attendance.edit');
});

Route::get('/attendancecreate', function () {
    return view('pages.attendance.create');
});

Route::get('/attendanceshow', function () {
    return view('pages.attendance.show');
});

Route::get('/product', function () {
    return view('pages.product.index');
});

Route::get('/productedit', function () {
    return view('pages.product.edit');
});

Route::get('/productcreate', function () {
    return view('pages.product.create');
});

Route::get('/productshow', function () {
    return view('pages.product.show');
});

Route::get('/store', function () {
    return view('pages.store.index');
});

Route::get('/storeedit', function () {
    return view('pages.store.edit');
});

Route::get('/storecreate', function () {
    return view('pages.store.create');
});

Route::get('/storeshow', function () {
    return view('pages.store.show');
});

Route::get('/user', function () {
    return view('pages.user.index');
});

Route::get('/useredit', function () {
    return view('pages.user.edit');
});

Route::get('/usercreate', function () {
    return view('pages.user.create');
});

Route::get('/usershow', function () {
    return view('pages.user.show');
});

Route::get('/visiting', function () {
    return view('pages.visiting.index');
});

Route::get('/visitingedit', function () {
    return view('pages.visiting.edit');
});

Route::get('/visitingcreate', function () {
    return view('pages.visiting.create');
});

Route::get('/visitingshow', function () {
    return view('pages.visiting.show');
});
