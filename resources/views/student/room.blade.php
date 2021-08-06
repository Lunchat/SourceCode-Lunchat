@extends('layouts/home_student')

@section('title', 'Lunchat')

@section('content')

<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/materi_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

     <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                          <div class="container">
        <div class="bg-white mx-auto p-50 buat-text" data-aos="fade-down" data-aos-duration="200" style="width: 100%; border-radius:5px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1 text-center">
                    <h1 class="display-50" data-aos="fade-down" data-aos-duration="200">SHARING SESSION CLASS
                    </h1>
                    <hr width="80%">
                    <p data-aos="fade-down" class="font-weight-bold" data-aos-duration="1800">Silahkan pilih room yang
                        akan kamu akses
                        dibawah
                        ini!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {!! session()->get('message') !!}
        </div>
    @endif

        <div class="row mt-4">
            @foreach( $material as $m)
                <div class="col-md-6 mb-4" data-aos="zoom-in-down">
                    <div class="card materi w-150 border-0">
                        <div class="ribbon">Free</div>
                        <div class="card-body p-5">
                            <h3 class="card-title">{{ $m->name }}</h3>
                            <p class=" card-text">
                                {{ $m->pertemuan }}
                            </p>
                            <p class=" card-text">
                                Topik Pembelajaran : {{ $m->topik }}
                            </p>
                            <p class=" card-text">
                                Waktu : {{ $m->tanggal }}
                            </p>
                            <p class=" card-text">
                                Mulai : {{ $m->jam_mulai }} s/d {{ $m->jam_selesai }}
                            </p>
                            @php
                            $peserta = DB::table('materi_joins')
                                        ->where('materi_id', $m->id)
                                        ->count();
                            $kuota = $m->kuota - $peserta;
                            @endphp
                            <p class=" card-text">
                                Kuota : {{ $kuota }}
                            </p>

                @php 
                $exist = DB::table('materi_joins')
                        ->where('student_id', Auth()->user()->id)
                        ->where('materi_id', $m->id)
                        ->exists();
                @endphp
                @if($exist)
                <a href="/student/belajar/{{ $m->id }}" class="btn btn-warning">Detail</a>
                <!-- <a href="{{ $m->url }}" target="_blank" onclick="alert('Silahkan Masuk Kelas!')" class="btn btn-info">Masuk</a> -->
            
                @else
                    @if ($kuota != 0)
                        <form method="post" enctype="multipart/form-data" action="{{ url ('student/room/materi_join') }}">
                            {{ csrf_field() }} <!-- Tambah ini (Agar tidak eror 419 | Page Expired) -->
                            <input type="hidden" name="materi_id" value="{{ $m->id }}">
                            <input type="hidden" name="student_id" value="{{ Auth()->user()->id }}"> <!-- Gunakan ID user (karena ini untuk student id)-->
                            <input type="submit" class="btn btn-success" value="Join Kelas">
                        </form>
                    @else
                        <a onclick="Swal.fire(
  'Penuh!',
  'Maaf kuota sudah penuh!',
  'error'
)" class="btn btn-danger">Kuota Penuh</a>
                    @endif
                @endif

                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js') }}" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End Lesson Cards -->

                                </div>

                                <!--end:: Widgets/Blog-->
                            </div>
                        </div>
@endsection