<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archiever;
use Auth;
class viewarc extends Controller
{
    public function index(){
    	$resource = Archiever::get();
    	return view('user.profile', ['resource'=>$resource]);
    }
}
