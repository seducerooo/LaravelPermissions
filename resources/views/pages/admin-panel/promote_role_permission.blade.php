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
                                <h1 class="h4 text-gray-900 mb-4">Attach an Permission!</h1>
                            </div>

                            <form class="user" method="post" action="{{ route('admin.role.attach',$role->id) }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <select name="id" class="form-select" aria-label="Default select example">
                                            <option selected>Choose Permission Name Please </option>
                                            @foreach($permissions as $permission)
                                                <option value=" {{ $permission->id }} "> {{ $permission->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>

                                <input type="submit" class="btn btn-primary btn-user btn-block"  placeholder="Your Slug" value="attach">


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
