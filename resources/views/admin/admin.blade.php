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
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @php($sn =1)
                            @foreach(\App\User::where('role',1)->orderBy('id')->get() as $value)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{ $value->email_address }}</td>
                                    <td>{{ ucwords($value->full_name) }}</td>
                                    <td>{{ $value->phone_number }}</td>
                                    <td>{{ ucwords($value->gender) }}</td>
                                    <td><a href="{{url('admin/edit-admin/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection