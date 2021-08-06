<?php

namespace App\Http\Controllers;
use App\Mentor;
use App\User;
use App\Material;
use App\Grammar;
use App\Writing;
use App\Speaking;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth:mentor', 'verify']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('mentor');
    }
    public function show(Mentor $mentor)
    {
        return view('mentor.profil', compact('mentor'));
    }
    public function edit(Mentor $mentor)

    {
           $mentor= Mentor::all();
        return view('mentor.edit', compact('mentor'));
    }
    public function data_mentor()
     {
       $mentor= Mentor::all();
        return view('mentor.data_mentor', compact('mentor'));
     }
     public function detail_mentor(Mentor $mentor)
    {
        return view('mentor.detail_mentor', compact('mentor'));
    }
     public function data_materi()
     {
       $material= Material::all();
        return view('mentor.data_materi', compact('material'));
     }
    public function data_Student()
    {
       $student= User::all();
        return view('mentor.data_student', compact('student'));
    }
public function detail_student(User $student)
    {
        return view('mentor.detail_student', compact('student'));
    }
    public function grammar()
     {
       $grammar= Grammar::all();
        return view('mentor.grammar', compact('grammar'));
     }
     public function writing()
     {
       $writing= Writing::all();
        return view('mentor.writing', compact('writing'));
     }
     public function speaking()
     {
       $speaking= Speaking::all();
        return view('mentor.speaking', compact('speaking'));
     }
     public function room()
     {
       $material= Material::all();
        return view('mentor.room', compact('material'));
     }
     
     public function belajar($id)
    {
        $material = Material::findOrFail($id);
        return view('mentor.belajar', ['material' => $material]);
    }
}