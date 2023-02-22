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
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('admin.permission.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="name" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Your Permission Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="slug" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Your Slug">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="add">

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
