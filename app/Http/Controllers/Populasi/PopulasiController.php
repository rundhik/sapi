<?php

namespace Populasi\Http\Controllers\Populasi;

use Illuminate\Http\Request;
use Populasi\Http\Controllers\Controller;

class PopulasiController extends Controller
{
    public function anggota(Request $anggota)
    {
        return "Function populasi anggota()";
    }

    public function kelompok(Request $kelompok)
    {
        return "Function populasi kelompok()";
    }

    public function wilayah(Request $wilayah)
    {
        return "Function populasi wilayah()";
    }

    public function jeniskel(Request $jeniskel)
    {
        return "Function populasi jeniskel()";
    }

    public function tipe(Request $tipe)
    {
        return "Function populasi tipe()";
    }

    public function fase(Request $fase)
    {
        return "Function populasi fase()";
    }
}
