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
    //function show user
    public function showUserList(){
        $data = DB::table("tb_anggotas")
                ->join('cek_ids', 'cek_ids.kode_member', '=' ,'tb_anggotas.kode_member')
                ->where('cek_ids.status_anggota', '=', 'Aktif')
                ->whereNOTIn('tb_anggotas.kode_member',function($query){
                    $query->select('kode_member')->from('user_tbls');
                })
                ->get();
        $usr = DB::table('user_tbls')
            ->select('user_tbls.kode_member', 'user_tbls.nama', 'user_tbls.uername', 'user_tbls.password')
            ->get();
        return view('/home/admin/index',['data' => $data, 'usr' => $usr]);
    }
    //function add user
    public function addUser(Request $request){
        $kode_member = $request->input('kode_member');
        $nama = $request->input('nama');
        $username = $request->input('username');
        $password = $request->input('password');
        $status_akses = "Member";

        user_tbl::create([
            'kode_member' => $kode_member,
            'nama' => $nama,
            'uername' => $username,
            'password' => $password,
            'status_akses' => $status_akses,
            'created_at' => now()
        ]);
        return redirect()->back()->with(['success' => 'Done Added!']);
    }
    //function edit user
    public function editUser(Request $request){
        $kode_member = $request->input('kode_member');
        $nama = $request->input('nama');
        $username = $request->input('username');
        $password = $request->input('password');

        DB::table('user_tbls')->where('kode_member',$kode_member)->update([
        	'nama' => $nama,
            'uername' => $username,
            'password' => $password,
            'updated_at' => now()
        ]);
        return redirect()->back()->with(['success' => 'Done Edited!']);
    }
    //function hapus user
    public function hapusUser($kode_member){
        DB::table('user_tbls')->where('kode_member',$kode_member)->delete();
        return redirect()->back()->with(['success' => 'Done Deleted!']);
    }
}