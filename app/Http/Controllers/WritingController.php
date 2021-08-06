<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writing;
use DB;


class WritingController extends Controller
{

	public function upload(){
	$writings = Writing::get();
	return view('mentor.add_writing',['writings' => $writings]);
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
	$tujuan_upload = 'writings';
	$file->move($tujuan_upload,$nama_file);
 
 
	Writing::create([
		'file' => $nama_file,
		'name' => $request->name,
		'tanggal' => $request->tanggal,
		'jam_mulai' => $request->jam_mulai,
		'jam_selesai' => $request->jam_selesai,
		'url' => $request->url,
		'kuota' => $request->kuota,
		'topik' => $request->topik,
	]);
 
	return redirect('/mentor/writing')->with('status', 'Materi berhasil ditambahkan!');
}
	public function join_materi(Request $request)
	{
		/* Fungsi Original
		$users = DB::table('materi_join')
				->rightJoin('users', 'materi_id', '=', 'posts.student_id')
				->get();
		*/
		
		// Kode Insert Materi Join
		$join = DB::table('writing_joins')->insert([
			'writing_id' => $request->writing_id,
			'student_id' => $request->student_id 
		]);

		// Kode ambil data materi
		$writing = DB::table('writings')->where('id',  $request->writing_id)->first();

		if($join){
			return redirect()->back()->with("message", "Kamu telah masuk <b class='text-dark'>$writing->pertemuan</b> dengan mentor <b class='text-dark'>$writing->name</b>!");
		}
     }
}