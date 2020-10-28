<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class T_log_table extends Model
{
    protected $table = 't_log_tables';
    protected $guarded = array('t_code');
    public $timestamps = false;

    public function getData(){
        $t_log = DB::table('t_log_tables')->get();
        return $t_log;
    }
}
