<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/security_login', function () {
    return view('securitylogin');
});
Route::get('/admin_login', function () {
    return view('admin_login');
});

//admin

Route::get('/entry', function () {
    return view('admin.entry');
});
Route::get('/exit', function () {
    return view('admin.exit');
});
Route::get('/manage', function () {
    return view('admin.manage');
});
Route::get('/admindashboard', function () {
    return view('admin.index');
});
Route::get('/logs', function () {
    return view('admin.logs');
});
Route::get('/admin/admindashboard', function () {
    return view('admin.index');
});

//security personnel
//tanggalin mo na to kapag okay na login niya
Route::get('/sp/spdashboard', function () {
    return view('sp.index');
});
Route::get('/sp/spentry', function () {
    return view('sp.entry');
});
Route::get('/spentry', function () {
    return view('sp.entry');
});
Route::get('/sp/spexit', function () {
    return view('sp.exit');
});
//hangang ditolang

Route::get('/spexit', function () {
    return view('sp.exit');
});
Route::get('scanentry', function () {
    return view('sp.scanentry');
});
Route::get('scanexit', function () {
    return view('sp.scanexit');
});
Route::get('/spdashboard', function () {
    return view('sp.index');
});
