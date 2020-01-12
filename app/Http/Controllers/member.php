<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_anggota;
use App\cek_id;
use App\usr_image_db;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;
use Image;
use File;

class member extends Controller
{
    //function show data member
    public function showMember(){
        $tes = Auth::user()->kode_admin;
        $users = DB::table('tb_anggotas')->count();
        $data = DB::table('tb_anggotas')
            ->join('cek_ids', 'cek_ids.kode_member', '=', 'tb_anggotas.kode_member')
            ->join('usr_image_dbs', 'usr_image_dbs.kode_member', '=', 'tb_anggotas.kode_member')
            ->get();
        $kode="";
        $cek = null;
        $statement = DB::select("SHOW TABLE STATUS LIKE 'cek_ids'");
        $cek = $statement[0]->Auto_increment;
        $kode= "USR".date("Ymd")."-".$cek;
        return view('/home/admin/index',['kode' => $kode, 'data' => $data]);
    }
    //function add member
    public function addMember(Request $request){
    	$kode_member = $request->input('kd');
		$nik = $request->input('nik');
		$nama = $request->input('nama');
		$jk = $request->jk;
		$pk = $request->input('pk');
		$alamat = $request->input('alamat');
		$kabko = $request->input('kabko');
		$pos = $request->input('pos');
		$email = $request->input('email');
		$telp = $request->input('telp');
		$file = $request->file('image');
        $ekstensi = $file->getClientOriginalExtension();
        $status = "Aktif";

		$client = new \GuzzleHttp\Client();
		$response = $client->request('POST', 'https://api.imgur.com/3/image', [
        	'headers' => [
            	'authorization' => 'Client-ID ' . '00f88ab7fa8c0be',
            	'content-type' => 'application/x-www-form-urlencoded',
        	],
			'form_params' => [
            	'image' => base64_encode(file_get_contents($request->file('image')->path()))
        	],
    	]);
        $response = json_decode($response->getBody()->getContents());
    	$id = $response->data->id;
        $height = $response->data->height;

        tb_anggota::create([
            'kode_member' => $kode_member,
            'nik' => $nik,
            'nama' => $nama,
            'jk' => $jk,
            'pekerjaan' => $pk,
            'alamat' => $alamat,
            'kabkota' => $kabko,
            'pos' => $pos,
            'email' => $email,
            'telp' => $telp,
            'photo' => $id
        ]);
        cek_id::create([
            'kode_member' => $kode_member,
            'nama' => $nama,
            'status_akses' => "Member",
            'status_anggota' => $status
        ]);
        usr_image_db::create([
            'kode_member' => $kode_member,
            'kode_gambar' => $id,
            'ekstensi' => $ekstensi
        ]);
        return redirect()->back()->with(['success' => 'Done Added!']);    
    }
    //function edit data member
    public function editMember(Request $request){
        $kode_member = $request->input('kode_member');
        $nik = $request->input('nik');
        $nama = $request->input('nama');
        $jk = $request->jk;
        $pk = $request->input('pk');
        $alamat = $request->input('alamat');
        $kabko = $request->input('kabko');
        $pos = $request->input('pos');
        $email = $request->input('email');
        $telp = $request->input('telp');
        $file = $request->file('image');
        $status = "Aktif";

        if($file == ""){
            DB::table('tb_anggotas')->where('kode_member',$kode_member)->update([
                    'nik' => $nik,
                    'nama' => $nama,
                    'jk' => $jk,
                    'pekerjaan' => $pk,
                    'alamat' => $alamat,
                    'kabkota' => $kabko,
                    'pos' => $pos,
                    'email' => $email,
                    'telp' => $telp
            ]);
            return redirect()->back()->with(['success' => 'Done Updated!']);    
        } else{
            $ekstensi = $file->getClientOriginalExtension();
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://api.imgur.com/3/image', [
                'headers' => [
                    'authorization' => 'Client-ID ' . '00f88ab7fa8c0be',
                    'content-type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'image' => base64_encode(file_get_contents($request->file('image')->path()))
                ],
            ]);
            $response = json_decode($response->getBody()->getContents());
            $id = $response->data->id;
            $height = $response->data->height;

            DB::table('tb_anggotas')->where('kode_member',$kode_member)->update([
                    'nik' => $nik,
                    'nama' => $nama,
                    'jk' => $jk,
                    'pekerjaan' => $pk,
                    'alamat' => $alamat,
                    'kabkota' => $kabko,
                    'pos' => $pos,
                    'email' => $email,
                    'telp' => $telp,
                    'photo' => $id
            ]);
            DB::table('usr_image_dbs')->where('kode_member',$kode_member)->update([
                    'ekstensi' => $ekstensi
            ]);
            return redirect()->back()->with(['success' => 'Done Added!']);
        }
    }
    //function enable disable member
    public function DisableEnableUser($kode_member){
        $cek = DB::table('cek_ids')->where('kode_member',$kode_member)->get();
        foreach ($cek as $data){ 
            if($data->status_anggota == "Aktif"){
                DB::table('cek_ids')->where('kode_member',$kode_member)->update([
                    'status_anggota' => "Non-Aktif"
                ]);
            } elseif ($data->status_anggota == "Non-Aktif") {
                DB::table('cek_ids')->where('kode_member',$kode_member)->update([
                    'status_anggota' => "Aktif"
                ]);
            }
        }
        return redirect()->back()->with(['success' => 'Done Updated!']);
    }
    //function hapus member
    public function HapusAnggota($kode_member){
        DB::table('tb_anggotas')->where('kode_member',$kode_member)->delete();
        return redirect()->back()->with(['success' => 'Done Deleted!']);
    }

    public function memberProfile($kode_member){
        $data = DB::table('tb_anggotas')
            ->join('cek_ids', 'cek_ids.kode_member', '=', 'tb_anggotas.kode_member')
            ->join('usr_image_dbs', 'usr_image_dbs.kode_member', '=', 'cek_ids.kode_member')
            ->where('tb_anggotas.kode_member', $kode_member)
            ->get();
        $data1 = DB::table('user_tbls')->where('kode_member', $kode_member)->get();
        return view('Web/pages/profil', compact('data','data1'));
    }
}
