@extends('admin.layout')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$page_title}}</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <td>SN</td>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Seek Position</th>
                            <th>Marital Status</th>
                            <th>Date Of Birth</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td>SN</td>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Seek Position</th>
                            <th>Marital Status</th>
                            <th>Date Of Birth</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\User::where('role',2)->whereStatus(0)->orderBy('id','desc')->get() as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{$value->email_address}}</td>
                                <td>{{ ucwords($value->full_name) }}</td>
                                <td>{{$value->phone_number}}</td>
                                <td>{{ ucwords($value->gender) }}</td>
                                <td>{{ $value->job->position }}</td>
                                <td>{{ ucwords($value->marital_status) }}</td>
                                <td>{{ $value->date_of_birth }}</td>
                                <td>{{ ($value->status == 0) ? 'New Application' : 'Staff' }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td><a href="{{url('admin/view-application/'.$value->id)}}" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection