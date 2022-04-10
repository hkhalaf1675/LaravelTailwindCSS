<?php

namespace App\Http\Controllers;

use App\Models\subjects;
use App\Http\Requests\StoresubjectsRequest;
use App\Http\Requests\UpdatesubjectsRequest;

class SubjectsController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresubjectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubjectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function show(subjects $subjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function edit(subjects $subjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubjectsRequest  $request
     * @param  \App\Models\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubjectsRequest $request, subjects $subjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(subjects $subjects)
    {
        //
    }
}
