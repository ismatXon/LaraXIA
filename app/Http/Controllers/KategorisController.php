<?php

namespace App\Http\Controllers;

use App\Models\kategoris;
use Illuminate\Http\Request;

class KategorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris=kategoris::all();
        return view('kategori.listkategori',['kategori'=>$kategoris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.addkategori');
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
     * @param  \App\Models\kategoris  $kategoris
     * @return \Illuminate\Http\Response
     */
    public function show(kategoris $kategoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategoris  $kategoris
     * @return \Illuminate\Http\Response
     */
    public function edit(kategoris $kategoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategoris  $kategoris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategoris $kategoris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategoris  $kategoris
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategoris $kategoris)
    {
        //
    }
}
