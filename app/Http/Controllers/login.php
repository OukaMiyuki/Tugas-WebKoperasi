<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\admin_tbl;
use App\manager_tbl;

class login extends Controller{
    function masuk(Request $request){
    	$data1 = admin_tbl::where('uername', $request->username)->Where('password', $request->password)->get();
    	$data2 = manager_tbl::where('uername', $request->username)->Where('password', $request->password)->get();
    	if(count($data1)>0){
    		Auth::guard('admin')->LoginUsingId($data1[0]['id']);
    		return redirect('/admin');
    	} else if(count($data2)>0){
    		AUth::guard('manager')->LoginUsingId($data2[0]['id']);
    		return redirect('/manager');
    	} else{
    		return "login gagal!";
    	}
    }

    function keluar(){
    	if(Auth::guard('admin')->check()){
    		Auth::guard('admin')->logout();
    	} else if(Auth::guard('manager')->check()){
    		Auth::guard('manager')->logout();
    	}
    	return redirect('/login');
    }
}
