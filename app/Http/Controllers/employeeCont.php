<?php

namespace App\Http\Controllers;

use App\Models\employees1;
use Illuminate\Http\Request;

class employeeCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "movies";
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
     * @param  \App\Models\employees1  $employees1
     * @return \Illuminate\Http\Response
     */
    public function show(employees1 $employees1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employees1  $employees1
     * @return \Illuminate\Http\Response
     */
    public function edit(employees1 $employees1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employees1  $employees1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employees1 $employees1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employees1  $employees1
     * @return \Illuminate\Http\Response
     */
    public function destroy(employees1 $employees1)
    {
        //
    }
}
