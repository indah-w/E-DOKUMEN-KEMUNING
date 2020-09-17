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
Route::get('/dashboard/grafik', 'DashboardController@grafik')->name('dashboard.grafik');
Route::get('/dashboard/data', 'DashboardController@data')->name('dashboard.data');
Route::get('/beranda', 'SiteController@home');
Route::get('/sites/tentang', 'SiteController@tentang');
Route::get('/sites/event', 'SiteController@event');
Route::get('/sites/kegiatan', 'SiteController@kegiatan');
Route::get('/sites/artikel', 'SiteController@artikel');
Route::get('/sites/kontak', 'SiteController@kontak');
Route::get('/sites/eventdetail/{id}', 'SiteController@eventdetail')->name('event_detail');

Route::get('/dashboard/buatanggota', function() {
    return view('/dashboard/buatanggota');
});
Auth::routes(['only' => 'login']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/dashboard', 'DashboardController@index');
});


//Member
Route::resource('member', 'MemberController');

//Report
Route::resource('report', 'ReportController');

//Kegiatan
Route::resource('kegiatan', 'KegiatanController');

//Event
Route::resource('event', 'EventController');

//Dokumen
Route::get('/dokumen/download/{id}', 'DokumenController@download')->name('dokumen.download');
Route::resource('dokumen', 'DokumenController');

//Artikel
Route::resource('artikel', 'ArtikelController');

//User
Route::resource('user', 'UserController');


// Route::get('/crud', function () {
//     return view('adminlte.crud.index');
// })->name('crud');

// Route::get('/crud/create', function () {
//     return view('adminlte.crud.create');
// })->name('crud.create');

// Route::get('/crud/edit', function () {
//     return view('adminlte.crud.edit');
// })->name('crud.edit');
