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
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400" style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1 ml-4">
                    <h2 class="display" style="color: black; font-family:'poppins';" data-aos="fade-down" data-aos-duration="1400">Selamat Mengajar !
                    </h4><br>
                    <h4 data-aos="fade-down" data-aos-duration="1700">Lunchat Mentor</h3>
                        <p>{{ $material->pertemuan }}</p>
                        <p>{{ $material->kuota }} - Kuota</p>
                        <p>Waktu : {{ $material->jam_mulai }} - {{ $material->jam_selesai }}</p>
                        <p>Kuota : {{ $material->kuota }} - Peserta</p>
                        <hr align="left" width="600;">
                        <p style="line-height: 3px;">Kita akan mempelajari tentang</p>
                        <p class="font-weight-bold mt--5">
                            {{ $material->topik }}

                        </p>

                        

                                  <a href='https://calendar.google.com/calendar/r/eventedit?text=<?= $material->name; ?> - {{ $material->pertemuan }} - {{ $material->topik }}&amp;dates={{ $material->tanggal }}T{{ $material->jam_mulai }}, {{ $material->tanggal }}, T{{ $material->jam_selesai }}&amp;ctz=Asia/Jakarta&amp;details={{ $material->topik }}."<br><br> URL Video :.{{ $material->url }}&amp;location=Location&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml'
                                 class='btn btn-primary' target='blank'>
                                Save the date</a> 


                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->


    
    <!-- Start Deskripsi Materi -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 w-150 mb-4">
                <div class="card materi border-0">
                    <div class="card-body p-5">
                        <h2 class="card-title">{{ $material->name }}</h2>
                        <hr style="background-color: white;">
                        <h5 class="card-text">{{ $material->pertemuan }}</h5>
                        <p class="card-text"> Topik Pertemuan : {{ $material->topik }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Deskripsi Materi -->


    <br>


    <!-- Start Disqus Comment -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card komen w-150 border-0">
                    <div class="card-body p-5" style="font-family: 'Poppins', sans-serif !important;">
                        <h1 style="color: black; font-size:22px !important;">Apa komentarmu ?</h1>
                        <br>
                        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://lunchat-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </div>
            </div>
        </div>

    </div>
                            </div>
                        </div>
                        
@endsection