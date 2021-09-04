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

                <form action="{{url('admin/create_job')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Job Title</label>
                        <input type="text" placeholder="Job Title" class="form-control" required name="job_title" id="">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Qualification/Work Experience</label>
                        <input type="text" class="form-control" placeholder="Qualification/Work Experience" required name="experience" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Employee Number</label>
                        <input type="text" class="form-control" required placeholder="Employee Number" name="employee" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Position</label>
                        <input type="text" class="form-control" required placeholder="Position" name="position" id="">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Job Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection