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

Route::get('/','dataMember@showMember');
Route::get('page/daftar_anggota','dataMember@showMember');
Route::get('page/daftar_user', function () {
    return view('index');
});
Route::get('page/simpan','dataMember@showMember');
Route::get('page/pinjam', function () {
    return view('index');
});
Route::get('page/profil/manager', function () {
    return view('index');
});
//route CRUD
Route::post('add/member', 'member@addMember')->name('upload.member');
Route::post('update/member', 'member@editMember')->name('update.member');