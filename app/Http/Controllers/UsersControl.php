<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use http\Env\Response;
use App\user_tbl;
use App\cek_id;
use App\tb_anggota;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class UsersControl extends Controller
{
    public function memberList(){
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
    	return view('index',['data' => $data]);
   	}

    public function addUser(Request $request){
        $kode_member = $request->input('kode_member');
        $nama = $request->input('nama');
        $username = $request->input('username');
        $password = $request->input('password');

        user_tbl::create([
            'kode_member' => $kode_member,
            'nama' => $nama,
            'uername' => $username,
            'pasword' => $password,
            'created_at' => now()
        ]);
        return redirect()->back()->with(['success' => 'Done Added!']);
    }

    public function editUser(Request $request){
        $kode_member = $request->input('kode_member');
        $nama = $request->input('nama');
        $username = $request->input('username');
        $password = $request->input('password');

        DB::table('user_tbls')->where('kode_member',$kode_member)->update([
        	'nama' => $nama,
            'uername' => $username,
            'pasword' => $password,
            'updated_at' => now()
        ]);
        return redirect()->back()->with(['success' => 'Done Edited!']);
    }

    public function hapusUser($kode_member){
        DB::table('user_tbls')->where('kode_member',$kode_member)->delete();
        return redirect()->back()->with(['success' => 'Done Deleted!']);
    }
}