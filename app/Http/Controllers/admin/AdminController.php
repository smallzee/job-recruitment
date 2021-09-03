<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['page_title'] = "Dashboard";
        return view('admin.dashboard',$data);
    }

    public function admin(){
        $data['page_title'] = "All Admin";
        return view('admin.admin',$data);
    }

    public function create_admin(){
        $data['page_title'] = "Create Admin";
        return view('admin.create-admin',$data);
    }

    public function create_new_admin(Request $request){

        $validator = Validator::make($request->all(),[
            'email_address'=>'required|email|unique:users|min:8|max:200',
            'full_name'=>'required|min:3|max:100',
            'phone_number'=>'required',
            'gender'=>'required',
            'password'=>'required'
        ]);


        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }

        $user = new User();
        $user->email_address = $request->email_address;
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('flash_info','Admin has been created successfully');

    }

    public function edit_admin(User $user){
        $data['page_title'] = "Edit Admin";
        $data['user'] = $user;
        return view('admin.edit-admin',$data);
    }

    public function update_admin(Request $request){
        $validator = Validator::make($request->all(),[
            'full_name'=>'required|min:3|max:100',
            'phone_number'=>'required',
            'gender'=>'required',
        ]);


        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }


        $user = User::find($request->id);
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;

        $user->save();

        return back()->with('flash_info','Admin has been updated successfully');
    }

    public function create_job_recruitment(){
        $data['page_title'] = "Create Recruitment Job";
        return view('admin.create-job-recruitment',$data);
    }

    public function create_job(Request $request){
       $validator = Validator::make($request->all(),[
           'job_title'=>'required',
           'experience'=>'required',
           'employee'=>'required|numeric',
           'description'=>'required'
       ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }


        Job::create([
            'job_title'=>$request->job_title,
            'experience'=>$request->experience,
            'employee'=>$request->employee,
            'description'=>$request->description
        ]);

        return back()->with('flash_info','Job recruitment has been created successfully');

    }

    public function job_recruitment(){
        $data['page_title'] = "All Job Recruitment";
        return view('admin.job-recruitment',$data);
    }

    public function edit_job_recruitment(Job $job){
        $data['page_title'] = "Edit Job Recruitment";
        $data['job'] = $job;
        return view('admin.edit-job-recruitment',$data);
    }

    public function update_job(Request $request){
        $validator = Validator::make($request->all(),[
            'job_title'=>'required',
            'experience'=>'required',
            'employee'=>'required|numeric',
            'description'=>'required'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }

        $job = Job::find($request->id);
        $job->job_title = $request->job_title;
        $job->experience = $request->experience;
        $job->employee = $request->employee;
        $job->description = $request->description;
        $job->save();

        return back()->with('flash_info',' Job recruitment has been updated successfully');
    }

    public function recruitment(){
        $data['page_title'] = "All Staff Recruitment";
        return view('admin.recruitment',$data);
    }

    public function application(){
        $data['page_title'] = "All Recruitment Application";
        return view('admin.application',$data);
    }

    public function logout()
    {
        Auth::guard()->logout();
        return redirect('/admin')->with('flash_info','You have logged out successfully');
    }
}
