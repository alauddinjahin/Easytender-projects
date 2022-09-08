<?php

namespace App\Http\Controllers;

use App\Models\TenderMethod;
use Illuminate\Http\Request;

class TenderMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_methods = TenderMethod::all();
        return view('backend.pages.tender-method.index', compact('all_methods'));
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
     * @param  \App\Models\TenderMethod  $tenderMethod
     * @return \Illuminate\Http\Response
     */
    public function show(TenderMethod $tenderMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TenderMethod  $tenderMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(TenderMethod $tenderMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TenderMethod  $tenderMethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenderMethod $tenderMethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TenderMethod  $tenderMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenderMethod $tenderMethod)
    {
        //
    }
}
