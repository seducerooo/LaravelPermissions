@extends('layouts.admin-panel')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Dashboard Page</h1>
    <h2>@if(Session()->has('successful'))
            <p class="alert alert-info">{{ session()->get('message') }}</p>
        @endif</h2>
@endsection
