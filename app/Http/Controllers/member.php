<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_anggota;
use App\cek_id;
use App\usr_image_db;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Image;
use File;

class member extends Controller
{
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
            'status_anggota' => $status
        ]);
        usr_image_db::create([
            'kode_member' => $kode_member,
            'kode_gambar' => $id,
            'ekstensi' => $ekstensi
        ]);
        return redirect()->back()->with(['success' => 'Done Added!']);    
    }

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
            return redirect()->back()->with(['success' => 'Done Added!']);    
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
}
