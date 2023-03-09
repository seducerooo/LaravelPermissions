<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role = Role::query()->get()->all();
        $users =  User::query()->get()->all();
        return view('pages.admin-panel.user_list',compact('users','role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin-panel.create_user');
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

        $result = User::query()->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);
        $result->save();
        return to_route('admin.dashboard');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $roles =  Role::query()->get()->all();
        $user =  User::query()->where('id',$id)->get()->first();
        return view('pages.admin-panel.update_user',['user' => $user,'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request,$id)
    {
        //
        $user = User::query()->findOrFail($id);
        $user->role_id = $request['role_id'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        return to_route('admin.dashboard');
     }
     public function uprole(UpdateRoleRequest $request,$id){

         $user = User::query()->findOrFail($id);
         User::query()->findOrFail($id);
         $user->update([
             'role_id'=> $request['role_id'],
             ]);

//         this gives a new user the the role_id 2 in table role_user.
        return to_route('admin.dashboard');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::query()->findOrFail($id);
        $user->delete();
        $user->save();
        return to_route('admin.dashboard');
    }

    public function modify($id){
        $user = User::query()->where('id',$id)->get()->first();
        $roles = Role::query()->get()->all();
        return view('pages.admin-panel.promote_user',['user' =>  $user,'roles' =>$roles]);
    }
    public function attach($id){
        $user = User::find($id);
        $user->roles()->attach($id);
        return to_route('admin.dashboard');
    }
    public function detach($id){
        $user = User::query()->findOrFail($id);
        $role_id = Role::query()->where('id',$id);
        $user->roles()->detach($role_id);
        return to_route('admin.dashboard');
    }
}
