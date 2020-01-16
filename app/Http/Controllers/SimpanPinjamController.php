<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_anggota;
use App\tb_simpanan_pokok;
use App\tb_simpanan_wajib;
use App\tb_simpanan_sukarela;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class SimpanPinjamController extends Controller
{
	public function viewSimpan(){
		$data1 = DB::table("tb_anggotas")
                ->join('cek_ids', 'cek_ids.kode_member', '=' ,'tb_anggotas.kode_member')
                ->where('cek_ids.status_anggota', '=', 'Aktif')
                ->whereNOTIn('tb_anggotas.kode_member',function($query){
                    $query->select('kode_member')->from('tb_simpanan_pokoks');
                })
                ->get();
        $data2 = DB::table("tb_simpanan_pokoks")->get();
        $data3 = DB::table("tb_anggotas")
        		->join('cek_ids', 'cek_ids.kode_member', '=' ,'tb_anggotas.kode_member')
                ->join('tb_simpanan_pokoks', 'tb_simpanan_pokoks.kode_member', '=' ,'cek_ids.kode_member')
                ->where('cek_ids.status_anggota', '=', 'Aktif')
                ->get();
        $data4 = DB::table("tb_simpanan_wajibs")->get();
        $data5 = DB::table("tb_simpanan_sukarelas")->get();
        return view('/home/admin/index', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5]);
	}

	public function addSimpananPokok(Request $request){
		$kode_member = $request->input('kode_member');
		$nama = $request->input('nama');
		$jenis_simpanan = $request->input('simpanan');
		$tanggal = $request->input('tanggal');
		$nominal = 100000;

		tb_simpanan_pokok::create([
            'kode_member' => $kode_member,
            'nama' => $nama,
           	'jenis_simpanan' => $jenis_simpanan,
           	'nominal' => $nominal,
        ]);
        return redirect()->back()->with(['success' => 'Done Added!']);
	}

	public function hapusSimpananPokok($kode_member){
		DB::table('tb_simpanan_pokoks')->where('kode_member',$kode_member)->delete();
        return redirect()->back()->with(['success' => 'Done Deleted!']);
	}

	public function addSimpananWajib(Request $request){
		$kode_member = $request->input('kode_member');
		$nama = $request->input('nama');
		$jenis_simpanan = $request->input('simpanan');
		$tanggal = $request->input('tanggal');
		$nominal = 150000;

		tb_simpanan_wajib::create([
            'kode_member' => $kode_member,
            'nama' => $nama,
           	'jenis_simpanan' => $jenis_simpanan,
           	'nominal' => $nominal,
        ]);
        return redirect()->back()->with(['success' => 'Done Added!']);
	}

	public function hapusSimpananWajib($kode_member){
		DB::table('tb_simpanan_wajibs')->where('kode_member',$kode_member)->delete();
        return redirect()->back()->with(['success' => 'Done Deleted!']);
	}

	public function addSimpananSukarela(Request $request){
		$kode_member = $request->input('kode_member');
		$nama = $request->input('nama');
		$jenis_simpanan = $request->input('simpanan');
		$tanggal = $request->input('tanggal');
		$nominal = $request->input('nominal');

		tb_simpanan_sukarela::create([
            'kode_member' => $kode_member,
            'nama' => $nama,
           	'jenis_simpanan' => $jenis_simpanan,
           	'nominal' => $nominal,
           	'created_at' => $tanggal
        ]);
        return redirect()->back()->with(['success' => 'Done Updated!']);
	}

	public function editSimpananSukarela(Request $request){
		$kode_member = $request->input('kode_member');
		$tanggal = $request->input('tanggal');
		$nominal = $request->input('nominal');

		tb_simpanan_sukarela::where('kode_member',$kode_member)->update([
			'nominal' => $nominal,
			'updated_at' => $tanggal
		]);
		return redirect()->back()->with(['success' => 'Done Updated!']);
	}

	public function hapusSimpananSukarela($kode_member){
		DB::table('tb_simpanan_sukarelas')->where('kode_member',$kode_member)->delete();
        return redirect()->back()->with(['success' => 'Done Deleted!']);
	}
}
