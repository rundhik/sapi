<?php

namespace Populasi\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Populasi\Http\Controllers\Controller;

class AdminDashController extends Controller
{
    
    public function index()
    {
        return view('admin.home_admin');
    }
    
}
