<?php

namespace App\Http\Controllers;
Use App\Mentor;
use Illuminate\Http\Request;

class ProfileMentorController extends Controller
{

    public function index()
    {
        return view('mentor.edit');
    }

    public function update(Request $request, $id) {
        $mentor = Mentor::findOrFail($id);
        $mentor->name = $request->get('name');
        $mentor->email = $request->get('email');
        $mentor->no_hp = $request->get('no_hp');
        $mentor->umur = $request->get('umur');
        $mentor->status = $request->get('status');
        $mentor->hobby = $request->get('hobby');
        $mentor->motivasi = $request->get('motivasi');
        if($request->hasFile('profil')){
            $request->file('profil')->move('img/profil',$request->file('profil')->getClientOriginalName());
          $mentor->profil = $request->file('profil')->getClientOriginalName();
        }

        $mentor->save();
        return redirect('mentor')->with('status', 'Profil berhasil diubah!');
    }
}