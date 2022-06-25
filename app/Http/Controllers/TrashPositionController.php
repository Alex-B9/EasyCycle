<?php

namespace App\Http\Controllers;

use App\Models\TrashPosition;
use Illuminate\Http\Request;

class TrashPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view(['trashPosition' => TrashPosition::latest()->get()]);
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
     * @param  \App\Models\TrashPosition  $trashPosition
     * @return \Illuminate\Http\Response
     */
    public function show(TrashPosition $trashPosition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrashPosition  $trashPosition
     * @return \Illuminate\Http\Response
     */
    public function edit(TrashPosition $trashPosition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrashPosition  $trashPosition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrashPosition $trashPosition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrashPosition  $trashPosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrashPosition $trashPosition)
    {
        //
    }
}
