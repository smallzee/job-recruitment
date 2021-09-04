<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MyController extends Controller
{
    //

    public function recruitment(Job $job){
        $data['page_title'] = "Submit Application";
        $data['job'] = $job;
        return view('recruitment',$data);
    }

    public function job_recruitment(){
        $data['page_title'] = "Job Recruitment";
        return view('job-recruitment',$data);
    }

    public function create_recruitment(Request $request){
        $validator = Validator::make($request->all(),[
            'full_name'=>'required',
            'email_address'=>'required|email|unique:users',
            'phone_number'=>'required|unique:users',
            'gender'=>'required',
            'marital_status'=>'required',
            'educational_background'=>'required',
            'date_of_birth'=>'required',
            'place_of_birth'=>'required',
            'address'=>'requied',
            'attachment'=>'required|mimes:pdf'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }

        if ($request->has('attachment')){
            $file = $request->file('attachment');
            $attachment = time().$file->getClientOriginalName();
            $file->move('public/assets/images/'.$attachment);
        }

        $user = new User();
        $user->email_address = $request->email_address;
        $user->full_name = $request->full_name;
        $user->recruitment_id = $request->recruitment_id;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $user->marital_status = $request->marital_status;
        $user->educational_background = $request->educational_background;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->place_of_birth = $request->place_of_birth;
        $user->attachment = $attachment;
        $user->role = 2;
        $user->save();

        return back()->with('flash_info','Your application has been submitted successfully');
    }

}
