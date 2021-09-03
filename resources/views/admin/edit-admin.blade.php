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

                <form action="{{url('admin/update_admin')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" disabled value="{{$user->email_address}}" class="form-control" required name="email_address" placeholder="Email Address" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" value="{{$user->full_name}}" class="form-control" required name="full_name" placeholder="Full Name" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" value="{{$user->phone_number}}" class="form-control" required name="phone_number" placeholder="Phone Number" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Gender</label>
                        <select name="gender" required class="form-control" id="">
                            <option value="" disabled selected>Select</option>
                            <option value="male" {{ ($user->gender == 'male') ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ ($user->gender == 'female') ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <input type="hidden" name="id" value="{{$user->id}}" id="">


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection