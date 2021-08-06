@extends('layouts.main')

@section('title', 'Login | Student')

@section('content')
<!--====== COUNT DOWN PART START ======-->
    
    <section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(images/page-contact.png)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 offset-lg-1 col-md-8">
                    <div class="category-form category-form-3 pt-50">
                        <div class="form-title text-center">
                            <h3>STUDENT</h3>
                            <span>Login</span>
                        </div>
                        <div class="main-form">
                            <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                        @csrf
                                <div class="singel-form">
                                    <label class="label-font1" for="exampleFormControlInput1">Email</label>
                                    <input type="text" class="form-control" name="email" required autocomplete="off" id="email" placeholder="Masukan email disini ..">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="singel-form">
                                    <label class="label-font1" for="exampleFormControlInput1">Password</label>
                                    <input type="password" name="password" class="form-control" required id="password" placeholder="Masukan password disini ..">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="bottom-action clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="{{ url('password/reset') }}" class="float-right">Forgot Password?</a>
                                </div>
                                <p class="terms">Dengan login anda
                                    menyetujui
                                    <i>privasi dan persyaratan ketentuan
                                        hukum kami </i> .
                                    belum punya akun? daftar <a href="{{ route('register') }}">
                                        disini.</a>
                                </p><br>
                                <button class="main-btn">Login</button></center>
                            </form>
                        </div>
                        </div>
                    </div> <!-- category form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== COUNT DOWN PART ENDS ======-->
@endsection
