<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicCOntroller extends Controller
{
    public function permohonanGuru(){
               
        return view('permohonan-guru');
    }
}
