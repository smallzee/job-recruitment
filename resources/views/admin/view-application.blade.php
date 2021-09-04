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
                    <table class="table table-bordered">
                        <tr>
                            <td>Email Address</td>
                            <td>{{ $user->email_address }}</td>
                        </tr>
                        <tr>
                            <td>Full Name</td>
                            <td>{{ ucwords($user->full_name) }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>{{ $user->phone_number }}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>{{ ucwords($user->gender) }}</td>
                        </tr>
                        <tr>
                            <td>Marital Status</td>
                            <td>{{ ucwords($user->marital_status) }}</td>
                        </tr>
                        <tr>
                            <td>Educational Background</td>
                            <td>{{ $user->educational_background }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{$user->address}}</td>
                        </tr>
                        <tr>
                            <td>Date Of Birth</td>
                            <td>{{ $user->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <td>Place Of Birth</td>
                            <td>{{ $user->place_of_birth }}</td>
                        </tr>
                        <tr>
                            <td>Recruitment Status</td>
                            <td>{{ ($user->status == 0 ) ? 'New Application' : 'Staff' }}</td>
                        </tr>
                        <tr>
                            <td>Seek Position</td>
                            <td>{{ $user->job->position }}</td>
                        </tr>
                        <tr>
                            <td>File Attachment</td>
                            <td><a href="" class="btn btn-primary">Download Attachment</a></td>
                        </tr>
                    </table>
                </div>

                <h5 class="page-header">Status</h5>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Recruitment Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="" disabled selected>Select</option>
                            <option value="0" {{ ($user->status == 0 ) ? 'selected' : '' }}>New Application</option>
                            <option value="1" {{ ($user->status == 1 ) ? 'selected' : '' }}>Staff</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Basic Salary</label>
                        <input type="text" class="form-control" value="{{ $user->basic_salary }}" name="basic_salary" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Allowance</label>
                        <input type="text" class="form-control" value="{{ $user->allowance }}" name="allowance" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Faculty</label>
                        <input type="text" class="form-control" placeholder="Faculty" name="faculty" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Department</label>
                        <input type="text" class="form-control"  name="department" placeholder="Department" id="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection