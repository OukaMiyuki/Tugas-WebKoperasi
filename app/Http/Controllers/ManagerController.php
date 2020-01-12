<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Auth;

class ManagerController extends Controller
{
    public function showProfile(){
    	$kode_manager = Auth::user()->kode;

    	$data = DB::table('manager_infos')->where('kode',$kode_manager)->get();
    	$data1 = DB::table('manager_tbls')->where('kode',$kode_manager)->get();

    	return view('Web/pages/Profil', compact('data','data1'));
    }
}
