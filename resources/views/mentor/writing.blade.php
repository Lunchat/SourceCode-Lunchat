@extends('layouts/home_mentor')

@section('title', 'Lunchat')

@section('content')

<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/materi_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->


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
                    <h1>WRITING CLASS</h1>
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
        <div class="row mt-4">

            @foreach( $writing as $w)
                <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1200">
                    <div class="card material w-150 border-0">
                         <div class="ribbon">Courses</div>
                        <div class="card-body p-5">
                            <h3 class="card-title">{{ $w->name }}</h3>
                            <p class=" card-text">
                                Topik Pembelajaran : {{ $w->topik }}
                            </p>
                            <p class=" card-text">
                                Waktu : {{ $w->tanggal }}
                            </p>
                            <p class=" card-text">
                                Mulai : {{ $w->jam_mulai }} s/d {{ $w->jam_selesai }}
                            </p>
                            <p class=" card-text">
                                Kuota : {{ $w->kuota }}
                            </p>
                            <a href="{{ $w->url }}" class="btn btn-warning">Masuk</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js') }}" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    <script src="{{asset('https://unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>
    <script>
        AOS.init();
    </script>
    <!-- End Lesson Cards -->

                                </div>

                                <!--end:: Widgets/Blog-->
                            </div>
                        </div>
@endsection