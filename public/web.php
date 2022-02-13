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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

 Route::prefix('admin')->group(function() {
 	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/senarai-major', 'AdminGetController@senaraimajor')->name('admin.senarai-major');
	Route::get('/tambah-major', 'AdminGetController@tambahmajor')->name('admin.tambah-major');
	Route::get('/permohonanguru', 'AdminGetController@senaraibayar')->name('admin.permohonanguru');
	Route::get('/permohonanguru-notpay', 'AdminGetController@senaraitidakbayar')->name('admin.permohonanguru-notpay');
	Route::get('/butiran-pemohon/{id}', 'AdminGetController@butiranpemohon')->name('admin.butiran-pemohon');
	Route::get('/temuduga/{id}', 'AdminGetController@temuduga')->name('admin.temuduga');
	Route::get('/wangpos/{id}', 'AdminGetController@wangpos')->name('admin.wangpos');
	Route::get('/penempatan-guru/{id}', 'AdminGetController@penempatanGuru')->name('admin.penempatan-guru');
	Route::get('/penempatan/{id}', 'AdminGetController@penempatan')->name('admin.penempatan');
	Route::get('/printresume/{id}', 'AdminGetController@printresume')->name('admin.printresume');
	Route::get('/coverletter/{id}', 'AdminGetController@coverletter')->name('admin.coverletter');
 });


Route::post('/update-penempatan-guru/{id}', 'AdminPostController@updatePenempatanGuru')->name('update-penempatan-guru');
Route::post('/update-temuduga/{id}', 'AdminPostController@updateTemuduga')->name('update-temuduga');
Route::post('/update-wangpos/{id}', 'AdminPostController@updateWangpos')->name('update-wangpos');
Route::post('/tambah-major', 'AdminPostController@tambahmajor')->name('tambah-major');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/permohonan-guru', 'PublicCOntroller@permohonanGuru')->name('permohonan-guru');


//Route::get('/home', 'GetController@pilihjawatan')->name('home');
Route::get('/maklumatdiri', 'GetController@maklumatdiri')->name('maklumatdiri');
Route::get('/maklumatakademik', 'GetController@maklumatakademik')->name('maklumatakademik');
Route::get('/rujukan', 'GetController@rujukan')->name('rujukan');
Route::get('/kokurikulum', 'GetController@kokurikulum')->name('kokurikulum');
Route::get('/pengalaman', 'GetController@pengalaman')->name('pengalaman');
Route::get('/spm', 'GetController@spm')->name('spm');

Route::get('/muatnaik-dokumen', 'GetController@updokumen');
Route::post('/muatnaik-doc', 'ImageUploadController@doc');
Route::get('/uploadpic' , 'GetController@gambar')->name('gambar');
Route::post('/upload', 'ImageUploadController@upload')->name('upload');

Route::get('/diploma' , 'GetController@diploma')->name('diploma');
Route::get('/ijazah' , 'GetController@ijazah')->name('ijazah');
Route::get('/sijil' , 'GetController@sijil')->name('sijil');
Route::get('/stam' , 'GetController@stam')->name('stam');
Route::get('/tahfiz' , 'GetController@tahfiz')->name('tahfiz');


Route::post('/insertjawatan', 'PostController@jawatan');
Route::post('/insertmd', 'PostController@add');
Route::post('/insertrujukan', 'PostController@rujukan');
Route::post('/insertpengalaman', 'PostController@pengalaman');
Route::post('/insertkokurikulum', 'PostController@kokuri');



Route::post('/spm', 'PostController@spm');
Route::post('/diploma', 'PostController@diploma');
Route::post('/ijazah', 'PostController@ijazah');
Route::post('/stam', 'PostController@stam');
Route::post('/tahfiz', 'PostController@tahfiz');
Route::post('/sijil', 'PostController@sijil');

Route::get('/printresume/{id}', 'GetController@printresume')->name('printresume');
Route::get('/coverletter/{id}', 'GetController@coverletter')->name('coverletter');

Route::get('/profile', 'GetController@profile')-> name('profile');
Route::get('/kemaskini/maklumatdiri', 'GetController@updatemaklumatd')-> name('kemaskini.maklumatdiri');
Route::get('/kemaskini/kokurikulum', 'GetController@updatekokurikulum')-> name('kemaskini.kokurikulum');
Route::get('/kemaskini/pengalaman', 'GetController@updatepengalaman')-> name('kemaskini.pengalaman');
Route::get('/kemaskini/rujukan', 'GetController@updaterujukan')-> name('kemaskini.rujukan');
Route::get('/kemaskini/ijazah', 'GetController@updateijazah')-> name('kemaskini.ijazah');
Route::get('/kemaskini/diploma', 'GetController@updatediploma')-> name('kemaskini.diploma');
Route::get('/kemaskini/sijil', 'GetController@updatesijil')-> name('kemaskini.sijil');
Route::get('/kemaskini/tahfiz', 'GetController@updatetahfiz')-> name('kemaskini.tahfiz');
Route::get('/kemaskini/stam', 'GetController@updatestam')-> name('kemaskini.stam');
Route::get('/kemaskini/spm', 'GetController@updatespm')-> name('kemaskini.spm');

Route::get('/isibaru/maklumatdiri', 'GetController@barumaklumatd')-> name('baru.maklumatdiri');
Route::get('/isibaru/kokurikulum', 'GetController@barukokurikulum')-> name('baru.kokurikulum');
Route::get('/isibaru/pengalaman', 'GetController@barupengalaman')-> name('baru.pengalaman');
Route::get('/isibaru/rujukan', 'GetController@barurujukan')-> name('baru.rujukan');
Route::get('/isibaru/ijazah', 'GetController@baruijazah')-> name('baru.ijazah');
Route::get('/isibaru/diploma', 'GetController@barudiploma')-> name('baru.diploma');
Route::get('/isibaru/sijil', 'GetController@barusijil')-> name('baru.sijil');
Route::get('/isibaru/tahfiz', 'GetController@barutahfiz')-> name('baru.tahfiz');
Route::get('/isibaru/stam', 'GetController@barustam')-> name('baru.stam');
Route::get('/isibaru/spm', 'GetController@baruspm')-> name('baru.spm');


Route::post('/updatemd/{id}', 'UpdateController@updatemd')->name('updatemd');
Route::post('/updaterujukan/{id}', 'UpdateController@updaterujukan')->name('updaterujukan');
Route::post('/updatepengalaman/{id}', 'UpdateController@updatepengalaman')->name('updatepengalaman');
Route::post('/updatekokurikulum/{id}', 'UpdateController@updatekokurikulum')->name('updatekokurikulum');

Route::post('/updateijazah/{id}', 'UpdateController@updateijazah')->name('updateijazah');
Route::post('/updatediploma/{id}', 'UpdateController@updatediploma')->name('updatediploma');
Route::post('/updatetahfiz/{id}', 'UpdateController@updatetahfiz')->name('updatetahfiz');
Route::post('/updatesijil/{id}', 'UpdateController@updatesijil')->name('updatesijil');
Route::post('/updatestam/{id}', 'UpdateController@updatestam')->name('updatestam');
Route::post('/updatespm/{id}', 'UpdateController@updatespm')->name('updatespm');


Route::post('/insertmd2', 'NewController@add2');
Route::post('/insertrujukan2', 'NewController@rujukan2');
Route::post('/insertpengalaman2', 'NewController@pengalaman2');
Route::post('/insertkokurikulum2', 'NewController@kokuri2');

Route::post('/spm2', 'NewController@spm2');
Route::post('/diploma2', 'NewController@diploma2');
Route::post('/ijazah2', 'NewController@ijazah');
Route::post('/stam2', 'NewController@stam2');
Route::post('/tahfiz2', 'NewController@tahfiz2');
Route::post('/sijil2', 'NewController@sijil2');
