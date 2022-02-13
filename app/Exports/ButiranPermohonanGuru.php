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
// use Maatwebsite\Excel\Concerns\WithHeadings;

class ButiranPermohonanGuru implements FromQuery
{
    use Exportable;

    public function __construct(string $jawatan)
    {
        $this->jawatan = $jawatan;
    }

    public function query()
    {
        return maklumatdiri::query()
        ->select('maklumatdiris.daerah','maklumatdiris.nama')
        // ->select('jawatans.jawatandipohon, jawatans.jawatandipohon2, maklumatdiris.daerah, maklumatdiris.nama, maklumatdiris.ic, maklumatdiris.email,  maklumatdiris.nohp, maklumatdiris.jantina, maklumatdiris.status, maklumatdiris.alamat, maklumatdiris.poskod, maklumatdiris.daerah, maklumatdiris.negeri, ijazahs.bidang As Ijazah, ijazahs.institusi AS Ijazah_universiti, ijazahs.cgpa AS Ijazah_cgpa, ijazahs.tahungrad AS Tarikh_konvo_Ijazah, diplomas.bidang As Diploma, diplomas.institusi AS Diploma_universiti, diplomas.cgpa AS Diploma_cgpa, diplomas.tahungrad AS Tarikh_konvo_Diploma, sijils.bidang As Sijil, sijils.institusi AS Sijil_universiti, sijils.cgpa AS Sijil_cgpa, s_p_ms.grd AS SPM_BM, jawatans.gua_musang, jawatans.jeli, jawatans.kuala_krai, jawatans.tidak_sedia, pengalamen.jwtnsyr As Pengalaman, pengalamen.namasyr, pengalamen.alamatsyr, pengalamen.tempohkhidmat, rujukans.* , stams.* , s_p_ms.* , kokurikulums.* , tahfizs.*, maklumatdiris.nosuratberanak, maklumatdiris.tempatlahir, maklumatdiris.sekolah, maklumatdiris.jenissekolah, users.colorkp')
        ->join('jawatans', 'jawatans.id', '=', 'maklumatdiris.id')
        ->leftjoin('ijazahs', 'ijazahs.id', '=', 'maklumatdiris.id')
        ->join('s_p_ms', 's_p_ms.id', '=', 'maklumatdiris.id')
        ->leftjoin('diplomas', 'diplomas.id', '=', 'maklumatdiris.id')
        ->leftjoin('sijils', 'sijils.id', '=', 'maklumatdiris.id')
        ->leftjoin('pengalamen', 'pengalamen.id', '=', 'maklumatdiris.id')
        ->leftjoin('rujukans', 'rujukans.id', '=', 'maklumatdiris.id')
        ->leftjoin('stams', 'stams.id', '=', 'maklumatdiris.id')
        ->leftjoin('kokurikulums', 'kokurikulums.id', '=', 'maklumatdiris.id')
        ->leftjoin('tahfizs', 'tahfizs.id', '=', 'maklumatdiris.id')
        ->leftjoin('users', 'users.id', '=', 'maklumatdiris.id')
        ->where('jawatans.jawatandipohon', $this->jawatan)
        ->orwhere('jawatans.jawatandipohon2', $this->jawatan)
        ->orderBy('maklumatdiris.daerah');
    }
}

// SELECT jawatans.jawatandipohon, b.jawatandipohon2, maklumatdiris.daerah, a.nama, a.ic, a.email,  a.nohp, a.jantina, a.status, a.alamat, a.poskod, a.daerah, a.negeri, c.bidang As Ijazah, c.institusi AS Ijazah_universiti, c.cgpa AS Ijazah_cgpa, c.tahungrad AS Tarikh_konvo_Ijazah, e.bidang As Diploma, e.institusi AS Diploma_universiti, e.cgpa AS Diploma_cgpa, e.tahungrad AS Tarikh_konvo_Diploma,f.bidang As Sijil, f.institusi AS Sijil_universiti, f.cgpa AS Sijil_cgpa, d.grd AS SPM_BM, b.gua_musang, b.jeli, b.kuala_krai, b.tidak_sedia, g.jwtnsyr As Pengalaman, g.namasyr, g.alamatsyr, g.tempohkhidmat, h.* , i.* , d.* , j.* , k.*, a.nosuratberanak, a.tempatlahir, a.sekolah, a.jenissekolah, l.colorkp
// FROM maklumatdiris as a 
// INNER JOIN jawatans as b on a.id = b.id
// LEFT JOIN ijazahs as c ON a.id = c.id
// INNER JOIN s_p_ms as d ON a.id = d.id
// LEFT JOIN diplomas as e ON a.id = e.id
// LEFT JOIN sijils as f ON a.id = f.id
// LEFT JOIN pengalamen as g ON a.id = g.id
// LEFT JOIN rujukans as h ON a.id = h.id
// LEFT JOIN stams as i ON a.id = i.id
// LEFT JOIN kokurikulums as j ON a.id = j.id
// LEFT JOIN tahfizs as k ON a.id = k.id
// LEFT JOIN users as l ON a.id = l.id
// WHERE b.jenis = "Guru"