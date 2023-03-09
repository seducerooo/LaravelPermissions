@extends('layouts.admin-panel')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password
                            <th>role</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>role</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user['id'] }}</td>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{\Illuminate\Support\Str::limit( $user['password'],20 ) }}</td>

                            <td>{{ $user->role->name }}</td>

                            <th>
                                <a href="{{ route('auth.user.edit',['id' => $user->id ])  }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('auth.user.destroy',['id' => $user->id ])  }}" class="btn btn-danger">Delete</a>
                            </th>
                            <th>
                                <a href="{{ route('auth.user.modify',['id' => $user->id]) }}" class="btn btn-primary">Attach</a>
                                <a href="{{ route('auth.user.detach',['id' => $user->id]) }}" class="btn btn-danger">Detach</a>
                            </th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
