<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Session;
use Symfony\Component\Console\Input\Input;


class PostController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
        return view('pages.admin-panel.create_post');
    }


    public function store(StorePostRequest $request)
    {
        //
  // dd($data = session()->all());
 $user_id = session()->get('loginId');
        Post::query()->create([

            'user_id' =>  $user_id,
            'title'=> $request['title'],
            'content' => $request['content']
        ]);
  //      return to_route('home');
    }


    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post)
    {
        //
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
