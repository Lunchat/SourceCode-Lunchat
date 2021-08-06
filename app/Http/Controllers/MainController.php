<?php

namespace App\Http\Controllers;
use App\User;
use App\Mentor;
use App\Material;
use Illuminate\Http\Request;

class MainController extends Controller
{
     public function index(){
         return view ('index');
     }

     public function tentang()
     {
         $userCount = User::count();
        $mentorCount = Mentor::count();
        $materiCount = Material::count();
return view('tentang', compact('userCount', 'materiCount', 'mentorCount'));
    }
     public function kontak(){
     	 return view ('kontak');
     }
     public function events(){
         return view ('events');
     }
     public function events_detail(){
         return view ('events_detail');
     }
}
