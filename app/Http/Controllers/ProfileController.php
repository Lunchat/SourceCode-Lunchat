<?php

namespace App\Http\Controllers;
Use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        return view('student.edit');
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->no_hp = $request->get('no_hp');
        $user->umur = $request->get('umur');
        $user->status = $request->get('status');
        $user->hobby = $request->get('hobby');
        $user->motivasi = $request->get('motivasi');
        if($request->hasFile('profil')){
            $request->file('profil')->move('img/profil',$request->file('profil')->getClientOriginalName());
          $user->profil = $request->file('profil')->getClientOriginalName();
        }

        $user->save();
        return redirect('student')->with('status', 'Profil berhasil diubah!');
    }
}