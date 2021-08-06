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


     <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <div class="main-content">
                <section class="section">
                    <div class="card">
                     
            
                          <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400" style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1 ml-4">
                    <h5 class="display" style="color: black; font-family:'poppins';" data-aos="fade-down" data-aos-duration="1400">Selamat Belajar, {{ Auth::user()->name }} !
                    </h5><br>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->
    
    <!-- Start Deskripsi Materi -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 w-150 mb-4">
                <div class="card material border-0">
                    <div class="card-body p-5">
                        <h2 class="card-title">{{ $speaking->name }}</h2>
                        <hr style="background-color: white;">

<style media="screen">
  .button{
    width: 100%;
    height: 50px;
  }
  .left{
    float: left;
    display: block;
  }
  .right{
    float: right;
    display: block;
  }
.button ul a{
  padding: 10px;

  color: white;
}
</style>
<div class="button">
  <ul class="right">
    <a href='https://calendar.google.com/calendar/r/eventedit?text={{ $speaking->name }} - {{ $speaking->topik }}&amp;dates=<?= date_format(date_create($speaking->tanggal), "Ymd") ?>T<?= date_format(date_create($speaking->jam_mulai), "Hi00") ?>/<?= date_format(date_create($speaking->tanggal), "Ymd") ?>T<?= date_format(date_create($speaking->jam_selesai), "Hi00") ?>&amp;ctz=Asia/Jakarta&amp;details=&amp;location=Location&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml' target='blank' class="btn btn-sm btn-info">Save the Date <i class="fa fa-calendar"></i></a>
  </ul>
</div>
                        
                        <div>
                            <ul class="list-group list-group-flush">
    <p><li class="list-group-item"><p style="color:black";><i class="fas fa-book"></i> Materi Pembelajaran : {{ $speaking->topik }}</p></li>
    <p><li class="list-group-item"><p style="color:black";><i class="far fa-calendar"></i>  Tanggal : {{ $speaking->tanggal }}</p></li>
    <p><li class="list-group-item"><p style="color:black";><i class="far fa-clock"></i>  Jam : {{ $speaking->jam_mulai }} - {{ $speaking->jam_selesai }}</p></li></p>
    <li class="list-group-item"><p style="color:black";><i class="fas fa-user"></i>  Kuota : {{ $speaking->kuota }}<p></li><p>
  </ul><div class="card-body">
    
    <a href="{{ url('speaking'.'/'.$speaking->file) }}" class="btn btn-sm btn-warning"><i class="fas fa-download"></i>  Materi</a>&nbsp;
    <a href="{{ $speaking->url }}" class="btn btn-sm btn-primary"><i class="fas fa-video"></i> Masuk</a>
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
                        
<script src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js') }}" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
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