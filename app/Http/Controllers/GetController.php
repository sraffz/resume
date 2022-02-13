<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Auth;

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
use App\Dokumen;

use App\File;
use PDF;

use App\resume_penempatan;
use App\resume_temuduga;
use App\resume_bayaran;
use App\resume_kemaskini;

class GetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function gambar(){


        $users = User::find(Auth::id());
        if (File::where('id', '=', Auth::id())->first()) {
            return redirect('spm');
        }
        return view('uploadpic');

    }
    public function maklumatdiri(){
        $users = User::find(Auth::id());
        if (maklumatdiri::where('id', '=', Auth::id())->first()) {
            return redirect('uploadpic');
        }
        return view('maklumatdiri', ['users' => $users]);

    }

    public function maklumatakademik(){
        // $users = User::find(Auth::id());
        // if (SPM::where('id', '=', Auth::id())->first()) {
        return view('maklumatakademik');
        //  }
        //  return redirect('spm');
    }

    public function pengalaman(){
        $users = User::find(Auth::id());
        if (pengalaman::where('id', '=', Auth::id())->first()) {
            return redirect('rujukan');
        }
        return view('pengalaman');
    }

    public function rujukan(){
        $users = User::find(Auth::id());
        if (rujukan::where('id', '=', Auth::id())->first()) {
            return redirect('/muatnaik-dokumen');
        }
        return view('rujukan');

    }

    public function updokumen(){
        if (dokumen::where('id', '=', Auth::id())->first()) { 

            return redirect('/profile');
        }

        return view('muatnaik-dokumen');        
    }

    public function kokurikulum(){
        $users = User::find(Auth::id());
        if (kokurikulum::where('id', '=', Auth::id())->first()) {
            return redirect('pengalaman');
        }
        return view('kokurikulum');
    }

    public function spm(){
        $users = User::find(Auth::id());
        if (SPM::where('id', '=', Auth::id())->first()) {
            return redirect('maklumatakademik');
        }
        return view('spm');
    }

    public function diploma(){
        $users = User::find(Auth::id());
        if (diploma::where('id', '=', Auth::id())->first()) {
            return redirect('maklumatakademik');
        }
        return view('diploma');

    }

    public function ijazah(){
        $users = User::find(Auth::id());
        if (ijazah::where('id', '=', Auth::id())->first()) {
            return redirect('maklumatakademik');
        }
        return view('ijazah');

    }

    public function sijil(){
        $users = User::find(Auth::id());
        if (sijil::where('id', '=', Auth::id())->first()) {
            return redirect('maklumatakademik');
        }
        return view('sijil');
    }

    public function stam(){
        $users = User::find(Auth::id());
        if (stam::where('id', '=', Auth::id())->first()) {
            return redirect('maklumatakademik');
        }
        return view('stam');
    }

    public function tahfiz(){
        $users = User::find(Auth::id());
        if (tahfiz::where('id', '=', Auth::id())->first()) {
            return redirect('maklumatakademik');
        }
        return view('tahfiz');
    }

    public function pilihjawatan(){ 
        $users = User::find(Auth::id());
        if (jawatan::find('id', Auth::id())->get()) {
            return view('maklumatdiri', ['users' => $users]);     
        }
        return view('home');
    }    

    
    public function updatemaklumatd(){ 
        $users = maklumatdiri::where('id', Auth::id())
        ->first();

        if (maklumatdiri::where('id', '=', Auth::id())->first()) {
            return view('kemaskini.maklumatdiri', compact('users'));
        }
        return view('isibaru.maklumatdiri'); 
 
    } 

    public function updatekokurikulum(){ 
        $users = kokurikulum::where('id', Auth::id())
        ->first();

        if (kokurikulum::where('id', '=', Auth::id())->first()) {
            return view('kemaskini.kokurikulum', ['users' => $users]);
        }
        return view('/isibaru/kokurikulum');     
    } 

    public function updatepengalaman(){ 
        $users = pengalaman::where('id', Auth::id())
        ->first();

        if (pengalaman::where('id', '=', Auth::id())->first()) {
            return view('kemaskini.pengalaman', ['users' => $users]);
        }
        return view('/isibaru/pengalaman');     
    } 

    public function updaterujukan(){ 
        $users = rujukan::where('id', Auth::id())
        ->first();

        if (rujukan::where('id', '=', Auth::id())->first()) {
            return view('kemaskini.rujukan', ['users' => $users]);
        }
        return view('/isibaru/rujukan');   
    } 

    public function updategambar()
    {
        $users = File::where('id', Auth::id())
        ->get();

        return view('kemaskini.gambar', compact('users'));
    }

    public function updateijazah(){ 

        $users = ijazah::where('id', Auth::id())
        ->first();

        if (ijazah::where('id', '=', Auth::id())->first()) {
            return view('kemaskini.ijazah', ['users' => $users]);
        }
        return view('/isibaru/ijazah');     
    }  

    public function updatediploma(){ 
        $users = diploma::where('id', Auth::id())
        ->first();

        if (diploma::where('id', '=', Auth::id())->first()) {
            return view('kemaskini.diploma', ['users' => $users]); 
        }
        else
           return view('/isibaru/diploma');   
   }

   public function updatesijil(){ 
    $users = sijil::where('id', Auth::id())
    ->first();

    if (sijil::where('id', '=', Auth::id())->first()) {
        return view('kemaskini.sijil', ['users' => $users]); 
    }

    return view('/isibaru/sijil');    
}

public function updatetahfiz(){ 
    $users = tahfiz::where('id', Auth::id())
    ->first();

    if (tahfiz::where('id', '=', Auth::id())->first()) {
        return view('kemaskini.tahfiz', ['users' => $users]); 
    }

    return view('/isibaru/tahfiz');        
}

public function updatestam(){ 
    $users = stam::where('id', Auth::id())
    ->first();

    if (stam::where('id', '=', Auth::id())->first()) {
        return view('kemaskini.stam', ['users' => $users]); 
    }

    return view('/isibaru/stam');       
}

public function updatespm(){ 
    $users = SPM::where('id', Auth::id())
    ->first();

    if (spm::where('id', '=', Auth::id())->first()) {
        return view('kemaskini.spm', ['users' => $users]); 
    }

    return view('/isibaru/spm');     
}

public function updatejawatan(){ 
    $users = jawatan::where('id', Auth::id())
    ->first();

    if (jawatan::where('id', '=', Auth::id())->first()) {
        return view('kemaskini.jawatan', ['users' => $users]); 
    } else {
        return view('/isibaru/spm');     
    }

}

public function tetapan()
{
    $img = User::where('users.id',  Auth::id())
    ->join('files', 'users.id', '=', 'files.id')
    ->get();

    return view('tetapan', compact('img'));
}

public function profile(){ 

    $img = User::where('users.id',  Auth::id())
    ->join('files', 'users.id', '=', 'files.id')
    ->get();

    $md = User::where('users.id', Auth::id())
    ->join('maklumatdiris', 'maklumatdiris.id', '=', 'users.id')
    ->get();

    $degree = User::where('users.id', Auth::id())
    ->join('ijazahs', 'ijazahs.id', '=', 'users.id')
    ->get();

    $diploma = User::where('users.id', Auth::id())
    ->join('diplomas', 'diplomas.id', '=', 'users.id')
    ->get();

    $tahfiz = User::where('users.id', Auth::id())
    ->join('tahfizs', 'tahfizs.id', '=', 'users.id')
    ->get();

    $sijil = User::where('users.id', Auth::id())
    ->join('sijils', 'sijils.id', '=', 'users.id')
    ->get();

    $stam = User::where('users.id', Auth::id())
    ->join('stams', 'stams.id', '=', 'users.id')
    ->get();

    $spm = User::where('users.id', Auth::id())
    ->join('s_p_ms', 's_p_ms.id', '=', 'users.id')
    ->get();

    $kokurikulums = User::where('users.id', Auth::id())
    ->join('kokurikulums', 'kokurikulums.id', '=', 'users.id')
    ->get();

    $exp = User::where('users.id', Auth::id())
    ->join('pengalamen', 'pengalamen.id', '=', 'users.id')
    ->get();

    $prefer = User::where('users.id', Auth::id())
    ->join('rujukans', 'rujukans.id', '=', 'users.id')
    ->get();

    $bayaran = User::where('users.id', Auth::id())
    ->join('resume_bayaran', 'resume_bayaran.id', '=', 'users.id')
    ->get();

    $penempatan = User::where('users.id', Auth::id())
    ->join('resume_penempatan', 'resume_penempatan.id', '=', 'users.id')
    ->get();

    $temuduga = User::where('users.id', Auth::id())
    ->join('resume_temuduga', 'resume_temuduga.id', '=', 'users.id')
    ->get();

    $kemaskini = resume_kemaskini::where('user_id', Auth::id())
    ->get();


    return view('/profile', ['kemaskini' => $kemaskini, 'md' => $md, 'degree' => $degree, 'diploma' => $diploma, 'tahfiz' => $tahfiz, 'sijil' => $sijil, 'stam' => $stam, 'spm' => $spm, 'kokurikulums' => $kokurikulums, 'exp' => $exp, 'prefer' => $prefer, 'img' => $img, 'bayaran' => $bayaran, 'penempatan' => $penempatan, 'temuduga' => $temuduga]);     
} 




public function barumaklumatdiri(){

}

public function barumaklumatakademik(){

}

public function barupengalaman(){

}

public function barurujukan(){

}

public function barukokurikulum(){

}

public function baruspm(){

}

public function barudiploma(){
}

public function baruijazah(){

   return view('/isibaru/ijazah');

}

public function barusijil(){

}

public function barustam(){

}

public function barutahfiz(){

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

    return view('printresume', ['md' => $md, 'jwtan' => $jwtan, 'degree' => $degree, 'diploma' => $diploma, 'tahfiz' => $tahfiz, 'sijil' => $sijil, 'stam' => $stam, 'spm' => $spm, 'kokurikulums' => $kokurikulums, 'exp' => $exp, 'prefer' => $prefer, 'img' => $img]);
        
    // $pdf = PDF::loadView('printresume', compact('md', 'degree', 'diploma', 'tahfiz', 'sijil', 'stam', 'spm', 'kokurikulums', 'exp', 'prefer', 'img'));

    // return $pdf->download('Resume.pdf');
}

public function coverletter($id){
    $info = User::where('users.id', $id)
    ->join('maklumatdiris', 'maklumatdiris.id', '=', 'users.id')
    ->join('jawatans', 'jawatans.id', '=', 'users.id')
    ->get();

    $users = User::where('id', $id)->get();

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

    // $pdf = PDF::loadView('coverletter', ['info' => $info, 'ijazahs' => $ijazahs, 'diploma' => $diploma, 'tahfiz' => $tahfiz, 'sijil' => $sijil, 'users'=> $users])->setPaper('a4');
    //     // If you want to store the generated pdf to the server then you can use the store function
    // $pdf->save(storage_path().'_filename.pdf');
    //     // Finally, you can download the file using download function
    // return $pdf->render('CoverLetter.pdf');
}
}
