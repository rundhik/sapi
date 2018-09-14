<?php

namespace Populasi\Http\Controllers\Sapi;

use Illuminate\Http\Request;
use Populasi\Http\Controllers\Controller;

class SapiController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:sapi-list');
        $this->middleware('permission:sapi-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:sapi-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:sapi-delete', ['only' => ['destroy']]); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sapi.sapi_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sapi.sapi_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('sapi.sapi_list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('sapi.sapi_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        //
    }
}
