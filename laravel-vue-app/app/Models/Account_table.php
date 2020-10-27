<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account_table extends Model
{
    protected $table = 'account_tables';
    protected $guarded = array('admin_code');
    public $timestamps = false;

    public function getData(){
        $account = DB::table('account_tables')->get();
        return $account;
    }
}
