@extends('layouts.home_mentor')

@section('content')
<div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Dashboard</h1>
                    </div>
                    
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">MENTOR</h2>
                                <hr>
                                <p class="card-text">Mentor Lunchat merupakan seorang pengajar yang dapat menyampaikan materi dengan cara asyik dan menarik kepada setiap pelajar. Sehingga pelajar dapat memahami apa yang disampaikan.</p>
                                <a href="{{ url('mentor/profil') }}" class="btn btn-warning">Info Profil ⭢</a>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="hero text-white hero-bg-image" data-background="{{ asset('stisla-assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash1.png') }}">
                            <div class=" hero-inner">
                                <h5>Welcome to Lunchat, {{ Auth::guard('mentor')->user()->name  }}</h5>
                                <p class="lead">Selamat mengajar di Platform  Lunchat, ciptakan suasana belajar yang asyik dan menarik   </p>
                                <div class="mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
@endsection
