<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\maklumatdiri;
use App\kokurikulum;
use App\pengalaman;
use App\rujukan;

use App\ijazah;
use App\diploma;
use App\SPM;
use App\stam;
use App\tahfiz;
use App\sijil;
use App\jawatan;
use App\User;
use App\File;

use Hash;
use DB;
use Auth;
use Session;

use App\resume_pembatalan;
use App\resume_penempatan;
use App\resume_temuduga;
use App\resume_bayaran;
use App\resume_kemaskini;


class UpdateController extends Controller
{
    public function updatemd(Request $request, $id){
        $data = array(
            'nama' => $request->input('nama'),
            'ic' => $request->input('ic'),
            'alamat' => $request->input('address'),
            'poskod' => $request->input('poskod'),
            'daerah' => $request->input('daerah'),
            'negeri' => $request->input('negeri'),
            'kewarganegaraan' => $request->input('warganegara'),
            'nosuratberanak' => $request->input('nosuratberanak'),
            'jantina' => $request->input('jantina'),
            'tempatlahir' => $request->input('tempatlahir'),
            'status' => $request->input('status'),
            'email' => $request->input('email'),
            'nohp' => $request->input('hp')
        );
        maklumatdiri::where('id', $id)
        ->update($data);
        
        $data2 = array(
            'namapenuh' => $request->input('nama'),
            'ic' => $request->input('ic'),
            'email' => $request->input('email')
        );
        User::where('id', $id)
        ->update($data2);
        
        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );
        
        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function updatekokurikulum(Request $request, $id){
        $data = array(
            'sukan' => $request->input('sukan'),
            'peringkat' => $request->input('peringkat'),
            'sukan2' => $request->input('sukan2'),
            'peringkat2' => $request->input('peringkat2'),
            'sukan3' => $request->input('sukan3'),
            'peringkat3' => $request->input('peringkat3'),	
            'sukan4' => $request->input('sukan4'),
            'peringkat4' => $request->input('peringkat4'),  
            'sukan5' => $request->input('sukan5'),
            'peringkat5' => $request->input('peringkat5'),  
            
            'namakelab' => $request->input('persatuan'),
            'jawatan' => $request->input('jawatan'),
            'peringkatkelab' => $request->input('peringkatkelab'),
            'namakelab2' => $request->input('persatuan2'),
            'jawatan2' => $request->input('jawatan2'),
            'peringkatkelab2' => $request->input('peringkatkelab2'),
            'namakelab3' => $request->input('persatuan3'),
            'jawatan3' => $request->input('jawatan3'),
            'peringkatkelab3' => $request->input('peringkatkelab3')
        );
        kokurikulum::where('id', $id)
        ->update($data);
        
        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );

        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function updatepengalaman(Request $request, $id){
        $data = array(
            'namasyr' => $request->input('namasyarikat'),
            'alamatsyr' => $request->input('alamatsyarikat'),
            'notelsyr' => $request->input('notelsyarikat'),
            'jwtnsyr' => $request->input('jawatan'),
            'tempohkhidmat' => $request->input('tempohkhidmat')
        );
        pengalaman::where('id', $id)
        ->update($data);
        
        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );

        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function updaterujukan(Request $request, $id){
        $data = array(
            'namarujukan' => $request->input('namarujukan'),
            'notelrujukan' => $request->input('notelrujukan'),
            'jawatanrujukan' => $request->input('jawatan'),
            'namarujukan2' => $request->input('namarujukan2'),
            'notelrujukan2' => $request->input('notelrujukan2'),
            'jawatanrujukan2' => $request->input('jawatan2')
        );
        rujukan::where('id', $id)
        ->update($data);
        
        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );

        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function updateijazah(Request $request, $id){
        $data = array(
            'tahungrad' => $request->input('tahundeg'),
            'institusi' => $request->input('tempatbelajar'),
            'bidang' => $request->input('kursus'),
            'cgpa' => $request->input('cgpa'),
        );
        ijazah::where('id', $id)
        ->update($data);
        
        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );

        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function updatediploma(Request $request, $id){
        $data = array(
            'tahungrad' => $request->input('tahundip'),
            'institusi' => $request->input('tempatbelajar'),
            'bidang' => $request->input('kursus'),
            'cgpa' => $request->input('cgpa'),
        );
        diploma::where('id', $id)
        ->update($data);
        
        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );

        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function updatetahfiz(Request $request, $id){
        $data = array(
            
            'tahungradsijil' => $request->input('tahunsijil'),
            'institusisijil' => $request->input('tempatbelajarsijil'),
            'bidangsijil' => $request->input('kursussijil'),
            'cgpasijil' => $request->input('cgpasijil'),
            
            'tahungraddiploma' => $request->input('tahundip'),
            'institusidiploma' => $request->input('tempatbelajardip'),
            'bidangdiploma' => $request->input('kursusdip'),
            'cgpadiploma' => $request->input('cgpadip'),
            
            'tahungradijazah' => $request->input('tahuntahundegdip'),
            'institusiijazah' => $request->input('tempatbelajardeg'),
            'bidangijazah' => $request->input('kursusdeg'),
            'cgpaijazah' => $request->input('cgpadeg'),
        );
        tahfiz::where('id', $id)
        ->update($data);

        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );

        return redirect('/profile')->with('info', 'Maklumat telah dikemaskini.');
    }
    public function updatesijil(Request $request, $id){
        $data = array(
            'tahungrad' => $request->input('tahunsijil'),
            'institusi' => $request->input('tempatbelajar'),
            'bidang' => $request->input('kursus'),
            'cgpa' => $request->input('cgpa'),
        );
        sijil::where('id', $id)
        ->update($data);

        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );
        
        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function updatestam(Request $request, $id){
        $data = array(
            'mt' => $request->input('mt'),
            'grd' => $request->input('grad'),
            'mt2' => $request->input('mt2'),
            'grd2' => $request->input('grad2'),
            'mt3' => $request->input('mt3'),
            'grd3' => $request->input('grad3'),
            'mt4' => $request->input('mt4'),
            'grd4' => $request->input('grad4'),
            'mt5' => $request->input('mt5'),
            'grd5' => $request->input('grad5'),
            'mt6' => $request->input('mt6'),
            'grd6' => $request->input('grad6'),
            'mt7' => $request->input('mt7'),
            'grd7' => $request->input('grad7'),
            'mt8' => $request->input('mt8'),
            'grd8' => $request->input('grad8'),
            'mt9' => $request->input('mt9'),
            'grd9' => $request->input('grad9'),
            'mt10' => $request->input('mt10'),
            'grd10' => $request->input('grad10'),
            'mt11' => $request->input('mt11'),
            'grd11' => $request->input('grad11'),
            'mt12' => $request->input('mt12'),
            'grd12' => $request->input('grad12'),
            'mt13' => $request->input('mt13'),
            'grd13' => $request->input('grad13'),
            'mt14' => $request->input('mt14'),
            'grd14' => $request->input('grad14'),
            'mt15' => $request->input('mt15'),
            'grd15' => $request->input('grad15')
        );
        stam::where('id', $id)
        ->update($data);

        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );
        
        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function updatespm(Request $request, $id){
        $data = array(
            'mt' => $request->input('mt'),
            'grd' => $request->input('grad'),
            'mt2' => $request->input('mt2'),
            'grd2' => $request->input('grad2'),
            'mt3' => $request->input('mt3'),
            'grd3' => $request->input('grad3'),
            'mt4' => $request->input('mt4'),
            'grd4' => $request->input('grad4'),
            'mt5' => $request->input('mt5'),
            'grd5' => $request->input('grad5'),
            'mt6' => $request->input('mt6'),
            'grd6' => $request->input('grad6'),
            'mt7' => $request->input('mt7'),
            'grd7' => $request->input('grad7'),
            'mt8' => $request->input('mt8'),
            'grd8' => $request->input('grad8'),
            'mt9' => $request->input('mt9'),
            'grd9' => $request->input('grad9'),
            'mt10' => $request->input('mt10'),
            'grd10' => $request->input('grad10'),
            'mt11' => $request->input('mt11'),
            'grd11' => $request->input('grad11'),
            'mt12' => $request->input('mt12'),
            'grd12' => $request->input('grad12'),
            'mt13' => $request->input('mt13'),
            'grd13' => $request->input('grad13'),
            'mt14' => $request->input('mt14'),
            'grd14' => $request->input('grad14'),
            'mt15' => $request->input('mt15'),
            'grd15' => $request->input('grad15')
        );
        SPM::where('id', $id)
        ->update($data);
        
        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );

        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function updatejawatan(Request $request, $id){
        $data = array(
            'kuala_krai' => $request->input('kualakrai'),
            'jeli' => $request->input('jeli'),
            'gua_musang' => $request->input('gua_musang'),
            'tidak_sedia' => $request->input('tidak_sedia'),
        );
        jawatan::where('id', $id)
        ->update($data);
        
        DB::table('resume_kemaskini')
        ->where('user_id', $id)
        ->updateOrInsert(
            ['user_id' => $id],
            ['tarikh_kemaskini' => Carbon::now()]
        );
        
        Session::flash('message', 'Maklumat telah dikemaskini.');
        return redirect('/profile');
    }
    
    public function tukarkatalaluan(Request $request, $id)
    {
        $this->validate($request, [
            'currentpassword'   => 'required',
            'newpassword'           => 'required|min:8|same:newpassword',
            'confirmnewpassword'   => 'required|same:newpassword',
            ]
        );
        
        if (Hash::check($request->input('currentpassword'),Auth::user()->password)) 
        {
            
            $data = array(
                'password' => Hash::make($request->input('newpassword'))
            );
            User::where('id', $id)
            ->update($data);
            
            Session::flash('message', 'Kata Laluan Berjaya Ditukar.'); 
            
            return redirect('/profile');
        } else {
            Session::flash('message', 'Kata Laluan Tidak Dapat dikemaskini.'); 
            
            return view('tetapan');
        }
    }
    
    public function tukargambar(Request $request)
    {
        $this->validate($request, [
            // check validtion for image or file
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif|max:20000',  
            ]
        );
        
        $old = File::where('id', Auth::user()->id)->first();
        
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $extension = $image->getClientOriginalExtension();
            $filename = $image->getClientOriginalName();
            $filesize = $image->getClientSize();
            
            $namafail = $request->user()->id.'.'.$extension;
            
            if (File::where('id', Auth::user()->id)->first()) {
                
                Storage::delete('public/uploads/dp/'.$old->profile);
                $image->storeAs('public/uploads/dp', $namafail);
                
                $data = array(
                    'profile' => $namafail,
                    'size' => $filesize
                );
                File::where('id', $old->id)
                ->update($data);
                
            } else {
                
                $image->storeAs('public/uploads/dp',  $namafail);
                
                $file = new File;
                
                $file->id = Auth::id();
                $file->user_id = Auth::id();
                $file->profile = $request->user()->id.'.'.$extension;
                $file->size = $filesize;
                $file->save();
            }
            
            DB::table('resume_kemaskini')
            ->where('user_id', Auth::user()->id)
            ->updateOrInsert(
                ['user_id' => Auth::user()->id],
                ['tarikh_kemaskini' => Carbon::now()]
            );
            
            Session::flash('message', 'Gambar telah berjaya ditukar.');             
            return back();   
        } else {
            Session::flash('message', 'Gambar tidak berjaya ditukar.'); 
            return back();   
        }
    }
    
}
