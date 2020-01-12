<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\admin_info;
use App\admin_tbl;

class AdminController extends Controller
{
    public function adminProfile(){
    	$kode_admin = Auth::user()->kode;
        $data = DB::table('admin_infos')->where('kode',$kode_admin)->get();
        $data1 = DB::table('admin_tbls')->where('kode',$kode_admin)->get();
        return view('Web/pages/Profil', compact('data','data1'));
    }

    public function ShowAdminList(){
        $users = DB::table('admin_infos')->count();
        $data = DB::table('admin_infos')->get();
        $kode="";
        $kode= "ADM".date("Ymd")."-".$users;
        return view('home/manager/index',['kode' => $kode, 'data' => $data]);
    }

    public function AddAdmin(Request $request){
   		$kode_admin = $request->input('kd');
		$nik = $request->input('nik');
		$nama = $request->input('nama');
		$jk = $request->jk;
		$pendidikan = $request->input('pendidikan');
		$alamat = $request->input('alamat');
		$kabko = $request->input('kabko');
		$pos = $request->input('pos');
		$email = $request->input('email');
		$telp = $request->input('telp');
		$file = $request->file('image');
        $ekstensi = $file->getClientOriginalExtension();
        $status = "Aktif";
        $status_akses = "Admin";

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

        admin_info::create([
            'kode' => $kode_admin,
            'nik' => $nik,
            'nama' => $nama,
            'jk' => $jk,
            'pendidikan' => $pendidikan,
            'alamat' => $alamat,
            'kabkota' => $kabko,
            'pos' => $pos,
            'email' => $email,
            'telp' => $telp,
            'photo' => $id.".".$ekstensi,
            'status_admin' => $status,
            'status_akses' => $status_akses,
            'created_at' => now()
        ]);
        return redirect()->back()->with(['success' => 'Done Added!']);
    }

    public function EditAdmin(Request $request){
    	$kode_admin = $request->input('kd');
		$nik = $request->input('nik');
		$nama = $request->input('nama');
		$jk = $request->jk;
		$pendidikan = $request->input('pendidikan');
		$alamat = $request->input('alamat');
		$kabko = $request->input('kabko');
		$pos = $request->input('pos');
		$email = $request->input('email');
		$telp = $request->input('telp');
		$file = $request->file('image');

        if($file == ""){
            admin_info::where('kode',$kode_admin)->update([
                    'nik' => $nik,
                    'nama' => $nama,
                    'jk' => $jk,
                    'pendidikan' => $pendidikan,
                    'alamat' => $alamat,
                    'kabkota' => $kabko,
                    'pos' => $pos,
                    'email' => $email,
                    'telp' => $telp,
                    'updated_at' => now()
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

            admin_info::where('kode',$kode_admin)->update([
                    'nik' => $nik,
                    'nama' => $nama,
                    'jk' => $jk,
                    'pendidikan' => $pendidikan,
                    'alamat' => $alamat,
                    'kabkota' => $kabko,
                    'pos' => $pos,
                    'email' => $email,
                    'telp' => $telp,
                    'photo' => $id.".".$ekstensi,
                    'updated_at' => now()
            ]);
            return redirect()->back()->with(['success' => 'Done Updated!']);
        }
    }

    public function DisableEnableAdmin($kode_admin){
    	$cek = DB::table('admin_infos')->where('kode',$kode_admin)->get();
        foreach ($cek as $data){ 
            if($data->status_admin == "Aktif"){
                DB::table('admin_infos')->where('kode',$kode_admin)->update([
                    'status_admin' => "Non-Aktif"
                ]);
            } elseif ($data->status_admin == "Non-Aktif") {
                DB::table('admin_infos')->where('kode',$kode_admin)->update([
                    'status_admin' => "Aktif"
                ]);
            }
        }
        return redirect()->back()->with(['success' => 'Done Updated!']);
    }

    public function HapusAdmin($kode_admin){
    	DB::table('admin_infos')->where('kode',$kode_admin)->delete();
        return redirect()->back()->with(['success' => 'Done Deleted!']);
    }

    public function ProfileAdmin($kode_admin){
    	$data = DB::table('admin_infos')->where('kode',$kode_admin)->get();
    	$data1 = DB::table('admin_tbls')->where('kode',$kode_admin)->get();

    	return view('Web/pages/Profil', compact('data','data1'));
    }

    public function showUserList(){
        $data = DB::table("admin_infos")
                ->whereNOTIn('admin_infos.kode',function($query){
                    $query->select('kode')->from('admin_tbls');
                })
                ->get();
        $usr = DB::table('admin_tbls')
        	->join('admin_infos', 'admin_infos.kode', '=', 'admin_tbls.kode')
        	->get();
        return view('/home/manager/index',['data' => $data, 'usr' => $usr]);
    }

    public function addUser(Request $request){
    	$kode_admin = $request->input('kode_member');
    	$username = $request->input('username');
    	$password = $request->input('password');
    	$akses = $request->input('akses');
    	$status = $request->input('status');

    	admin_tbl::create([
            'kode' => $kode_admin,
            'uername' => $username,
            'password' => $password,
            'status_akses' => $akses,
            'status_admin' => $status,
            'created_at' => now()
        ]);
        return redirect()->back()->with(['success' => 'Done Added!']);
    }

    public function editUser(Request $request){
    	$kode_admin = $request->input('kode_member');
    	$username = $request->input('username');
    	$password = $request->input('password');

    	admin_tbl::where('kode',$kode_admin)->update([
                    'uername' => $username,
                    'password' => $password,
		]);
		return redirect()->back()->with(['success' => 'Done Updated!']);
    }

    public function deleteUser($kode_admin){
    	admin_tbl::where('kode',$kode_admin)->delete();
        return redirect()->back()->with(['success' => 'Done Deleted!']);
    }
}
