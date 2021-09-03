<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
}
