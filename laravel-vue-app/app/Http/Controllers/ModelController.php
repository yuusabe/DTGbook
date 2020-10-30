<?php

namespace App\Http\Controllers;

use App\Models\G_info_table;
use App\Models\Logo_table;

class ModelController extends Controller
{
    public function model()
    {
        $md = new G_info_table();
        $g_all_name = $md->g_all_name();
        $md = new Logo_table();
        $logo = $md->logo();
        return view('g_all',compact('g_all_name','logo'));
    }
}
