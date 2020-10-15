<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(){
    	return view('users',[
    		'name'=>'lucaslindobeyblade',
    		'idade'=>27,
    		'male'=>true,
    		'hobbies'=>['movies','travels','parties']
    	]);
    }

}
