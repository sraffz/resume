<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\maklumatdiri;
use App\pengalaman;
use App\rujukan;
use App\User;
use App\kokurikulum;
use App\jawatan;

use App\ijazah;
use App\diploma;
use App\SPM;
use App\stam;
use App\tahfiz;
use App\sijil;

use App\resume_pembatalan;
use App\resume_penempatan;
use App\resume_temuduga;
use App\resume_bayaran;

class NewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
	// maklumat diri
    public function add2(Request $request){

    	$maklumatdiris = new maklumatdiri;
    	$users = new User;
    	$maklumatdiris->id = Auth::id();
    	$maklumatdiris->nama = $request->input('name');
    	$maklumatdiris->ic = $request->input('ic');
    	$maklumatdiris->alamat = $request->input('address');
        $maklumatdiris->poskod = $request->input('poskod');
        $maklumatdiris->daerah = $request->input('daerah');
        $maklumatdiris->negeri = $request->input('negeri');
    	$maklumatdiris->jantina = $request->input('jantina');
    	$maklumatdiris->tempatlahir = $request->input('tempatlahir');
    	$maklumatdiris->status = $request->input('status');
    	$maklumatdiris->email = $request->input('email');
    	$maklumatdiris->nohp = $request->input('hp');
    	$maklumatdiris->save();
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }

    // rujukan
    public function rujukan2(Request $request){
    	$rujukan = new rujukan;
    	$users = new User;
    	$rujukan->id = Auth::id();
    	$rujukan->namarujukan = $request->input('namarujukan');
    	$rujukan->notelrujukan = $request->input('notelrujukan');
    	$rujukan->jawatanrujukan = $request->input('jawatan');
    	$rujukan->namarujukan2 = $request->input('namarujukan2');
    	$rujukan->notelrujukan2 = $request->input('notelrujukan2');
    	$rujukan->jawatanrujukan2 = $request->input('jawatan2');
		$rujukan->save();
		
		$resume_temuduga = new resume_temuduga;
        $resume_temuduga->id = Auth::id();
        $resume_temuduga->user_id = Auth::id();
        $resume_temuduga->tarikh = 'Tiada';
        $resume_temuduga->markah = 0;
        $resume_temuduga->nota = 'Akan Disemak';
        $resume_temuduga->save();
        
        $resume_penempatan = new resume_penempatan;
        $resume_penempatan->id = Auth::id();
        $resume_penempatan->user_id = Auth::id();
        $resume_penempatan->tarikh_lantikan = 'Tiada';
        $resume_penempatan->tempat_lantikan = 'Tiada';
        $resume_penempatan->save();
        
        $resume_bayaran = new resume_bayaran;
        $resume_bayaran->id = Auth::id();
        $resume_bayaran->user_id = Auth::id();
        $resume_bayaran->bayaran = 'Tidak';
        $resume_bayaran->jenisbayaran = 'Tiada';
        $resume_bayaran->no_slip_rujukan = 'Tiada';
        $resume_bayaran->no_siri = 6000+Auth::id();
		$resume_bayaran->save();
		
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }

    // Pengalaman
    public function pengalaman2(Request $request){
    	$pengalaman = new pengalaman;
    	$users = new User;
    	$pengalaman->id = Auth::id();
    	$pengalaman->namasyr = $request->input('namasyarikat');
    	$pengalaman->alamatsyr = $request->input('alamatsyarikat');
    	$pengalaman->notelsyr = $request->input('notelsyarikat');
    	$pengalaman->jwtnsyr = $request->input('jawatan');
    	$pengalaman->tempohkhidmat = $request->input('tempohkhidmat');
    	$pengalaman->save();
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }

    // Ko-Kurikulum
    public function kokuri2(Request $request){
    	$kokurikulum = new kokurikulum;
    	$users = new User;
    	$kokurikulum->id = Auth::id();
    	$kokurikulum->sukan = $request->input('sukan');
    	$kokurikulum->peringkat = $request->input('peringkat');
    	$kokurikulum->sukan2 = $request->input('sukan2');
    	$kokurikulum->peringkat2 = $request->input('peringkat2');
    	$kokurikulum->sukan3 = $request->input('sukan3');
    	$kokurikulum->peringkat3 = $request->input('peringkat3');		

    	$kokurikulum->namakelab = $request->input('persatuan');
    	$kokurikulum->jawatan = $request->input('jawatan');
    	$kokurikulum->peringkatkelab = $request->input('peringkatkelab');
    	$kokurikulum->namakelab2 = $request->input('persatuan2');
    	$kokurikulum->jawatan2 = $request->input('jawatan2');
    	$kokurikulum->peringkatkelab2 = $request->input('peringkatkelab2');
    	$kokurikulum->namakelab3 = $request->input('persatuan3');
    	$kokurikulum->jawatan3 = $request->input('jawatan3');
    	$kokurikulum->peringkatkelab3 = $request->input('peringkatkelab3');

    	$kokurikulum->save();
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }


    public function ijazah2(Request $request){
    	$ijazah = new ijazah;
    	$users = new User;
    	$ijazah->id = Auth::id();
    	$ijazah->tahungrad = $request->input('tahundeg');
    	$ijazah->institusi = $request->input('tempatbelajar');
    	$ijazah->bidang = $request->input('kursus');
    	$ijazah->cgpa = $request->input('cgpa');
    	$ijazah->save();
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }

    public function diploma2(Request $request){
    	$diploma = new diploma;
    	$users = new User;
    	$diploma->id = Auth::id();
    	$diploma->tahungrad = $request->input('tahundip');
    	$diploma->institusi = $request->input('tempatbelajar');
    	$diploma->bidang = $request->input('kursus');
    	$diploma->cgpa = $request->input('cgpa');
    	$diploma->save();
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }

    public function stam2(Request $request){
    	$stam = new stam;
    	$users = new User;
    	$stam->id = Auth::id();
    	$stam->mt = $request->input('mt');
    	$stam->grd = $request->input('grad');
    	$stam->mt2 = $request->input('mt2');
    	$stam->grd2 = $request->input('grad2');
    	$stam->mt3 = $request->input('mt3');
    	$stam->grd3 = $request->input('grad3');
    	$stam->mt4 = $request->input('mt4');
    	$stam->grd4 = $request->input('grad4');
    	$stam->mt5 = $request->input('mt5');
    	$stam->grd5 = $request->input('grad5');
    	$stam->mt6 = $request->input('mt6');
    	$stam->grd6 = $request->input('grad6');
    	$stam->mt7 = $request->input('mt7');
    	$stam->grd7 = $request->input('grad7');
    	$stam->mt8 = $request->input('mt8');
    	$stam->grd8 = $request->input('grad8');
    	$stam->mt9 = $request->input('mt9');
    	$stam->grd9 = $request->input('grad9');
    	$stam->mt10 = $request->input('mt10');
    	$stam->grd10 = $request->input('grad10');
        $stam->mt11 = $request->input('mt11');
        $stam->grd11 = $request->input('grad11');
        $stam->mt12 = $request->input('mt12');
        $stam->grd12 = $request->input('grad12');
        $stam->mt13 = $request->input('mt13');
        $stam->grd13 = $request->input('grad13');
        $stam->mt14 = $request->input('mt14');
        $stam->grd14 = $request->input('grad14');
        $stam->mt15 = $request->input('mt15');
        $stam->grd15 = $request->input('grad15');
    	$stam->save();
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }

    public function sijil2(Request $request){
    	$sijil = new sijil;
    	$users = new User;
    	$sijil->id = Auth::id();
        $sijil->tahungrad = $request->input('tahunsijil');
        $sijil->institusi = $request->input('tempatbelajar');
        $sijil->bidang = $request->input('kursus');
        $sijil->cgpa = $request->input('cgpa');
        $sijil->save();
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }

    public function tahfiz2(Request $request){
    	$tahfiz = new tahfiz;
    	$users = new User;
    	$tahfiz->id = Auth::id();
    	$tahfiz->tahungradsijil = $request->input('tahunsijil');
        $tahfiz->institusisijil = $request->input('tempatbelajarsijil');
        $tahfiz->bidangsijil = $request->input('kursussijil');
        $tahfiz->cgpasijil = $request->input('cgpasijil');

        $tahfiz->tahungraddiploma = $request->input('tahundip');
        $tahfiz->institusidiploma = $request->input('tempatbelajardip');
        $tahfiz->bidangdiploma = $request->input('kursusdip');
        $tahfiz->cgpadiploma = $request->input('cgpadip');

        $tahfiz->tahungradijazah = $request->input('tahuntahundegdip');
        $tahfiz->institusiijazah = $request->input('tempatbelajardeg');
        $tahfiz->bidangijazah = $request->input('kursusdeg');
        $tahfiz->cgpaijazah = $request->input('cgpadeg');
        $tahfiz->save();
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }

    public function spm2(Request $request){
    	$spm = new SPM;
    	$users = new User;
    	$spm->id = Auth::id();
    	$spm->mt = $request->input('mt');
    	$spm->grd = $request->input('grad');
    	$spm->mt2 = $request->input('mt2');
    	$spm->grd2 = $request->input('grad2');
    	$spm->mt3 = $request->input('mt3');
    	$spm->grd3 = $request->input('grad3');
    	$spm->mt4 = $request->input('mt4');
    	$spm->grd4 = $request->input('grad4');
    	$spm->mt5 = $request->input('mt5');
    	$spm->grd5 = $request->input('grad5');
    	$spm->mt6 = $request->input('mt6');
    	$spm->grd6 = $request->input('grad6');
    	$spm->mt7 = $request->input('mt7');
    	$spm->grd7 = $request->input('grad7');
    	$spm->mt8 = $request->input('mt8');
    	$spm->grd8 = $request->input('grad8');
    	$spm->mt9 = $request->input('mt9');
    	$spm->grd9 = $request->input('grad9');
    	$spm->mt10 = $request->input('mt10');
    	$spm->grd10 = $request->input('grad10');
        $spm->mt11 = $request->input('mt11');
        $spm->grd11 = $request->input('grad11');
        $spm->mt12 = $request->input('mt12');
        $spm->grd12 = $request->input('grad12');
        $spm->mt13 = $request->input('mt13');
        $spm->grd13 = $request->input('grad13');
        $spm->mt14 = $request->input('mt14');
        $spm->grd14 = $request->input('grad14');
        $spm->mt15 = $request->input('mt15');
        $spm->grd15 = $request->input('grad15');
        $spm->save();
    	return redirect('/profile')->with('info', 'Maklumat berjaya disimpan');
    }
}
