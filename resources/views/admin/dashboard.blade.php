@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    Admin You are logged in!
                </div>
                <div>
                	<a href="{{ url('admin/logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
