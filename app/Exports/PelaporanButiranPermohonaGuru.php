<?php

namespace App\Exports;

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

use DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PelaporanButiranPermohonaGuru implements FromQuery, WithHeadings
{
    // protected $jawatan;
    // protected $maklumatdiri;
    // protected $gred;
    // protected $bidang;

    use Exportable;

    public function __construct($jawatan, $maklumatdiri)
    {
        $this->jawatan = $jawatan;
        $this->maklumatdiri = $maklumatdiri;
        // $this->gred = $gred;
        // $this->bidang = $bidang;
    }

    public function query()
    {
        $jawatan = $this->jawatan;

        return maklumatdiri::query()
        ->select('maklumatdiris.nama','maklumatdiris.daerah','maklumatdiris.ic','maklumatdiris.nohp','s_p_ms.grd','ijazahs.bidang','jawatans.jawatandipohon' ,'jawatans.jawatandipohon2')
        // ->selet('jawatans.jawatandipohon, jawatans.jawatandipohon2, maklumatdiris.daerah, maklumatdiris.nama, maklumatdiris.ic, maklumatdiris.email,  maklumatdiris.nohp, maklumatdiris.jantina, maklumatdiris.status, maklumatdiris.alamat, maklumatdiris.poskod, maklumatdiris.daerah, maklumatdiris.negeri, ijazahs.bidang As Ijazah, ijazahs.institusi AS Ijazah_universiti, ijazahs.cgpa AS Ijazah_cgpa, ijazahs.tahungrad AS Tarikh_konvo_Ijazah, diplomas.bidang As Diploma, diplomas.institusi AS Diploma_universiti, diplomas.cgpa AS Diploma_cgpa, diplomas.tahungrad AS Tarikh_konvo_Diploma, sijils.bidang As Sijil, sijils.institusi AS Sijil_universiti, sijils.cgpa AS Sijil_cgpa, s_p_ms.grd AS SPM_BM, jawatans.gua_musang, jawatans.jeli, jawatans.kuala_krai, jawatans.tidak_sedia, pengalamen.jwtnsyr As Pengalaman, pengalamen.namasyr, pengalamen.alamatsyr, pengalamen.tempohkhidmat, rujukans.* , stams.* , s_p_ms.* , kokurikulums.* , tahfizs.*, maklumatdiris.nosuratberanak, maklumatdiris.tempatlahir, maklumatdiris.sekolah, maklumatdiris.jenissekolah, users.colorkp')
        // ->join('users', 'users.id', '=', 'maklumatdiris.id')
        ->join('jawatans', 'jawatans.id', '=', 'maklumatdiris.id')
        ->leftjoin('ijazahs', 'ijazahs.id', '=', 'maklumatdiris.id')
        ->leftjoin('s_p_ms', 's_p_ms.id', '=', 'maklumatdiris.id')
        ->leftjoin('diplomas', 'diplomas.id', '=', 'maklumatdiris.id')
        ->join('sijils', 'sijils.id', '=', 'maklumatdiris.id')
        ->Where('maklumatdiris.daerah', $this->maklumatdiri)
        ->where(function($query) use ( $jawatan ){
            return $query
            ->where('jawatans.jawatandipohon', 'LIKE' , '%'.$jawatan.'%')
            ->orWhere('jawatans.jawatandipohon2', 'LIKE' , '%'.$jawatan.'%');
        });

        // ->Where('s_p_ms.grd', $this->gred)
        // ->Where('ijazahs.bidang',  $this->bidang);
    } 
    

    public function headings(): array
    {
        return [
            'NAMA',
            'DAERAH',
            'NO.K/P',
            'NO.TEL',
            'SPM (BM)',
            'KELULUSAN',
            'JAWATAN DIMINTA',
            'JAWATAN DIMINTA 2'
        ];
    }
}