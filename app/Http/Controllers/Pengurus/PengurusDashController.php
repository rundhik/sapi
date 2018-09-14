<?php

namespace Populasi\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use Populasi\Http\Controllers\Controller;

class PengurusDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengurus.home_pengurus');
    }

}
