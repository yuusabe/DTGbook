<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class T_info_table extends Model
{
    protected $table = 't_info_tables';
    protected $guarded = array('t_code');
    public $timestamps = false;

    public function getData(){
        $t_info = DB::table('t_info_tables')->get();
        return $t_info;
    }
}
