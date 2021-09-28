<?php

namespace App\Http\Controllers;

use App\Models\info_romo;
use App\Models\romo_pastoral;
use Illuminate\Http\Request;

class InfoRomoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jadwalromo()
    {
        $inforomos = romo_pastoral::all();
        // return view('jadwalromo', compact('inforomos'));
        return $inforomos;
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
     * @param  \App\Models\info_romo  $info_romo
     * @return \Illuminate\Http\Response
     */
    public function show(info_romo $info_romo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\info_romo  $info_romo
     * @return \Illuminate\Http\Response
     */
    public function edit(info_romo $info_romo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\info_romo  $info_romo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, info_romo $info_romo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\info_romo  $info_romo
     * @return \Illuminate\Http\Response
     */
    public function destroy(info_romo $info_romo)
    {
        //
    }
}
