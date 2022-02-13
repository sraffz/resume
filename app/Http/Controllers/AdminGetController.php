<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Auth;

use App\Exports\ButiranPermohonanGuru;
use App\Exports\PelaporanButiranPermohonaGuru;
use Maatwebsite\Excel\Facades\Excel;

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

use App\resume_penempatan;
use App\resume_temuduga;
use App\resume_bayaran;
use App\resume_perananAdmin;
use App\resume_kemaskini;

use App\File;
use App\Sekolah;
use App\Major;
use DB;
use App\RakGuru;


class AdminGetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function senaraibayar()
    {
        
        if (request()->has('jawatans.jawatandipohon')) {
            $pemohon = User::where('jawatans.jawatandipohon', request('jawatans.jawatandipohon'))
            ->join('jawatans', 'users.id', '=', 'jawatans.id')
            ->paginate(5);
            
        }else{
            
            $pemohon = User::select('users.id','users.namapenuh', 'users.ic', 'jawatans.jawatandipohon', 'jawatans.jawatandipohon2', 'resume_temuduga.tarikh', 'resume_temuduga.markah', 'resume_penempatan.tarikh_lantikan', 'resume_penempatan.tempat_lantikan', 'resume_bayaran.bayaran', 'resume_bayaran.no_siri')
            ->join('jawatans', 'users.id', '=', 'jawatans.id')
            ->join('maklumatdiris',  'maklumatdiris.id', '=', 'jawatans.id')
            ->join('kokurikulums', 'kokurikulums.id', '=', 'maklumatdiris.id')
            ->join('s_p_ms', 's_p_ms.id', '=', 'maklumatdiris.id')
            ->join('pengalamen', 'pengalamen.id', '=', 'kokurikulums.id')
            ->join('rujukans', 'rujukans.id', '=', 'jawatans.id')
            ->join('resume_temuduga', 'resume_temuduga.id', '=', 'users.id')
            ->join('resume_penempatan', 'resume_penempatan.id', '=', 'users.id')
            ->join('resume_bayaran', 'resume_bayaran.id', '=', 'users.id')
            ->where('resume_bayaran.bayaran', '=', 'Ya')
            ->where('users.blacklist', '=', null)
            ->groupby('users.id')
            ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
            ->get(); 
        }
        
        return view('permohonanguru', ['pemohon' => $pemohon]);
    }
    
    #======================================= laporan permohonan =====================================================#
   
    public function indexKakitangan()
    {
    
        return view('Laporan.pelaporan-permohonanKakitangan');
    }

    //form guru untuk jawatan,daerah,gred
    public function viewData(Request $req)
    {
        $jwt = $req->input('jawatan');
        
        $jawatan = jawatan::select('jawatandipohon')
                ->where('jenis', 'Guru')
                ->groupBy('jawatandipohon')
                ->get();

        $maklumatdiri = maklumatdiri::select('daerah')
                ->groupBy('daerah')
                ->get();

        $gred = SPM::select('grd')
                ->groupBy('grd')
                ->get();

        $bidang = ijazah::select('bidang')
                ->groupBy('bidang')
                ->get();

     
         return view('Laporan.pelaporan-permohonanGuru',compact('jawatan','maklumatdiri','gred','bidang'));
    }
    //end form guru untuk jawatan,daerah,gred


    //form kakitangan untuk jawatan,daerah,gred
    public function viewDataKakitangan(Request $req)
    {
        $jwt = $req->input('jawatan');
        
        $jawatan = jawatan::select('jawatandipohon')
                ->where('jenis', 'Kakitangan')
                ->groupBy('jawatandipohon')
                ->get();

        $maklumatdiri = maklumatdiri::select('daerah')
                ->groupBy('daerah')
                ->get();

        $gred = SPM::select('grd')
                ->groupBy('grd')
                ->get();

         $bidang = ijazah::select('bidang')
             ->groupBy('bidang')
            ->get();        
     
         return view('Laporan.pelaporan-permohonanKakitangan',compact('jawatan','maklumatdiri','gred','bidang'));
    }
    //end form kakitangan untuk jawatan,daerah,gred

    //view data guru after tekan button hantar
    public function carianlaporankerjaGuru(Request $req)
    {
        $jawatan = $req->input('jawatan');
        $maklumatdiri = $req->input('maklumatdiri');
        $gred = $req->input('gred');
        $bidang = $req->input('bidang');

        $pemohon = User::select('users.*','jawatans.*', 'maklumatdiris.*', 's_p_ms.*',  'ijazahs.bidang as ijazah', 'diplomas.bidang as diploma')
                ->join('jawatans', 'users.id', '=', 'jawatans.id')
                ->leftjoin('s_p_ms', 'users.id', '=', 's_p_ms.id')
                ->leftjoin('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->leftjoin('diplomas', 'diplomas.id', '=', 'users.id')
                ->join('maklumatdiris',  'maklumatdiris.id', '=', 'jawatans.id')
                ->where('jawatans.jenis', 'Guru')
                ->where('users.blacklist', '=', null)
                ->where(function($query) use ($jawatan){
                    return $query
                    ->where('jawatans.jawatandipohon', 'LIKE' , '%'.$jawatan.'%')
                    ->orWhere('jawatans.jawatandipohon2', 'LIKE' , '%'.$jawatan.'%');
                })
                ->Where('maklumatdiris.daerah', 'LIKE' , $maklumatdiri)
                ->Where('s_p_ms.grd', 'LIKE' , $gred)
                ->Where('ijazahs.bidang', 'LIKE' , '%'.$bidang.'%')
                ->getQuery() 
                ->get();

            $count = User::select('users')
            ->select(DB::raw('count(*) as bil'))
            ->join('jawatans', 'users.id', '=', 'jawatans.id')
            ->leftjoin('s_p_ms', 'users.id', '=', 's_p_ms.id')
            ->leftjoin('ijazahs', 'ijazahs.id', '=', 'users.id')
            ->leftjoin('diplomas', 'diplomas.id', '=', 'users.id')
            ->join('maklumatdiris',  'maklumatdiris.id', '=', 'jawatans.id')
            ->where('jawatans.jenis', 'Guru')
            ->where('users.blacklist', '=', null)
            ->where(function($query) use ($jawatan){
                
                return $query
                ->where('jawatans.jawatandipohon', 'LIKE' , '%'.$jawatan.'%')
                ->orWhere('jawatans.jawatandipohon2', 'LIKE' , '%'.$jawatan.'%');
            })
            ->Where('maklumatdiris.daerah','LIKE', $maklumatdiri)
            ->Where('s_p_ms.grd','LIKE', $gred)
            ->Where('ijazahs.bidang', 'LIKE' , '%'.$bidang.'%')
            ->get(); 

        return view('Laporan.pelaporan-listData', compact('pemohon', 'count','jawatan', 'maklumatdiri', 'gred', 'bidang'));
    }
    // end view data after tekan button hantar


    //view data kakitangan after tekan button hantar  
    public function carianlaporankerjaKakitangan(Request $req)
    {   $jawatan = $req->input('jawatan');
        $maklumatdiri = $req->input('maklumatdiri');
        $gred = $req->input('gred');
        $bidang = $req->input('bidang');

        $pemohon = User::select('users.*','jawatans.*', 'maklumatdiris.*', 's_p_ms.*',  'ijazahs.bidang as ijazah', 'diplomas.bidang as diploma')
                ->join('jawatans', 'users.id', '=', 'jawatans.id')
                ->leftjoin('s_p_ms', 'users.id', '=', 's_p_ms.id')
                ->leftjoin('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->leftjoin('diplomas', 'diplomas.id', '=', 'users.id')
                ->join('maklumatdiris',  'maklumatdiris.id', '=', 'jawatans.id')
                ->where('jawatans.jenis', 'Kakitangan')
                ->where('users.blacklist', '=', null)
                ->where(function($query) use ($jawatan){
                    return $query
                    ->where('jawatans.jawatandipohon', 'LIKE' , '%'.$jawatan.'%')
                    ->orWhere('jawatans.jawatandipohon2', 'LIKE' , '%'.$jawatan.'%');
                })
                ->Where('maklumatdiris.daerah', 'LIKE' , $maklumatdiri)
                ->Where('s_p_ms.grd', 'LIKE' , $gred)
                ->Where('ijazahs.bidang', 'LIKE' , $bidang)
                ->getQuery() 
                ->get();

            $count = User::select('users')
            ->select(DB::raw('count(*) as jumlah'))
            ->join('jawatans', 'users.id', '=', 'jawatans.id')
            ->leftjoin('s_p_ms', 'users.id', '=', 's_p_ms.id')
            ->leftjoin('ijazahs', 'ijazahs.id', '=', 'users.id')
            ->leftjoin('diplomas', 'diplomas.id', '=', 'users.id')
            ->join('maklumatdiris',  'maklumatdiris.id', '=', 'jawatans.id')
            ->where('jawatans.jenis', 'Kakitangan')
            ->where('users.blacklist', '=', null)
            ->where(function($query) use ($jawatan){
                
                return $query
                ->where('jawatans.jawatandipohon', 'LIKE' , '%'.$jawatan.'%')
                ->orWhere('jawatans.jawatandipohon2', 'LIKE' , '%'.$jawatan.'%');
            })
            ->Where('maklumatdiris.daerah','LIKE', $maklumatdiri)
            ->Where('s_p_ms.grd','LIKE', $gred)
            ->Where('ijazahs.bidang', 'LIKE' , $bidang)
            ->get(); 

        return view('Laporan.pelaporan-listDataKakitangan', compact('pemohon', 'count'));
    }
    //end view data kakitangan after tekan button hantar


    // muat turun data (excel)
    public function muatturunbutiranlaporanguru($jawatan,$maklumatdiri)
    {
        // $jawatan = Input::get('jawatan');
        // $maklumatdiri = Input::get('maklumatdiri');
        // $gred = Input::get('gred');
        // $bidang = Input::get('bidang');

        return Excel::download(new PelaporanButiranPermohonaGuru($jawatan,$maklumatdiri), 'Butiran Permohonan Guru.xlsx');
    }
    //end muat turun data (excel)

    #========================================= end laporan permohonan ================================================#

    public function senaraimajor() 
    {
        $major = Major::all();
        
        return view('senarai-major', ['major' => $major]);
    }
    
    public function tambahmajor() 
    {
        return view('tambah-major');
    }
    
    public function carianResumeGuru(Request $req)
    {
        $jawatan = $req->input('jawatan');
        $daerah = $req->input('daerah');

        $pemohon = User::select('users.*','jawatans.*', 'maklumatdiris.*', 's_p_ms.*',  'ijazahs.bidang as ijazah', 'diplomas.bidang as diploma')
                // $pemohon = User::select('users.*')
                ->join('jawatans', 'users.id', '=', 'jawatans.id')
                ->leftjoin('s_p_ms', 'users.id', '=', 's_p_ms.id')
                ->leftjoin('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->leftjoin('diplomas', 'diplomas.id', '=', 'users.id')
                ->join('maklumatdiris',  'maklumatdiris.id', '=', 'jawatans.id')
                ->where('jawatans.jenis', 'Guru')
                ->where('users.blacklist', '=', null)
                ->Where('maklumatdiris.daerah', 'LIKE' , '%' .$daerah. '%')
                // ->Where('jawatans.jawatandipohon', 'LIKE' , '%' .$jawatan. '%')
                ->where(function($query) use ($jawatan){
                    return $query
                    ->where('jawatans.jawatandipohon', 'LIKE' , '%'.$jawatan.'%')
                    ->orWhere('jawatans.jawatandipohon2', 'LIKE' , '%'.$jawatan.'%');
                })
                ->getQuery() 
                ->get();

        $degree = User::select('users.*', 'ijazahs.bidang')
        ->join('ijazahs', 'ijazahs.id', '=', 'users.id')
        ->get();

        $diploma = User::select('users.*', 'diplomas.bidang')
        ->join('diplomas', 'diplomas.id', '=', 'users.id')
        ->get();

        $spm = User::select('users.*', 's_p_ms.grd')
        ->join('s_p_ms', 's_p_ms.id', '=', 'users.id')
        ->get();

        $jawatan = jawatan::select('jawatandipohon')
                ->where('jenis', 'Guru')
                ->groupBy('jawatandipohon')
                ->get();
                
        return view('permohonanguru-notpay', compact('pemohon', 'degree', 'diploma','jawatan'));
    }

    public function carianResumeStaff(Request $req)
    {
        $jawatan = $req->input('jawatan');
        $daerah = $req->input('daerah');

        $pemohon = User::select('users.*','asc','jawatans.*', 'maklumatdiris.*', 's_p_ms.*',  'ijazahs.bidang as ijazah', 'diplomas.bidang as diploma')
                // $pemohon = User::select('users.*')
                ->join('jawatans', 'users.id', '=', 'jawatans.id')
                ->leftjoin('s_p_ms', 'users.id', '=', 's_p_ms.id')
                ->leftjoin('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->leftjoin('diplomas', 'diplomas.id', '=', 'users.id')
                ->join('maklumatdiris',  'maklumatdiris.id', '=', 'jawatans.id')
                ->where('jawatans.jenis', 'Kakitangan')
                ->where('users.blacklist', '=', null)
                ->Where('maklumatdiris.daerah', 'LIKE' , '%' .$daerah. '%')
                ->where(function($query) use ($jawatan){
                    return $query
                    ->where('jawatans.jawatandipohon', 'LIKE' , '%'.$jawatan.'%')
                    ->orWhere('jawatans.jawatandipohon2', 'LIKE' , '%'.$jawatan.'%');
                })
                ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                ->get();
                // }
                
                return view('admin.permohonan-kakitangan', ['pemohon' => $pemohon]);
    }

    public function senaraitidakbayar()
    {
        // if (request()->has('jawatans.jawatandipohon')) {
            //     $pemohon = User::where('jawatans.jawatandipohon', request('jawatans.jawatandipohon'))
            //     ->join('jawatans', 'users.id', '=', 'jawatans.id')
            //     ->get();
            
        // }else{
                // $pemohon = User::select('users.id','users.namapenuh', 'users.ic', 'jawatans.jawatandipohon', 'resume_temuduga.tarikh', 'resume_temuduga.markah', 'resume_penempatan.tarikh_lantikan', 'resume_penempatan.tempat_lantikan', 'resume_bayaran.bayaran', 'resume_bayaran.no_siri')
                $pemohon = User::select('users.*','jawatans.*', 'maklumatdiris.*', 'ijazahs.bidang as ijazah', 'diplomas.bidang as diploma', 's_p_ms.grd')
                // $pemohon = User::select('users.*')
                ->join('jawatans', 'users.id', '=', 'jawatans.id')
                ->join('maklumatdiris',  'maklumatdiris.id', '=', 'jawatans.id')
                ->leftjoin('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->leftjoin('diplomas', 'diplomas.id', '=', 'users.id')
                // ->join('kokurikulums', 'kokurikulums.id', '=', 'maklumatdiris.id')
                ->join('s_p_ms', 's_p_ms.id', '=', 'maklumatdiris.id')
                // ->join('pengalamen', 'pengalamen.id', '=', 'kokurikulums.id')
                // ->join('rujukans', 'rujukans.id', '=', 'jawatans.id')
                // ->join('resume_temuduga', 'resume_temuduga.id', '=', 'users.id')
                // ->join('resume_penempatan', 'resume_penempatan.id', '=', 'users.id')
                // ->join('resume_bayaran', 'resume_bayaran.id', '=', 'users.id')
                // ->where('resume_bayaran.bayaran', '=', 'Tidak')
                ->where('jawatans.jenis', 'Guru')
                ->where('users.blacklist', '=', null)
                // ->groupby('users.id')
                ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                ->get();
                // }

                $degree = User::select('users.*', 'ijazahs.bidang')
                ->join('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->get();

                $diploma = User::select('users.*', 'diplomas.bidang')
                ->join('diplomas', 'diplomas.id', '=', 'users.id')
                ->get();

                $jawatan = jawatan::select('jawatandipohon')
                ->where('jenis', 'Guru')
                ->groupBy('jawatandipohon')
                ->get();

                // $spm = User::select('user.*', 's_p_ms.grd')
                // ->join('s_p_ms', 's_p_ms.id', '=', 'users.id')
                // ->get();
                
                return view('permohonanguru-notpay', compact('pemohon', 'degree', 'diploma', 'jawatan'));
            }
            
            public function senaraikakitangan()
            { 
                $pemohon = User::select('users.*','jawatans.*', 'maklumatdiris.*','ijazahs.bidang as ijazah', 'diplomas.bidang as diploma', 's_p_ms.grd')
                ->join('jawatans', 'users.id', '=', 'jawatans.id')
                ->join('maklumatdiris',  'maklumatdiris.id', '=', 'jawatans.id')
                ->join('kokurikulums', 'kokurikulums.id', '=', 'maklumatdiris.id')
                ->join('s_p_ms', 's_p_ms.id', '=', 'maklumatdiris.id')
                ->leftjoin('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->leftjoin('diplomas', 'diplomas.id', '=', 'users.id')
                // ->join('pengalamen', 'pengalamen.id', '=', 'kokurikulums.id')
                // ->join('rujukans', 'rujukans.id', '=', 'jawatans.id')
                ->where('jawatans.jenis', 'Kakitangan')
                ->where('users.blacklist', '=', null)
                // ->groupby('users.id')
                ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                ->get();
                // }
                
                return view('admin.permohonan-kakitangan', ['pemohon' => $pemohon]);
            }


            public function senaraimarkahguru()
            {
                return view('admin.permohonan-markah-guru');
            }
            
            public function butiranpemohon($id){
                
                $pemohon = User::where('users.id', $id)->get();
                
                $md = User::where('users.id', $id)
                ->join('maklumatdiris', 'maklumatdiris.id', '=', 'users.id')
                ->get();
                
                $degree = User::where('users.id', $id)
                ->join('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->get();
                
                $diploma = User::where('users.id', $id)
                ->join('diplomas', 'diplomas.id', '=', 'users.id')
                ->get();
                
                $tahfiz = User::where('users.id', $id)
                ->join('tahfizs', 'tahfizs.id', '=', 'users.id')
                ->get();
                
                $sijil = User::where('users.id', $id)
                ->join('sijils', 'sijils.id', '=', 'users.id')
                ->get();
                
                $stam = User::where('users.id', $id)
                ->join('stams', 'stams.id', '=', 'users.id')
                ->get();
                
                $spm = User::where('users.id', $id)
                ->join('s_p_ms', 's_p_ms.id', '=', 'users.id')
                ->get();
                
                $kokurikulums = User::where('users.id', $id)
                ->join('kokurikulums', 'kokurikulums.id', '=', 'users.id')
                ->get();
                
                $exp = User::where('users.id', $id)
                ->join('pengalamen', 'pengalamen.id', '=', 'users.id')
                ->get();
                
                $prefer = User::where('users.id', $id)
                ->join('rujukans', 'rujukans.id', '=', 'users.id')
                ->get();
                
                $img = User::where('users.id', $id)
                ->join('files', 'files.id', '=', 'users.id')
                ->get();
                
                $temuduga = User::where('users.id', $id)
                ->join('resume_temuduga', 'resume_temuduga.id', '=', 'users.id')
                ->get();
                
                $penempatan = User::where('users.id', $id)
                ->join('resume_penempatan', 'resume_penempatan.id', '=', 'users.id')
                ->get();
                
                $bayaran = User::where('users.id', $id)
                ->join('resume_bayaran', 'resume_bayaran.id', '=', 'users.id')
                ->get();

                $kemaskini = resume_kemaskini::where('user_id', $id)->get();
                
                $jawatan = jawatan::where('id', $id)->get();

                return view('butiran-pemohon', ['kemaskini' => $kemaskini, 'jawatan' => $jawatan, 'pemohon' => $pemohon, 'md' => $md, 'degree' => $degree, 'diploma' => $diploma, 'tahfiz' => $tahfiz, 'sijil' => $sijil, 'stam' => $stam, 'spm' => $spm, 'kokurikulums' => $kokurikulums, 'exp' => $exp, 'prefer' => $prefer, 'img' => $img, 'temuduga' => $temuduga, 'penempatan' => $penempatan, 'bayaran' => $bayaran]);
            }
            
            public function printresume($id){
                
                $md = User::where('users.id', $id)
                ->join('maklumatdiris', 'maklumatdiris.id', '=', 'users.id')
                ->get();
                
                $degree = User::where('users.id', $id)
                ->join('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->get();
                
                $diploma = User::where('users.id', $id)
                ->join('diplomas', 'diplomas.id', '=', 'users.id')
                ->get();
                
                $tahfiz = User::where('users.id', $id)
                ->join('tahfizs', 'tahfizs.id', '=', 'users.id')
                ->get();
                
                $sijil = User::where('users.id', $id)
                ->join('sijils', 'sijils.id', '=', 'users.id')
                ->get();
                
                $stam = User::where('users.id', $id)
                ->join('stams', 'stams.id', '=', 'users.id')
                ->get();
                
                $spm = User::where('users.id', $id)
                ->join('s_p_ms', 's_p_ms.id', '=', 'users.id')
                ->get();
                
                $kokurikulums = User::where('users.id', $id)
                ->join('kokurikulums', 'kokurikulums.id', '=', 'users.id')
                ->get();
                
                $exp = User::where('users.id', $id)
                ->join('pengalamen', 'pengalamen.id', '=', 'users.id')
                ->get();
                
                $prefer = User::where('users.id', $id)
                ->join('rujukans', 'rujukans.id', '=', 'users.id')
                ->get();
                
                $img = User::where('users.id', $id)
                ->join('files', 'files.id', '=', 'users.id')
                ->get();
                
                $jwtan = User::where('users.id', $id)
                ->join('jawatans', 'jawatans.id', '=', 'users.id')
                ->get();

                $resume_temuduga = resume_temuduga::where('user_id', $id)
                ->get();
                
                return view('/admin/printresume', compact(
                    'md', 
                    'degree', 'diploma', 'tahfiz', 
                    'sijil', 'stam', 'spm', 
                    'kokurikulums', 
                    'exp', 'prefer', 
                    'img', 'jwtan', 'resume_temuduga')
                );
            }
            
            public function coverletter($id){
                $info = User::where('users.id', $id)
                ->join('maklumatdiris', 'maklumatdiris.id', '=', 'users.id')
                ->join('jawatans', 'jawatans.id', '=', 'users.id')
                ->get();
                
                $ijazahs = User::where('users.id', $id)
                ->join('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->get();
                
                $diploma = User::where('users.id', $id)
                ->join('diplomas', 'diplomas.id', '=', 'users.id')
                ->get();
                
                $tahfiz = User::where('users.id', $id)
                ->join('tahfizs', 'tahfizs.id', '=', 'users.id')
                ->get();
                
                $sijil = User::where('users.id', $id)
                ->join('sijils', 'sijils.id', '=', 'users.id')
                ->get();
                
                return view('coverletter', ['info' => $info, 'ijazahs' => $ijazahs, 'diploma' => $diploma, 'tahfiz' => $tahfiz, 'sijil' => $sijil]);
            }
            
            public function temuduga($id) 
            {
                $temuduga = resume_temuduga::where('user_id', $id)
                ->get();

                $user = User::where('id', $id)->get();
                
                return view('temuduga', compact('temuduga', 'user'));
            }
            
            public function penempatanGuru($id) 
            {
                $sekolah = Sekolah::all();
                
                $penempatan = resume_penempatan::where('user_id', $id)
                ->get();
                
                return view('penempatan-guru', ['penempatan' => $penempatan, 'sekolah' => $sekolah]);
            }
            
            public function wangpos($id) 
            {
                $bayaran = resume_bayaran::where('user_id', $id)
                ->get();
                
                $rakFail = RakGuru::select('rak_gurus.rak', 'rak_gurus.norujukan', 'majors.major_guru', 'majors.kod_major')
                ->where('rak_gurus.user_id', $id)
                ->join('majors', 'majors.kod_major', '=', 'rak_gurus.rak')
                ->get();
                
                $major = jawatan::where('id', $id)
                ->get();
                
                $rak = Major::all();
                
                return view('wangpos', ['bayaran' => $bayaran, 'major' => $major, 'rak' => $rak, 'rakFail' => $rakFail]);
            }
            
            public function admin()
            {
                $a = Admin::where('id', Auth::id())->first();

                $admin = Admin::join('resume_perananadmin', 'resume_perananadmin.kod', '=','admins.peranan')
                ->get();
                
                if ($a->peranan == 1) {
                    return view('admin.senarai-admin', compact('admin'));
                } else {
                   return redirect('/admin');
                }
            }
            
            public function addadmin()
            {
                $a = Admin::where('id', Auth::id())->first();

                $peranan = resume_perananAdmin::all();
                
                if ($a->peranan == 1) {
                    return view('admin.tambah', compact('peranan'));
                } else {
                   return redirect('/admin');
                }                
            }

            public function padampermohonan($id)
            {

                $pemohon = User::where('users.id', $id)->delete();
                
                $md = User::where('users.id', $id)
                ->join('maklumatdiris', 'maklumatdiris.id', '=', 'users.id')
                ->delete();
                
                $degree = User::where('users.id', $id)
                ->join('ijazahs', 'ijazahs.id', '=', 'users.id')
                ->delete();
                
                $diploma = User::where('users.id', $id)
                ->join('diplomas', 'diplomas.id', '=', 'users.id')
                ->delete();
                
                $tahfiz = User::where('users.id', $id)
                ->join('tahfizs', 'tahfizs.id', '=', 'users.id')
                ->delete();
                
                $sijil = User::where('users.id', $id)
                ->join('sijils', 'sijils.id', '=', 'users.id')
                ->delete();
                
                $stam = User::where('users.id', $id)
                ->join('stams', 'stams.id', '=', 'users.id')
                ->delete();
                
                $spm = User::where('users.id', $id)
                ->join('s_p_ms', 's_p_ms.id', '=', 'users.id')
                ->delete();
                
                $kokurikulums = User::where('users.id', $id)
                ->join('kokurikulums', 'kokurikulums.id', '=', 'users.id')
                ->delete();
                
                $exp = User::where('users.id', $id)
                ->join('pengalamen', 'pengalamen.id', '=', 'users.id')
                ->delete();
                
                $prefer = User::where('users.id', $id)
                ->join('rujukans', 'rujukans.id', '=', 'users.id')
                ->delete();
                
                $img = User::where('users.id', $id)
                ->join('files', 'files.id', '=', 'users.id')
                ->delete();
                
                $temuduga = User::where('users.id', $id)
                ->join('resume_temuduga', 'resume_temuduga.id', '=', 'users.id')
                ->delete();
                
                $penempatan = User::where('users.id', $id)
                ->join('resume_penempatan', 'resume_penempatan.id', '=', 'users.id')
                ->delete();
                
                $bayaran = User::where('users.id', $id)
                ->join('resume_bayaran', 'resume_bayaran.id', '=', 'users.id')
                ->delete();

                $kemaskini = resume_kemaskini::where('user_id', $id)->delete();
                
                $jawatan = jawatan::where('id', $id)->delete();

                $old = File::where('user_id',  $id)->first();
                if (count($old)>0) {
                    Storage::delete('public/uploads/dp/'.$old->profile);
                }

                $file = File::where('user_id',  $id)->delete();

                return redirect('/admin/permohonanguru-notpay');

            }

            public function muatturunbutiranguru(Request $req )
            {
                $j = $req->input('jawatan');
                
                if ($req->input('jawatan') == 'Guru Arab/Ugama') {
                    $nf = 'Arab-Ugama';
                } elseif ($req->input('jawatan') == 'Guru Pra-Sekolah/Tadika') {
                    $nf = 'Pra Sekolah-Tadika';
                } else {
                    $nf = $req->input('jawatan');
                }

                return Excel::download(new ButiranPermohonanGuru($j), 'Butiran Permohonan Guru '.$nf.'.xlsx');
            }

            public function markahguru()
            {
                $user = User::where('jenis_jawatan', 'Guru')
                ->get();

                return view('admin.markah-guru', compact('user'));
            }

            public function markahkakitangan()
            {
                $user = User::where('jenis_jawatan', 'Kakitangan')
                ->get();

                return view('admin.markah-kakitangan', compact('user'));
            }
            
        }
        