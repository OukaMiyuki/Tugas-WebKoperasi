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

//route show
Route::get('/admin','dataMember@showMember');
Route::get('/admin/pages/daftar_anggota','dataMember@showMember');
Route::get('/admin/pages/daftar_user','Show_user_tbl@showUserList');

Route::get('/admin/page/simpan','dataMember@showMember');
Route::get('/admin/page/pinjam','dataMember@showMember');

Route::get('page/profil/manager', function () {
    return view('index');
});
//member CRUD
Route::post('admin/action/add/member', 'member@addMember')->name('upload.member');
Route::post('admin/action/update/member', 'member@editMember')->name('update.member');
Route::get('admin/action/hapus/member/{kode_member}','member@HapusAnggota');
Route::get('admin/action/edit_status/member/{kode_member}','member@DisableEnableUser');

//user CRUD
Route::post('admin/action/user/add', 'UsersControl@addUser')->name('add.user');
Route::post('admin/action/user/edit', 'UsersControl@editUser')->name('edit.user');
Route::get('admin/action/hapus/user/{kode_member}','UsersControl@hapusUser');