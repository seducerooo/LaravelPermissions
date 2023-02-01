<?php

namespace App\Http\Controllers;

use App\Models\HomePost;
use App\Http\Requests\StoreHomePostRequest;
use App\Http\Requests\UpdateHomePostRequest;

class HomePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.blog-post.index');
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
     * @param  \App\Http\Requests\StoreHomePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function show(HomePost $homePost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePost $homePost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomePostRequest  $request
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomePostRequest $request, HomePost $homePost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePost $homePost)
    {
        //
    }
}
