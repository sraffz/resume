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

use App\resume_penempatan;
use App\resume_temuduga;
use App\resume_bayaran;
use App\resume_perananAdmin;

use App\File;
use App\Major;
use App\RakGuru;
use DB;
use Hash;

use Session;

class AdminPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function updateTemuduga(Request $request, $id) 
    {
    	$data = array(
    		'tarikh' => $request->input('tarikh'),
    		'markah' => $request->input('markah'),
    		'nota' => $request->input('nota')
    	);
    	resume_temuduga::where('id', $id)
    	->update($data);

        Session::flash('message', 'Maklumat telah dikemaskini.');
    	return back();
    }

    public function insertTemuduga(Request $req)
    {
        $resume_temuduga = new resume_temuduga;
        $resume_temuduga->id = $req->input('id');
        $resume_temuduga->user_id = $req->input('id');
        $resume_temuduga->tarikh =  $req->input('tarikh');
        $resume_temuduga->markah =  $req->input('markah');
        $resume_temuduga->nota =  $req->input('nota');
        $resume_temuduga->save();

        Session::flash('message', 'Maklumat telah dimasukan.');
    	return back();
    }

    public function updatePenempatanGuru(Request $request, $id) 
    {
    	$data = array(
    		'tarikh_lantikan' => $request->input('tarikh_lantikan'),
    		'tempat_lantikan' => $request->input('tempat_lantikan')
    	);
    	resume_penempatan::where('id', $id)
    	->update($data);

    	return redirect('/admin/butiran-pemohon/'.$id);
    }

    public function updateWangpos(Request $request, $id) 
    {
        $data = array(
            'bayaran' => $request->input('bayaran'),
            'jenisbayaran' => $request->input('jenisbayaran'),
            'no_slip_rujukan' => $request->input('no_slip')
        );
        resume_bayaran::where('user_id', $id)
        ->update($data);

        $bilrak = DB::table('rak_gurus')->where('rak', $request->input('rakmajor'))->count();

        if (RakGuru::where('user_id', $id)->first()) {
           
           $data2 = array(
            'rak' => $request->input('rakmajor'),
            'norujukan' => date("Y").'/'.($request->input('rakmajor')+$bilrak)
            );
            RakGuru::where('user_id', $id)
            ->update($data2);

        } else {
            $rak = new RakGuru;
            $rak->user_id = $id;
            $rak->rak = $request->input('rakmajor');
            $rak->norujukan = date("Y").'/'.($request->input('rakmajor')+$bilrak);
            $rak->save();
        }

        return redirect('/admin/butiran-pemohon/'.$id);
    }

    public function tambahmajor(Request $request) 
    {
        $major = new Major;
        $major->major_guru = $request->input('major');
        $major->kod_major = $request->input('kod_major');
        $major->save();

        return redirect('/admin/senarai-major');
    }
    public function tambahadmin(Request $req)
    {
        

        $admin = new Admin;
        $admin->name = $req->input('name');
        $admin->email = $req->input('email');
        $admin->jobtitle = $req->input('jobtitle');
        $admin->peranan = $req->input('peranan');
        $admin->password = Hash::Make($req->input('password'));
        $admin->save();

        return redirect('/admin/senarai-admin');
    }

    public function kemaskinimarkahguru(Request $req)
    {
        // return Validator::make($data, [
        //     'name' => 'required|string|max:255',
        //     'namapenuh' => 'required|string|max:255',
        //     'colorkp' => 'required|string|max:255',
        //     'nokp' => 'required|digits:12|numeric|unique:users,ic',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6|confirmed',
        // ]);

        // $this->validate($req, [
        //     // check validtion for image or file
        //         'markah_bm' => 'numeric',  
        //         'markah_bi' => 'numeric',  
        //         'markah_arab' => 'numeric',  
        //         'markah_objektif' => 'numeric',  
        //       ]);

        $id = $req->input('id');
        if (count($id)>0) {
            foreach ($id as $item => $v){
                $data = array(
                    'markah_bm' => $req->markah_bm[$item],
                    'markah_bi' => $req->markah_bi[$item],
                    'markah_arab' => $req->markah_arab[$item],
                    'markah_objektif' => $req->markah_objektif[$item]
                );
                User::where('id', $req->id[$item])
                ->update($data);
            }
        }
        return back();
    }
}