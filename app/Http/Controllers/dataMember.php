<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\cek_id;

class dataMember extends Controller
{
    public function showMember(){
    	$users = DB::table('tb_anggotas')->count();
    	//$data = DB::table('tb_anggotas')->get();
    	$data = DB::table('tb_anggotas')
    		->join('cek_ids', 'cek_ids.kode_member', '=', 'tb_anggotas.kode_member')
    		->get();
    	$kode="";
    	//echo $users;
    	if($users == 0){
    		$kode = "USR".date("Ymd")."-1";
    	} else{
    		//$cek = DB::table('cek_ids')->where(max('id'))->get();
    		$cek = cek_id::max('id');
    		$add = $cek+1;
    		$kode= "USR".date("Ymd")."-".$add;
    	}
    	return view('index',['kode' => $kode, 'data' => $data]);
    }
}
