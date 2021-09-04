@extends('admin.layout')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Statistics</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                Total Admin
                            </div>
                            <div class="panel-body">

                                <h2 align="center">
                                    {{ \App\User::where('role','1')->count() }}
                                </h2>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                Total Staff Recruitment
                            </div>
                            <div class="panel-body">
                                <h2 align="center">
                                    {{ \App\User::where('role','>',1)->where('status',1)->count() }}
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Total Recruitment Job
                            </div>
                            <div class="panel-body">
                                <h2 align="center">
                                    {{ \App\Job::count() }}
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Total Recruitment Applications
                            </div>
                            <div class="panel-body">
                                <h2 align="center">
                                    {{ \App\User::where('role','>',1)->where('status',0)->count() }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection