<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaking;
use DB;


class SpeakingController extends Controller
{

	public function upload(){
	$speakings = Speaking::get();
	return view('mentor.add_speaking',['speakings' => $speakings]);
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
	$tujuan_upload = 'speaking';
	$file->move($tujuan_upload,$nama_file);
 
 
	Speaking::create([
		'file' => $nama_file,
		'name' => $request->name,
		'tanggal' => $request->tanggal,
		'jam_mulai' => $request->jam_mulai,
		'jam_selesai' => $request->jam_selesai,
		'url' => $request->url,
		'kuota' => $request->kuota,
		'topik' => $request->topik,
	]);
 
	return redirect('/mentor/speaking')->with('status', 'Materi berhasil ditambahkan!');
}
	public function join_speaking(Request $request)
	{
		/* Fungsi Original
		$users = DB::table('speaking_join')
				->rightJoin('users', 'speaking_id', '=', 'posts.student_id')
				->get();
		*/
		
		// Kode Insert Materi Join
		$join = DB::table('speaking_joins')->insert([
			'speaking_id' => $request->speaking_id,
			'student_id' => $request->student_id 
		]);

		// Kode ambil data materi
		$speaking = DB::table('speakings')->where('id',  $request->speaking_id)->first();

		if($join){
			return redirect()->back()->with("message", "Kamu telah masuk <b class='text-dark'>$speaking->pertemuan</b> dengan mentor <b class='text-dark'>$speaking->name</b>!");
		}
     }
}