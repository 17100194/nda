@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="header">
            <h2><strong>Submissions</strong></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 portlets">
                <div class="panel">
                    <div class="panel-content pagination2 table-responsive">
                        <table class="table table-hover table-dynamic">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Categories</th>
                                <th>Submission Status</th>
                                <th>Payment Status</th>
                                <th>Payment Method</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($submissions as $submission)
                                <tr>
                                    <td>{{$submission->id}}</td>
                                    <td>{{$submission->type}}</td>
                                    <td>{{$submission->title}}</td>
                                    <td>{{$submission->author->name}}</td>
                                    <td>{{$submission->categories}}</td>
                                    <td>{{$submission->status}}</td>
                                    <td>{{$submission->payment_status}}</td>
                                    <td>{{$submission->payment_method}}</td>
                                    <td>{{$submission->created_at}}</td>
                                    <td>
                                        <a href="{{url('nda-admin/submissions/view/'.$submission->id)}}" class="btn btn-primary btn-xs m-0">View</a>
                                        <?php if($submission->status == 'Evaluation In Process' && $submission->payment_status == 'Paid'):?>
                                            {{--<a class="shortlist btn btn-success btn-xs m-0">Shortlist</a>--}}
                                        <?php endif?>
                                        {{--<a class="reject btn btn-danger btn-xs m-0">Reject</a>--}}
                                    </td>
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