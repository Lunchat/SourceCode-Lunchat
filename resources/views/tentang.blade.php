@extends('layouts/main')

@section('title', 'About us | Lunchat')

@section('content')
<!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section class="about_area p_60">
    <div class="container">
        <div class="row about_inner">
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Visi
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Menjadi sebuah platform pendidikan Bahasa Inggris yang dapat membantu memajukan masyarakat dalam menguasai Bahasa Inggris.

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Misi
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                1. Membantu masyarakat dalam mengembangkan skill dalam berbahasa Inggris.<br>
                                2. Memberikan solusi kepada masyarakat yang ingin mengikuti kursus Bahasa Inggris, tetapi tidak memiliki dana yang cukup untuk membayar kursus konvensional.<br>
                                3. Meningkatkan kepercayaan diri dalam menguasai Bahasa Inggris.<br>
                                4. Membantu masyarakat yang ingin melanjutkan pendidikan ke luar negeri.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">

                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in">
                <div class="video_area" id="video">
                    <img class="img-fluid" src="img/IMG_6171.PNG" alt="" />
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=EQ1mTy6BMxE">
                        <img src="assets/img/icon/video-icon-1.png" alt="" />
                    </a>

                </div>
            </div>
        </div>
        <div class="about_details" data-aos="zoom-in">
            <p class="justify">
                Lunchat berasal dari kata voluntary chit chat, dimana sebuah platform yang bergerak dibidang pendidikan yang memiliki tujuan untuk meningkatkan kemampuan masyarakat Indonesia dalam berbicara bahasa Inggris. melalui platform ini para peserta dapat mengikuti kelas sharing session, grammar, writing,  dan/atau speaking dimana peserta dapat memilih kelas yang sesuai dengan kebutuhannya. Platform ini menggunakan sistem pembelajaran daring.  Sistem daring ini memungkinkan peserta untuk mengakses pembelajaran dimana dan kapan saja. 
            </p>

        </div>
    </div>
</section>
    
    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->
    
    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(images/bg-2.png)">
        <div class="container">
            <div class="row">
                <div class=" col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">{{ $userCount }}</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- singel counter -->
                </div>
                <div class=" col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">{{ $mentorCount }}</span>+</span>
                        <p>Mentors & Online Teachers enrolled</p>
                    </div> <!-- singel counter -->
                </div>
<!--                 <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">11,000</span>+</span>
                        <p>People certifie</p>
                    </div> <!-- singel counter -->
             <!--    </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">39,000</span>+</span>
                        <p>Global Teachers</p>
                    </div> --> <!-- singel counter -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== COUNTER PART ENDS ======-->
   
        <div id="generic_price_table">
<div data-aos="zoom-in">  
<section>
    <center>
<video width="700" controls>
  <source src="video/lunchat.mp4" type="video/mp4">
</video>
<style>
video {
    max-width: 100%;
    height: auto;
}
</style>
</center>
<br>
   
    <!--====== TEASTIMONIAL PART START ======-->
    
    <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" style="background-image: url(images/bg-4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>Student</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/sarmila.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">I learn English at Lunchat. Fun online English learning with new methods. It's so easy and chip, exactly! You can learn english everytime and everywhere with the great mentors. It's very effective to sharpens your english skills. Come on, let's join me to learn at Luncat 😉</p>
                            <h6>Sarmila Gusnita</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/seni.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">Menurut saya mengikuti private courses di Lunchat sangat menyenangkan karena metode pembelajaran yang asik dan fun selain itu mentor & online teacher nya ramah, humble dan cara menjelaskan materinya mudah dimengerti. Belajar di Lunchat materinya mudah dipahami.</p>
                            <h6>Seni</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/lismawati.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">Menurut saya mengikuti private courses di Lunchat itu sangat menyenangkan karena metode pembelajarannya yang asik, fun dan selain itu gurunya enak banget dan materinya juga mudah dipahami bagi kita yang masih pemula. </p>
                            <h6>Lismawati</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/afifah.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">Belajar bahasa Inggris di Lunchat itu materinya mudah dipahami, dan tidak takut untuk menjawab pertanyaan meski itu salah, karena di lunchat kita diajarkan untuk berani speaking, Jgn malu2 untuk menjawab atau memberi pendapat kita karena kita akan dibimbing.</p>
                            <h6>Afifah</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/Stelah.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">I'm one of student learning at Lunchat. I really like learning English at Lunchat, because the learning method is very fun,very relax and very interesting in my opinion. after me join private courses at Lunchat, now my English skills better, thank you Lunchat.</p>
                            <h6>Stelah Andika</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/yani.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">Aku suka private courses di Lunchat ini karena miss nya yang seru-seru dan metode pembelajaran nya yg fun sehingga tidak mudah bosan dan materi yang disampaikan mudah di pahami. Dalam menjalani kursus di Lunchat saya sangat menyenangkan 😊🙏</p>
                            <h6>Tajriani Ruisan</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/lisja.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">Selama saya mengikut private kursus di Lunchat, saya merasa metode pembelajarannya sangat menyenangkan dan mentor pada friendly, mudah bergaul, asik. Mengikuti program private courses di Lunchat pemahaman saya mengenai bahasa Inggris jadi lebih baik dari sebelumnya.</p>
                            <h6>Lisjawati Atid</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/dhevina.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">Belajar bahasa Inggris di lunchat itu enjoy, fun dan gak perlu takut untuk salah karena di Lunchat bener-bener belajar bareng-bareng jadi tidak ada ketakutan untuk berbicara Bahasa Inggris. Pokoknya rame bangetlah belajar di Lunchat apalagi dengan harga yang terjangkau.</p>
                            <h6>Dhevina Ermayanti</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/dellia.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">Saya kagum terhadap kakak" yang memotivasi saya saat belajar, banyak yang bisa di pelajari terutama saat saya berbicara dan didengarkan oleh teman-teman lainnya, Terimakasih kasih banyak atas kakak" dari Lunchat yang telah membingbing saya.</p>
                            <h6>Silvi Dellia</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/windi.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p class="justify">Menurut saya belajar di Lunchat itu sangat menyenangkan karena metode pembelajarannya yang fun,dan belajar di Lunchat saya selalu senang karena mentornya bisa bersahabat dan mudah bergaul, serta selalu memberikan pembelajaran yg mudah dimengerti.</p>
                            <h6>Windi Widianingsih</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEASTIMONIAL PART ENDS ======-->

@endsection