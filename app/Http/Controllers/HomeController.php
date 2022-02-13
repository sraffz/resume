<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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

class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {   
        // $users = User::find(Auth::id());
            return redirect('/profile');
        

        // if (jawatan::where('id', Auth::id())->first()){
        //     if (maklumatdiri::where('id', Auth::id())->first()) {
        //         if (SPM::where('id', Auth::id())->first()) {
        //             return redirect('/profile');
        //         } else {
        //             return redirect('/spm');
        //         }
        //     } else {
        //         return redirect('/maklumatdiri');      
        //     }
        // } else {
        //     return view('home');
        // } 
        //  if (jawatan::where('id', '=', Auth::id())->first()){
        //     return redirect('/maklumatdiri');     
        // } else {
        //     return view('home');
        // } 
    }
    
    public function jawatan()
    {
        return view('jawatan');
    }
    
    
}
