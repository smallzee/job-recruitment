<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //

    public function recruitment(){
        $data['page_title'] = "Submit Application";
        return view('recruitment',$data);
    }

    public function job_recruitment(){
        $data['page_title'] = "Job Recruitment";
        return view('job-recruitment',$data);
    }
}
