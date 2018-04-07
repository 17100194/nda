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
                                    <td><?php if($submission->payment_status == 'Submitted'):?><span class="text-info">Payment Proof Submitted <i class="icon-info"></i></span><?php elseif ($submission->payment_status == 'Paid'):?><span class="text-success">{{$submission->payment_status}} <i class="icon-check"></i></span><?php else:?><span class="text-danger">{{$submission->payment_status}} <i class="icon-close"></i></span><?php endif?></td>
                                    <td>{{$submission->payment_method}}</td>
                                    <td>{{$submission->created_at}}</td>
                                    <td>
                                        <a href="{{url('nda-admin/submissions/view/'.$submission->id)}}" class="btn btn-blue btn-block btn-sm m-0 m-b-5">View</a>
                                        <?php if($submission->status == 'Evaluation In Process' && $submission->payment_status == 'Paid'):?>
                                        {{--<button class="shortlist btn btn-success btn-block btn-sm m-0">Shortlist</button>--}}
                                        <?php endif?>
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