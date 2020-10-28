<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logo_table extends Model
{
    protected $table = 'logo_tables';
    protected $guarded = array('logo_code');
    public $timestamps = false;

    public function logo(){
        $logo1 = \DB::table('logo_tables')->select('logo_image')->get();
        $logo = json_decode(json_encode($logo1),true);
        return $logo;
    }
}
