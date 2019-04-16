<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AdminOrder extends Model
{

	 	public $table = "adminorders";
	 	
    	public function user(){
    	return $this->belongsTo('App\User');
    }


     public function userinfo1()
    {
       
        $users = DB::table('users')->where('users.id','=',$this->user_id)->get();
        return $users[0]->name;
    }

    public function userinfo2()
    {
       
        $users = DB::table('users')->where('users.id','=',$this->user_id)->get();
        return $users[0]->address;
    }
    public function userinfo3()
    {
       
        $users = DB::table('users')->where('users.id','=',$this->user_id)->get();
        return $users[0]->tel;
    }
}
