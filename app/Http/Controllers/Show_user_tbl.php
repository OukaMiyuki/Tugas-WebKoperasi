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
   		//$data = DB::table('tb_anggotas')
    	//	->join('cek_ids', 'cek_ids.kode_member', '=', 'tb_anggotas.kode_member')
    	//	->get();

    	//$data = DB::table('tb_anggotas')
    	//		->join('cek_ids', 'cek_ids.kode_member', '=', 'tb_anggotas.kode_member')
    	//		->leftJoin('cek_ids','tb_anggotas.kode_member','=','cek_ids.kode_member')
    	//		->leftJoin('user_tbls','tb_anggotas.kode_member','=','user_tbls.kode_member')
    	//		->whereNull('user_tbls.kode_member')
    	//		->get();

    	//$data = DB::table('tb_anggotas as anggota')
    	//		->join('cek_ids as cekid', 'cekid.kode_member', '=', 'anggota.kode_member')
    	//		->select('anggota.kode_member', 'anggota.nama', 'anggota.email', 'cekid.status_anggota', 'cekid.status_akses')
    	//		->leftJoin('user_tbls as usrtbl', function ($join) {
        //			$join->on('usrtbl.kode_member', '=', 'anggota.kode_member')
          //   		->whereNull('usrtbl.kode_member');
    		//	})
    		//	->get();
    		//	
    	$data = DB::table("tb_anggotas")
    			->join('cek_ids', 'cek_ids.kode_member', '=' ,'tb_anggotas.kode_member')
    			->where('cek_ids.status_anggota', '=', 'Aktif')
    			->whereNOTIn('tb_anggotas.kode_member',function($query){
               		$query->select('kode_member')->from('user_tbls');
            	})
    			->get();
    	//$data = DB::table("tb_anggotas")->select('*')->whereNotIn('kode_member',function($query) {
   		//			$query->select('kode_member')->from('user_tbls');
		//		})->get();
		$usr = DB::table('user_tbls')
			->select('user_tbls.kode_member', 'user_tbls.nama', 'user_tbls.uername', 'user_tbls.pasword')
			->get();
    	return view('index',['data' => $data, 'usr' => $usr]);
   	}
}