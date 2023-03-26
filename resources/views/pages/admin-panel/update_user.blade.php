@extends('layouts.admin-panel')
@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update an Account!</h1>
                            </div>

                            <form class="user" method="POST" action="{{ route('auth.user.update',$user->id) }}">
                                @csrf

                                @method('patch')
                                <div class="form-group row">

                                    <div class="col-sm-6">
                                        <label class="form-label" id="role_id">Role :</label>
                                        <select id="role_id" name="role_id" class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-label" id="name"> Name :</label>
                                        <input id="name" name="name" type="text" class="form-control form-control-user"  placeholder="Your Permission Name" value="{{ $user['name'] }}">
                                    </div>
                                    <br>
                                    <div class="col-sm-6">
                                        <label class="form-label" id="email">Email :</label>
                                        <input id="email" name="email" type="text" class="form-control form-control-user"  placeholder="Your Slug" value="{{ $user['email']}}">
                                    </div>
                                    <br>
                                    <div class="col-sm-6">
                                        <label class="form-label" id="password" >password</label>
                                        <input id="password" name="password" type="text" class="form-control form-control-user"  placeholder="Your Password" value="">
                                    </div>
                                </div>



                                <input type="submit" class="btn btn-primary btn-user btn-block"  placeholder="Your Slug" value="update">

                            </form>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
