<?php

namespace Populasi\Http\Controllers\Koordinator;

use Illuminate\Http\Request;
use Populasi\Http\Controllers\Controller;

class KoordinatorDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('koordinator.home_koordinator');
        return redirect()->route('koordinator-populasi.anggota', ['fuck' => 1]);
    }

}
