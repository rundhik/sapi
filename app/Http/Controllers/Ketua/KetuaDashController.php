<?php

namespace Populasi\Http\Controllers\Ketua;

use Illuminate\Http\Request;
use Populasi\Http\Controllers\Controller;

class KetuaDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('ketua.home_ketua');
        return redirect()->route('ketua-populasi.anggota');
    }

}
