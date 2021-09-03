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
                            <th>Job Title</th>
                            <th>Qualification/Work Experience </th>
                            <th> Employee Number </th>
                            <th>Job Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Job Title</th>
                            <th>Qualification/Work Experience </th>
                            <th> Employee Number </th>
                            <th>Job Description</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\Job::orderBy('id','desc')->get() as $value)
                            <tr>
                                <td>{{$sn}}</td>
                                <td>{{ $value->job_title }}</td>
                                <td>{{ $value->experience }}</td>
                                <td>{{ $value->employee }}</td>
                                <td>{!!  $value->description !!}</td>
                                <td><a href="{{url('admin/edit-job-recruitment/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


@endsection