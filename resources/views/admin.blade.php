@extends('layouts.home_admin')

@section('content')
<!-- Start Class Card -->
<div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Dashboard</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Student</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $userCount }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Mentor</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $mentorCount }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-warning">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Materi</h4>
                                    </div>
                                    <div class="card-body">
                                         {{ $materiCount }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-success">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Kelas</h4>
                                    </div>
                                    <div class="card-body">
                                        1
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Tambah Materi?</h2>
                                <hr>
                                <p class="card-text">After I ran into Helen at a restaurant, I realized she was just office pretty drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this request? who's responsible for the ask for this request? but moving the goalposts gain traction.</p>
                                <a href="" class="btn btn-success">Tambah Materi ⭢</a>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="hero text-white hero-bg-image" data-background="{{ asset('stisla-assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash1.png') }}">
                            <div class=" hero-inner">
                                <h1>Selamat Datang, Admin!</h1>
                                <p class="lead">After I ran into Helen at a restaurant, I realized she was just office pretty drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this request? but moving the goalposts gain traction.</p>
                                <div class="mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


    @endsection
