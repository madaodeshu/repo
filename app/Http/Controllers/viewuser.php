<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class viewuser extends Controller
{
    public function user(){
    	$resource = User::get();
    	return view('admin.data_user', ['resource'=>$resource]);
    }
}
