<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

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

}
