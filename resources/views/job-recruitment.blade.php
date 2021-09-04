@extends('layout')

@section('content')

    <div style="padding: 20px;">
        <div class="container">
            <div class="row">

                <div class="col-sm-8 col-sm-offset-2">

                    <div class="row">
                        @foreach(\App\Job::orderBy('id','desc')->get() as $value)

                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5>{{$value->job_title}}</h5>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="{{url('assets/images/logo2.png')}}" alt="">
                                            </div>
                                            <div class="col-sm-8">
                                                <p>Required No Of Employee's : {{ $value->employee }}</p>
                                                <p>Qualification/Work Experience  : {{$value->experience}}</p>
                                                <p>Position : {{ $value->position }}</p>
                                                <p>Job Description : {!! strip_tags($value->description) !!}</p>

                                                <a href="{{url('recruitment/'.$value->id)}}" class="btn btn-primary btn-block">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection