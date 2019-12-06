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