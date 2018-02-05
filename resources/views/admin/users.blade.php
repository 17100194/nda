@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="header">
            <h2><strong>Users</strong></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 portlets">
                <div class="panel">
                    <div class="panel-content pagination2 table-responsive">
                        <table class="table table-hover table-dynamic">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Admin</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><?php if ($user->isadmin):?><i class="fa fa-check fa-lg"></i><?php else:?><i class="fa fa-remove fa-lg"></i><?php endif?></td>
                                    <td>{{$user->created_at}}</td>
                                    <td>View / Edit</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection