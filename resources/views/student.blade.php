@extends('layouts.home_student')

@section('content')
<!-- Start Class Card -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Dashboard</h1>
                    </div>
                    
                        
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">STUDENT</h2>
                                <hr>
                                <p class="card-text">Nikmati kemudahan dalam belajar bahasa Inggris dengan didampingi oleh mentor-mentor yang berpengalaman.</p>
                                <a href="{{ url('student/profil') }}" class="btn btn-warning">Info Profil ⭢</a>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="hero text-white hero-bg-image" data-background="{{ asset('stisla-assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash1.png') }}">
                            <div class=" hero-inner">
                                <h5>Welcome to Lunchat, {{ Auth::user()->name }}</h5>
                                <p class="lead">Dapatkan pembelajaran bahasa Inggris dengan suasana yang berbeda.</p>
                                <div class="mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    @endsection
