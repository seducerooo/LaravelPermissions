<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoggedRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //
        return view('pages.authentication.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //
        return view('pages.authentication.login');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
         $user = User::query()->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        if ($user){
            return to_route('home')->with('success','You Have Registered Successfully');
        }
        else{
            return to_route('home')->with('fail',"You Haven't Registered Successfully");
        }
    }

    public function logged(LoggedRequest $request){
        $user = User::query()->where('email',$request->email)->firstOrFail();

//        dd(Hash::($user->password));
//var_dump($user);
        if ($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return to_route('admin.dashboard')->with('successful','You Have logged successfully');
            }else{
                return to_route('home')->with('failed','password not matches');
            }
        }else{
            return to_route('home')->with('failed','email is not registered');
        }




    }

    public function logout(){
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect()->route('auth.login');
        }

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $authentication
     * @return \Illuminate\Http\Response
     */
    public function show(User $authentication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $authentication
     * @return \Illuminate\Http\Response
     */
    public function edit(User $authentication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $authentication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $authentication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $authentication
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $authentication)
    {
        //
    }
}
