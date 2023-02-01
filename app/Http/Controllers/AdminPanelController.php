<?php

namespace App\Http\Controllers;

use App\Models\AdminPanel;
use App\Http\Requests\StoreAdminPanelRequest;
use App\Http\Requests\UpdateAdminPanelRequest;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.admin-panel.index');
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
     * @param  \App\Http\Requests\StoreAdminPanelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminPanelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminPanel  $adminPanel
     * @return \Illuminate\Http\Response
     */
    public function show(AdminPanel $adminPanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminPanel  $adminPanel
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminPanel $adminPanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminPanelRequest  $request
     * @param  \App\Models\AdminPanel  $adminPanel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminPanelRequest $request, AdminPanel $adminPanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminPanel  $adminPanel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminPanel $adminPanel)
    {
        //
    }
}
