<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class T_image_table extends Model
{
    protected $table = 't_image_tables';
    protected $guarded = array('t_image_code');
    public $timestamps = false;

    public function getData(){
        $t_image = DB::table('t_image_tables')->get();
        return $t_image;
    }
}
