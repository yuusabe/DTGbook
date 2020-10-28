<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class G_info_table extends Model
{
    protected $table = 'g_info_tables';
    protected $guarded = array('g_code');
    public $timestamps = false;

    public function g_all_name(){
        $g_all_name1 = \DB::table('g_info_tables')->select('g_name')->get();
        $g_all_name = json_decode(json_encode($g_all_name1),true);
        return $g_all_name;
    }
}