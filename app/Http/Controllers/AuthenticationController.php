<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoggedRequest;
use App\Models\Authentication;
use App\Http\Requests\StoreAuthenticationRequest;
use App\Http\Requests\UpdateAuthenticationRequest;
use Illuminate\Support\Facades\Hash;

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
     * @param  \App\Http\Requests\StoreAuthenticationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthenticationRequest $request)
    {
        //
        $user = new Authentication();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $result =$user->save();
        if ($result){
            return to_route('home')->with('success','You Have Registered Successfully');
        }
        else{
            return to_route('home')->with('fail',"You Haven't Registered Successfully");
        }
    }

    public function logged(LoggedRequest $request){
        $user = Authentication::query()->where('email',$request->email)->firstOrFail();

//        dd(Hash::($user->password));

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Authentication  $authentication
     * @return \Illuminate\Http\Response
     */
    public function show(Authentication $authentication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Authentication  $authentication
     * @return \Illuminate\Http\Response
     */
    public function edit(Authentication $authentication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthenticationRequest  $request
     * @param  \App\Models\Authentication  $authentication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthenticationRequest $request, Authentication $authentication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Authentication  $authentication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authentication $authentication)
    {
        //
    }
}
