@extends('layouts.main')

@section('title', 'Event | Lunchat')

@section('content')
<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-contact.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== EVENTS PART START ======-->

    <section id="event-singel" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h3>Webinar "Build Your Startup and You"</h3>
                            <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                            <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                            <span><i class="fas fa-certificate"></i> Free E-Certificate</span>
                            <img src="images/event/event1.jpeg" alt="Event">
                            <p>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam</p>
                        </div> <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                        <div class="events-right">
                            <div class="events-coundwon bg_cover" data-overlay="8" style="background-image: url(images/event/singel-event/coundown.jpg)">
                                <div data-countdown="2020/03/12"></div>
                                <div class="events-coundwon-btn pt-30">
                                    <a href="https://bit.ly/Lunchatt" class="main-btn">Daftar</a>
                                </div>
                            </div> <!-- events coundwon -->
                            <div class="events-address mt-30">
                                <ul>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Start Time</h6>
                                                <span>12:00 Am</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-bell-slash"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Finish Time</h6>
                                                <span>05:00 Am</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fas fa-video"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Meet</h6>
                                                <span>Zoom Meeting</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fas fa-tags"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Price</h6>
                                                <span>Free</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <div>
                                      <center><a href="https://drive.google.com/drive/folders/14pc5K7Qf0egpCOPmhAy6cFMP27XwrYGR" class="main-btn">E-Certificate</a></center>
                                    </div>
                                </ul>
                            </div> <!-- events address -->
                        </div> <!-- events right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->

@endsection