<?php

namespace App\Http\Controllers;
use App\User;
use App\Mentor;
use App\Material;
use App\Grammar;
use App\Writing;
use App\Speaking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verify']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('student');
    }
    public function show(User $student)
    {
        return view('student.profil', compact('student'));
    }
    public function edit(User $student)
    {
           $student= User::all();
        return view('student.edit', compact('student'));
    }
        public function detail_student(User $student)
    {
        return view('student.detail_student', compact('student'));
    }
        public function data_student()
     {
       $student= User::all();
        return view('student.data_student', compact('student'));
    }
        public function data_mentor()
     {
       $mentor= Mentor::all();
        return view('student.data_mentor', compact('mentor'));
     }
     public function detail_mentor(Mentor $mentor)
    {
        return view('student.detail_mentor', compact('mentor'));
    }
    public function room()
     {
       $material= Material::all();
        return view('student.room', compact('material'));
     }
     public function grammar()
     {
       $grammar= Grammar::all();
        return view('student.grammar', compact('grammar'));
     }
     public function writing()
     {
       $writing= Writing::all();
        return view('student.writing', compact('writing'));
     }
     public function speaking()
     {
       $speaking= Speaking::all();
        return view('student.speaking', compact('speaking'));
     }
     public function belajar($id)
    {
        $material = Material::findOrFail($id);
        return view('student.belajar', ['material' => $material]);
    }
    public function room_grammar($id)
    {
        $grammar = Grammar::findOrFail($id);
        return view('student.room_grammar', ['grammar' => $grammar]);
    }
    public function room_speaking($id)
    {
        $speaking = Speaking::findOrFail($id);
        return view('student.room_speaking', ['speaking' => $speaking]);
    }
    public function room_writing($id)
    {
        $writing = Writing::findOrFail($id);
        return view('student.room_writing', ['writing' => $writing]);
    }
}