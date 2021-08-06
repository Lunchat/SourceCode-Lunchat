<?php

namespace App\Http\Controllers;
use App\User;
use App\Mentor;
use App\Material;
use App\Grammar;
use App\Writing;
use App\Speaking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCount = User::count();
        $mentorCount = Mentor::count();
        $materiCount = Material::count();

return view('admin', compact('userCount', 'materiCount', 'mentorCount'));
    }
    public function detail_student(User $student)
    {
        return view('admin.detail_student', compact('student'));
    }
    public function data_student()
     {
       $student= User::all();
        return view('admin.data_student', compact('student'));
    }
    public function detail_mentor(Mentor $mentor)
    {
        return view('admin.detail_mentor', compact('mentor'));
    }
    public function data_mentor()
     {
       $mentor= Mentor::all();
        return view('admin.data_mentor', compact('mentor'));
     }
      public function data_materi()
     {
       $material= Material::all();
        return view('admin.data_materi', compact('material'));
     }
     public function grammar()
     {
       $grammar= Grammar::all();
        return view('admin.grammar', compact('grammar'));
     }
     public function writing()
     {
       $writing= Writing::all();
        return view('admin.writing', compact('writing'));
     }
     public function speaking()
     {
       $speaking= Speaking::all();
        return view('admin.speaking', compact('speaking'));
     }
     public function room()
     {
       $material= Material::all();
        return view('admin.room', compact('material'));
     }
}