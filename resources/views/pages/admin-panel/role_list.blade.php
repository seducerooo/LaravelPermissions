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
                    <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                            <th>action</th>
                            <th>permissions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>action</th>
                            <th>action</th>
                            <th>permissions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role['id'] }}</td>
                                <td>{{ $role['name'] }}</td>
                                <td>{{ $role['slug'] }}</td>
                                <td>
                                    <a href="{{ route('admin.role.modify',['id' => $role->id]) }}" class="btn btn-primary">Attach</a>
                                    <a href="{{ route('admin.role.modify',['id' => $role->id]) }}" class="btn btn-danger">Detach</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.role.edit',['role' => $role->id ])  }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.role.destroy',['role' => $role->id ])  }}" class="btn btn-danger">Delete</a>
                                </td>
                                @foreach($role->permissions as $role_permissions)
                                <td>{{ $role_permissions['name'] }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
