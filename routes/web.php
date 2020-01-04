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

//route login
Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');
Route::post('masuk', 'login@masuk');
Route::get('/keluar', 'login@keluar');

//ADMIN ROUTES
//route show
Route::get('/admin','dataMember@showMember')->middleware('auth:admin');
Route::get('/admin/pages/daftar_anggota','dataMember@showMember')->middleware('auth:admin');
Route::get('/admin/pages/daftar_user','Show_user_tbl@showUserList')->middleware('auth:admin');

//member CRUD
Route::post('admin/action/add/member', 'member@addMember')->name('upload.member')->middleware('auth:admin');
Route::post('admin/action/update/member', 'member@editMember')->name('update.member')->middleware('auth:admin');
Route::get('admin/action/hapus/member/{kode_member}','member@HapusAnggota')->middleware('auth:admin');
Route::get('admin/action/edit_status/member/{kode_member}','member@DisableEnableUser')->middleware('auth:admin');

//user CRUD
Route::post('admin/action/user/add', 'UsersControl@addUser')->name('add.user')->middleware('auth:admin');
Route::post('admin/action/user/edit', 'UsersControl@editUser')->name('edit.user')->middleware('auth:admin');
Route::get('admin/action/hapus/user/{kode_member}','UsersControl@hapusUser')->middleware('auth:admin');

//proses simpan pinjam
Route::get('/admin/page/simpan','dataMember@showMember')->middleware('auth:admin');
Route::get('/admin/page/pinjam','dataMember@showMember')->middleware('auth:admin');
//END ADMIN ROUTES

//MANAGER ROUTES
Route::get('/manager', function () {
    return view('home.manager.index');
})->middleware('auth:manager');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('page/profil/manager', function () {
    return view('index');
});