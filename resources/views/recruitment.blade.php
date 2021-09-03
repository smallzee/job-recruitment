@extends('layout')

@section('content')

    <style>
        ol > li{
            padding-bottom: 10px;
        }
    </style>

   <div style="padding: 20px;">
       <div class="container">
           <div class="row">
               <form action="" method="post">
                   <div class="col-sm-8">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h5>Submit Application</h5>
                           </div>
                           <div class="panel-body">
                                   <div class="row">
                                       <div class="col-sm-12">
                                           <div class="form-group">
                                               <label for="">Full Name</label>
                                               <input type="text" class="form-control" required placeholder="Full Name" name="full_name" id="">
                                           </div>
                                       </div>

                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <label for="">Email Address</label>
                                               <input type="email" required class="form-control" name="email_address" placeholder="Email Address" id="">
                                           </div>
                                       </div>

                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <label for="">Phone Number</label>
                                               <input type="text" class="form-control" required name="phone_number" placeholder="Phone Number" id="">
                                           </div>
                                       </div>

                                       <div class="col-sm-12">
                                           <div class="form-group">
                                               <label for="">Gender</label>
                                               <select name="gender" required id="" class="form-control">
                                                   <option value="male">Male</option>
                                                   <option value="female">Female</option>
                                               </select>
                                           </div>
                                       </div>

                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <label for="">Marital Status</label>
                                               <select name="marital_status" required id="" class="form-control">
                                                   <option value="married">Married</option>
                                                   <option value="single">Single</option>
                                                   <option value="divorce">Divorce</option>
                                                   <option value="widow">Widow</option>
                                               </select>
                                           </div>
                                       </div>

                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <label for="">Educational Background</label>
                                               <input type="text" class="form-control" required placeholder="Educational Background" name="educational_background" id="">
                                           </div>
                                       </div>
                                       
                                       <div class="col-sm-12">
                                           <div class="form-group">
                                               <label for="">Address</label>
                                               <textarea name="" class="form-control" id="" placeholder="Address" style="resize: none"></textarea>
                                           </div>
                                       </div>

                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <label for="">Date Of Birth</label>
                                               <input type="date" class="form-control" required placeholder="Date Of Birth" name="date_of_birth" id="">
                                           </div>
                                       </div>

                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <label for="">Place Of Birth</label>
                                               <input type="text" class="form-control" name="place_of_birth" required placeholder="Place Of Birth" id="">
                                           </div>
                                       </div>
                                   </div>
                           </div>
                       </div>

                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h5>
                                   Attach your Resume here.
                               </h5>
                           </div>
                           <div class="panel-body">
                               <div class="form-group">
                                   <label for="">Attachment File </label>
                                   <input type="file" name="attachment" required accept="application/pdf" id="">
                                   <small>Should be in PDF format</small>
                               </div>
                           </div>
                       </div>

                       <div class="form-group">
                           <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                       </div>
                   </div>
               </form>

               <div class="col-sm-4">
                   <div class="panel panel-default">
                       <div class="panel-heading">
                           <h5>Job Requirement</h5>
                       </div>
                       <div class="panel-body">

                           <div class="text-center">
                               <img src="{{url('assets/images/logo2.png')}}" alt="">
                           </div>

                           <hr>

                          <ol>
                              <li>Job Title : {{ $job->job_title }}</li>
                              <li>Required No Of Employee's : {{ $job->employee }}</li>
                              <li>Qualification/Work Experience : {{ $job->experience }}</li>
                              <li>Job Description: {!! $job->description !!}</li>
                          </ol>

                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection