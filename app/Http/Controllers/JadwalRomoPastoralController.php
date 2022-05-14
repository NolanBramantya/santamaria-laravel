<?php

namespace App\Http\Controllers;

use App\Models\jadwal_romo_pastoral;
use Illuminate\Http\Request;

class JadwalRomoPastoralController extends Controller
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
    public function findjadwal($romo_id)
    {
        $jadwal_romo = jadwal_romo_pastoral::where('id', $romo_id)->all();
        return $jadwal_romo;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $romo_id = $request['romo_id'];
        $jadwal_mulai = $request['jadwal_mulai'];
        $jadwal_selesai = $request['jadwal_selesai'];
        $keterangan = $request['keterangan'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal_romo_pastoral  $jadwal_romo_pastoral
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal_romo_pastoral $jadwal_romo_pastoral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal_romo_pastoral  $jadwal_romo_pastoral
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwal_romo_pastoral $jadwal_romo_pastoral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal_romo_pastoral  $jadwal_romo_pastoral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal_romo_pastoral $jadwal_romo_pastoral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal_romo_pastoral  $jadwal_romo_pastoral
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal_romo_pastoral $jadwal_romo_pastoral)
    {
        //
    }
}
