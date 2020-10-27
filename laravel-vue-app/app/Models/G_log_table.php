<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class G_log_table extends Model
{
    protected $table = 'g_log_tables';
    protected $guarded = array('g_code');
    public $timestamps = false;

    public function g_all_logo(){
        $g_all_logo1 = \DB::table('logo_tables')->select('logo_image')->get();
        $g_all_logo = json_decode(json_encode($g_all_logo1),true);
        return $g_all_logo;
    }
}
