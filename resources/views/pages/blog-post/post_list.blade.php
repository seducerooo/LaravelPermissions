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
                            <th>Title</th>
                            <th>content</th>
                            <th>Created_At</th>
                            <th>Updated_At</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Created_At</th>
                            <th>Updated_At</th>
                            <th>action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post['id'] }}</td>
                                <td>{{ $post['title'] }}</td>
                                <td>{{ $post['content'] }}</td>
                                <td>{{ $post['created_at'] }}</td>
                                <td>{{ $post['updated_at'] }}</td>
                                <th>
                                    <a href="{{ route('admin.post.edit',['post' => $post->id ])  }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.post.destroy',['post' => $post->id ])  }}" class="btn btn-danger">Delete</a>
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
