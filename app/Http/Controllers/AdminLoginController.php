<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Session;
class AdminLoginController extends Controller
{
    public function AdminLogin(Request $request){
	
		$username = $request->username;
    	$password = md5($request->password);
    	//dd($password.''.$username);

    	$users = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();
    	// dd($users->username);	
    	if(empty($users[0])){  
    	   $request->session()->flash('status', 'Username or password incorrect');
           return redirect('login');
    	}else{
            Session::put('username', $username);
    		return redirect('/');
    	}

    	
    }
}
