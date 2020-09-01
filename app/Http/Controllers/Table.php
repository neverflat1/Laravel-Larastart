<?php

namespace App\Http\Controllers;

use App\TableController;
use Illuminate\Http\Request;

class Table extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('table');
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
     * @param  \App\TableController  $tableController
     * @return \Illuminate\Http\Response
     */
    public function show(TableController $tableController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TableController  $tableController
     * @return \Illuminate\Http\Response
     */
    public function edit(TableController $tableController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TableController  $tableController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableController $tableController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TableController  $tableController
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableController $tableController)
    {
        //
    }
}
