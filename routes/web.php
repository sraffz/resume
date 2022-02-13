<?php
use Illuminate\Http\Request;
use App\User;

use App\maklumatdiri;
use App\pengalaman;
use App\rujukan;
use App\kokurikulum;
use App\jawatan;

use App\ijazah;
use App\diploma;
use App\SPM;
use App\stam;
use App\tahfiz;
use App\sijil;
// use PDF;

use App\resume_ujian;
use App\resume_penempatan;
use App\resume_temuduga;
use App\resume_bayaran;
use App\resume_perananAdmin;
use App\resume_kemaskini;

use App\File;
use App\Sekolah;
use App\Major;

use App\RakGuru;
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
	if (Auth::guest()) {
		return view('welcome');
	} else {
		return redirect('home');
	}
});

Route::get('/dashboard', function () {
    return view('dashbo
	ard');
});


Route::get('/semakan', function () {
	// return view('semakan');
	return redirect('/');
});

Route::get('/result', function () {
	return view('result');
});

Route::get('/cetak-semakan/{id}', function (Request $req, $id)
{
	$result = resume_ujian::where('id', $id)
	->get();
	
	// $pdf = PDF::loadView('cetak-semakan', compact('result'))->setPaper('a4');
    //     // If you want to store the generated pdf to the server then you can use the store function
    //     $pdf->save(storage_path().'_filename.pdf');
    //     // Finally, you can download the file using download function
	// 	return $pdf->download('Slip Kehadiran.pdf');
		
	return view('cetak-semakan', compact('result'));
});

Route::get('/menyemak', function (Request $req)
{
	$ic = $req->input('noic');

	$result = resume_ujian::where('ic', 'LIKE', '%'.$ic.'%')
	->orWhere('nohp', 'LIKE', '%'.$ic.'%')
	->get();

	return view('semakan-keputusan', compact('result'));
});

Route::get('/pelaporan-view', function () {
    return view('pelaporan-view');
});

Route::get('/pelaporan-listData', function () {
    return view('pelaporan-listData');
});


Auth::routes();

	Route::get('/admin/passwords/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.passwords.request');
	Route::post('/admin/passwords/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.passwords.email');
	Route::get('/auth/admin/passwords/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('auth.admin.passwords.reset');
	// Route::get('/auth/admin/passwords/email/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('auth.admin.passwords.email');
	Route::post('/admin/passwords/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.passwords.update');

 Route::prefix('admin')->group(function() {
 	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/senarai-major', 'AdminGetController@senaraimajor')->name('admin.senarai-major');
	Route::get('/tambah-major', 'AdminGetController@tambahmajor')->name('admin.tambah-major');
	Route::get('/markah-guru', 'AdminGetController@markahguru')->name('admin.markah-guru');
	Route::get('/markah-kakitangan', 'AdminGetController@markahkakitangan')->name('admin.markah-kakitangan');
	Route::get('/permohonanguru', 'AdminGetController@senaraibayar')->name('admin.permohonanguru');
	Route::get('/permohonanguru-notpay', 'AdminGetController@senaraitidakbayar')->name('admin.permohonanguru-notpay');
	Route::get('/permohonan-kakitangan', 'AdminGetController@senaraikakitangan')->name('admin.permohonan-kakitangan');
	Route::get('/permohonan-markah-guru', 'AdminGetController@senaraimarkahguru')->name('admin.permohonan-markah-guru');
	Route::get('/butiran-pemohon/{id}', 'AdminGetController@butiranpemohon')->name('admin.butiran-pemohon');
	Route::get('/temuduga/{id}', 'AdminGetController@temuduga')->name('admin.temuduga');
	Route::get('/wangpos/{id}', 'AdminGetController@wangpos')->name('admin.wangpos');
	Route::get('/penempatan-guru/{id}', 'AdminGetController@penempatanGuru')->name('admin.penempatan-guru');
	Route::get('/penempatan/{id}', 'AdminGetController@penempatan')->name('admin.penempatan');
	Route::get('/printresume/{id}', 'AdminGetController@printresume')->name('admin.printresume');
	Route::get('/coverletter/{id}', 'AdminGetController@coverletter')->name('admin.coverletter');
	Route::get('/senarai-admin', 'AdminGetController@admin')->name('admin.senarai-admin');
	Route::get('/tambah', 'AdminGetController@addadmin')->name('admin.tambah');

#=======================================auth laporan permohonan=====================================================#

	Route::get('/pelaporan-permohonanGuru', 'AdminGetController@indexKakitangan')->name('Laporan.pelaporan-permohonanGuru');
	Route::get('/pelaporan-permohonanGuru', 'AdminGetController@viewData')->name('Laporan.pelaporan-permohonanGuru');
	
#====================================== end auth laporan permohonan ================================================#

});

#===================================== laporan permohonan ==========================================================#

Route::get('/pelaporan-permohonanKakitangan', 'AdminGetController@viewDataKakitangan')->name('Laporan.pelaporan-permohonanKakitangan');	
Route::get('/carian-laporan-kerja-guru', 'AdminGetController@carianlaporankerjaGuru')->name('carian-laporan-kerja-guru');
Route::get('/carian-laporan-kerja-kakitangan', 'AdminGetController@carianlaporankerjaKakitangan')->name('carian-laporan-kerja-kakitangan');
//Route::get('/pelaporan-listData', 'AdminGetController@listData')->name('Laporan.pelaporan-listData');
Route::get('/muat-turun-butiran-laporanguru/{jawatandipohon}/{daerah}', 'AdminGetController@muatturunbutiranlaporanguru');
//Route::get('/muat-turun-butiran-laporanguru?jawatan=/{jawatan}/&maklumatdiri=/{maklumatdiri}/Bachok&gred=/{gred}/&bidang=/{bidang}/', 'AdminGetController@muatturunbutiranlaporanguru');

Route::get('/muat-turun-butiran-laporankakitangan', 'AdminGetController@muatturunbutiranlaporankakitangan')->name('muat-turun-butiran-laporankakitangan');

#=================================== end laporan permohonan ========================================================#

Route::get('/muat-turun-butiran-pemohon', 'AdminGetController@muatturunbutiranguru')->name('muat-turun-butiran-pemohon');

Route::get('/padampermohonan/{id}', 'AdminGetController@padampermohonan')->name('padampermohonan');
Route::get('/carian-resume-guru', 'AdminGetController@carianResumeGuru')->name('carian-resume-guru');
Route::get('/carian-resume-staff', 'AdminGetController@carianResumeStaff')->name('carian-resume-staff');

Route::post('/update-penempatan-guru/{id}', 'AdminPostController@updatePenempatanGuru')->name('update-penempatan-guru');
Route::post('/update-temuduga/{id}', 'AdminPostController@updateTemuduga')->name('update-temuduga');
Route::post('/insert-temuduga', 'AdminPostController@insertTemuduga')->name('insert-temuduga');
Route::post('/update-wangpos/{id}', 'AdminPostController@updateWangpos')->name('update-wangpos');
Route::post('/tambah-major', 'AdminPostController@tambahmajor')->name('tambah-major');
Route::post('/tambah-admin', 'AdminPostController@tambahadmin')->name('tambah-admin');
Route::post('/kemaskinimarkahguru', 'AdminPostController@kemaskinimarkahguru')->name('kemaskinimarkahguru');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jawatan', 'HomeController@jawatan')->name('jawatan');

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
Route::post('/insertjenisjawatan/{id}', 'PostController@jenisjawatan');
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

Route::post('/batalpermohonan/{id}', 'PostController@batalpermohonan');

Route::get('/printresume/{id}', 'GetController@printresume')->name('printresume');
Route::get('/coverletter/{id}', 'GetController@coverletter')->name('coverletter');

Route::get('/profile', 'GetController@profile')-> name('profile');
Route::get('/tetapan', 'GetController@tetapan')-> name('tetapan');

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
Route::get('/kemaskini/jawatan', 'GetController@updatejawatan')-> name('kemaskini.jawatan');
Route::get('/kemaskini/gambar', 'GetController@updategambar')-> name('kemaskini.gambar');

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
Route::post('/updatejawatan/{id}', 'UpdateController@updatejawatan')->name('updatejawatan');

Route::get('/tukarkatalaluan/{id}', 'UpdateController@tukarkatalaluan')->name('tukarkatalaluan');
Route::post('/tukargambar', 'UpdateController@tukargambar')->name('tukargambar');


Route::post('/insertmd2', 'NewController@add2');
Route::post('/insertrujukan2', 'NewController@rujukan2');
Route::post('/insertpengalaman2', 'NewController@pengalaman2');
Route::post('/insertkokurikulum2', 'NewController@kokuri2');

Route::post('/spm2', 'NewController@spm2');
Route::post('/diploma2', 'NewController@diploma2');
Route::post('/ijazah2', 'NewController@ijazah2');
Route::post('/stam2', 'NewController@stam2');
Route::post('/tahfiz2', 'NewController@tahfiz2');
Route::post('/sijil2', 'NewController@sijil2');
Route::post('/maklumatdiri2', 'NewController@sijil2');
