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

Route::get('/', 'SiteController@home');
Route::get('/beranda', 'SiteController@home');
Route::get('/sites/tentang', 'SiteController@tentang');
Route::get('/sites/events', 'SiteController@events');
Route::get('/sites/kegiatan', 'SiteController@kegiatan');
Route::get('/sites/artikel', 'SiteController@artikel');
Route::get('/sites/kontak', 'SiteController@kontak');
Route::get('/sites/eventsdetail', 'SiteController@eventsdetail');

Route::get('/dashboard/buatanggota', function() {
    return view('/dashboard/buatanggota');
});
Auth::routes(['only' => 'login']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/dashboard', 'DashboardController@index');
});
// Route::get('/sites/datamember', 'DataMemberController@datamember');
