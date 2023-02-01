<?php

namespace App\Http\Controllers;

use App\Models\HomePanel;
use App\Http\Requests\StoreHomePanelRequest;
use App\Http\Requests\UpdateHomePanelRequest;

class HomePanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.blog-home.index');
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
     * @param  \App\Http\Requests\StoreHomePanelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomePanelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomePanel  $homePanel
     * @return \Illuminate\Http\Response
     */
    public function show(HomePanel $homePanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePanel  $homePanel
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePanel $homePanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomePanelRequest  $request
     * @param  \App\Models\HomePanel  $homePanel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomePanelRequest $request, HomePanel $homePanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePanel  $homePanel
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePanel $homePanel)
    {
        //
    }
}
