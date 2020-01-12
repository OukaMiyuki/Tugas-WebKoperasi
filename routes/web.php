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

//LOGIN ROUTES
Auth::routes();
Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');
Route::post('masuk', 'login@masuk');
Route::get('/keluar', 'login@keluar');
//END LOGIN ROUTES

//ADMIN ROUTES
Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function() {
	//route show user
	Route::get('/','member@showMember');
	Route::get('/pages/view/daftar_anggota','member@showMember');
	Route::get('/pages/view/daftar_user','UsersControl@showUserList');
	Route::get('/pages/view/profile', 'AdminController@adminProfile');
	Route::get('/pages/view/profile/member/{kode_member}', 'member@memberProfile');

	//route member crud
	Route::post('/action/add/member', 'member@addMember')->name('upload.member');
	Route::post('/action/update/member', 'member@editMember')->name('update.member');
	Route::get('/action/hapus/member/{kode_member}','member@HapusAnggota');
	Route::get('/action/update/edit_status/member/{kode_member}','member@DisableEnableUser');

	//route user crud
	Route::post('/action/user/add', 'UsersControl@addUser')->name('add.user');
	Route::post('/action/user/edit', 'UsersControl@editUser')->name('edit.user');
	Route::get('/action/hapus/user/{kode_member}','UsersControl@hapusUser');

	//routes simpan & pinjam (admin action)

});
//END ADMIN ROUTES

//MANAGER ROUTES
Route::group(['prefix' => 'manager',  'middleware' => 'auth:manager'], function() {
	//route show admin
	Route::get('/', 'AdminController@ShowAdminList');
	Route::get('/pages/view/daftar_admin', 'AdminController@ShowAdminList');
	Route::get('/pages/view/daftar_user_admin','AdminController@showUserList');
	Route::get('/pages/view/profile/', 'ManagerController@showProfile');
	Route::get('/pages/view/profile/admin/{kode_admin}', 'AdminController@ProfileAdmin');

	//route crud admin
	Route::post('/action/add/admin', 'AdminController@AddAdmin')->name('upload.admin');
	Route::post('/action/update/admin', 'AdminController@EditAdmin')->name('update.admin');
	Route::get('/action/update/edit_status/admin/{kode_admin}','AdminController@DisableEnableAdmin');
	Route::get('/action/hapus/admin/{kode_admin}','AdminController@HapusAdmin');

	//route admin user crud
	Route::post('/action/admin/user/add', 'AdminController@addUser')->name('add.user_admin');
	Route::post('/action/admin/user/edit', 'AdminController@editUser')->name('edit.user_admin');
	Route::get('/action/admin/user/delete/{kode_admin}', 'AdminController@deleteUser');
});