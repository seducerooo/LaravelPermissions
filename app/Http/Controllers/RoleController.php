<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\User;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles =  Role::query()->get()->all();
        return view('pages.admin-panel.role_list',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin-panel.create_role');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        //
        $recorde = Role::query()->create([
            'name' => $request['name'],
            'slug' => $request['slug']
        ]);
        $recorde->save();
        return to_route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $role = Role::query()->where('id',$id)->get()->first();
        return view('pages.admin-panel.update_role',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request,$id)
    {
        //
        $rupdate =  Role::query()->findOrFail($id);
        $rupdate->name = $request['name'];
        $rupdate->slug = $request['slug'];
        $rupdate->save();
        return to_route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $role = Role::findOrFail($id);
        $role->delete();
        return to_route('admin.dashboard');
    }
    public function modify($id){
        $permissions =  Permission::query()->get()->all();
        $role = Role::query()->where('id',$id)->get()->first();
        return view('pages.admin-panel.promote_role_permission',['role' => $role ,'permissions' => $permissions]);
    }
    public function attach($id){
        $role = Role::query()->where('id',$id);
    }
}
