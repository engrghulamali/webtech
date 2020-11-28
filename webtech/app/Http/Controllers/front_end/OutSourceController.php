<?php

namespace App\Http\Controllers\Front_end;
use App\Http\Controllers\Controller;

use App\OutSource;
use Illuminate\Http\Request;

class OutSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.it-out-sourcing');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\OutSource  $outSource
     * @return \Illuminate\Http\Response
     */
    public function show(OutSource $outSource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OutSource  $outSource
     * @return \Illuminate\Http\Response
     */
    public function edit(OutSource $outSource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OutSource  $outSource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutSource $outSource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OutSource  $outSource
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutSource $outSource)
    {
        //
    }
}
