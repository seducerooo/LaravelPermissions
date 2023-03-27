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
                            <form class="user" method="POST" action="{{ route('admin.post.store') }}">
{{--                                @csrf--}}
                                <div class="form-group ">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="id" class="form-label">Enter Your Title</label>
                                        <input name="title" type="text" class="form-control form-control-user" id="id" placeholder="Your Post title">
                                    </div>
                                    </br></br>
                                    <div class="col-sm-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Enter Your Content</label>
                                        <textarea name="content" class="form-control form-control-user" id="exampleFormControlTextarea1" rows="3" placeholder="Your Content ... !"></textarea>
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
