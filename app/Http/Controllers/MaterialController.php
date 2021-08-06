<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use DB;


class MaterialController extends Controller
{

	public function upload(){
	$materials = Material::get();
	return view('mentor.tambah_materi',['materials' => $materials]);
}
public function proses_upload(Request $request){
	$this->validate($request, [
		'file' => 'required',
		'name' => 'required',
		'tanggal' => 'required',
		'jam_mulai' => 'required',
		'jam_selesai' => 'required',
		'url' => 'required',
		'kuota' => 'required',
		'topik' => 'required',
	]);
 
	// menyimpan data file yang diupload ke variabel $file
	$file = $request->file('file');
 
	$nama_file = $file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
	$tujuan_upload = 'sharing';
	$file->move($tujuan_upload,$nama_file);
 
 
	Material::create([
		'file' => $nama_file,
		'name' => $request->name,
		'tanggal' => $request->tanggal,
		'jam_mulai' => $request->jam_mulai,
		'jam_selesai' => $request->jam_selesai,
		'url' => $request->url,
		'kuota' => $request->kuota,
		'topik' => $request->topik,
	]);
 
	return redirect('/mentor/room')->with('status', 'Materi berhasil ditambahkan!');
}
	public function join_materi(Request $request)
	{
		/* Fungsi Original
		$users = DB::table('materi_join')
				->rightJoin('users', 'materi_id', '=', 'posts.student_id')
				->get();
		*/
		
		// Kode Insert Materi Join
		$join = DB::table('materi_joins')->insert([
			'materi_id' => $request->materi_id,
			'student_id' => $request->student_id 
		]);

		// Kode ambil data materi
		$materi = DB::table('materials')->where('id',  $request->materi_id)->first();

		if($join){
			return redirect()->back()->with("message", "Kamu telah masuk Sharing Session Class dengan mentor <b class='text-dark'>$materi->name</b>!");
		}
     }
}