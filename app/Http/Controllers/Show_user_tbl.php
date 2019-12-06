<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use http\Env\Response;
use App\user_tbl;
use App\cek_id;
use App\tb_anggota;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class Show_user_tbl extends Controller
{
	public function showUserList(){
    	$data = DB::table("tb_anggotas")
    			->join('cek_ids', 'cek_ids.kode_member', '=' ,'tb_anggotas.kode_member')
    			->where('cek_ids.status_anggota', '=', 'Aktif')
    			->whereNOTIn('tb_anggotas.kode_member',function($query){
               		$query->select('kode_member')->from('user_tbls');
            	})
    			->get();
		$usr = DB::table('user_tbls')
			->select('user_tbls.kode_member', 'user_tbls.nama', 'user_tbls.uername', 'user_tbls.pasword')
			->get();
    	return view('index',['data' => $data, 'usr' => $usr]);
   	}
}