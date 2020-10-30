<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{

    public function top()
    {
        return view('top');
    }
    public function g_all()
    {
        return view('g_all');
    }
    public function g_detail()
    {
        return view('g_detail');
        $data = $message;
        return view('g_',$data);

    }
    public function gt_detail()
    {
        return view('gt_detail');
    }
    public function t_detail()
    {
        return view('t_detail');
    }
    public function search()
    {
        return view('search');
    }
    public function search_result()
    {
        return view('search_result');
    }
    public function access()
    {
        return view('access');
    }

    public function a()
    {
        return view('a');
    }
}

