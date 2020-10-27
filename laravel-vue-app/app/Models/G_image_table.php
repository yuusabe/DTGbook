<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class G_image_table extends Model
{
    protected $table = 'g_image_tables';
    protected $guarded = array('g_image_code');
    public $timestamps = false;

    public function getData(){
        $g_image = DB::table('g_image_tables')->get();
        return $g_image;
    }
}
