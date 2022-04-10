<?php

namespace App\Http\Controllers;

use App\Models\lessons;
use App\Http\Requests\StorelessonsRequest;
use App\Http\Requests\UpdatelessonsRequest;

class LessonsController extends Controller
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
     * @param  \App\Http\Requests\StorelessonsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelessonsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function show(lessons $lessons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function edit(lessons $lessons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelessonsRequest  $request
     * @param  \App\Models\lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelessonsRequest $request, lessons $lessons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function destroy(lessons $lessons)
    {
        //
    }
}
