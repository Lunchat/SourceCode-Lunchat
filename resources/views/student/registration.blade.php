@extends('layout/main')

@section('title', 'Lunchat')

@section('content')
<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="kontak bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Pendaftaran Lunchat</h2>
                    <div class="page_link">
                        <a href="{{ url('/') }}">Beranda</a>
                        <a href="">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="registration"></div>

    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Registration Form Area =================-->
    <div class="container mt-5 mb-5" id="registration">
        <div class="row bg-registration p-3">
            <div class="col-md-12 text-center">
                <p class="registration-title font-weight-bold display-4 mt-4" style="font-size: 50px;">
                    Pendaftaran Lunchat</p>
                <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan dibawah </p>
                <hr>
            </div>
            <div class="col-md-6 mx-auto text-center">
                <img src="{{ asset('assets/img/2650148.png') }}" class="img-fluid img-responsive" alt="" srcset="">
            </div>
            <div class="col-md-6 mx-auto my-auto mt--5">
                <form action="{{ url('user/registration_act') }}" method="post">
                    <div class="form-group">
                        <label for="nama_lengkap" class="label-font-register">Nama lengkap</label>
                        <input type="text" autocomplete="off" class="form-control effect-9" name="nama" id="nama_lengkap">

                    </div>
                    <div class="form-group">
                        <label for="email" class="label-font-register">Email</label>
                        <input type="text" class="form-control" name="email" id="email">
 
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password" class="label-font-register">Password</label>
                            <input type="password" class="form-control" name="password" id="password">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="retype_password" class="label-font-register">Retype password</label>
                            <input type="password" class="form-control" name="retype_password" id="retype_password">

                        </div>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input checkbox" type="checkbox" id="defaultCheck1" onchange="document.getElementById('btnsubmit').disabled = !this.checked;">
                        <label class=" form-check-label" for="defaultCheck1">
                            Saya setuju dan ingin melanjutkan.
                        </label>
                    </div>
                    <p class="terms">Dengan daftar anda menyetujui <i>privasi dan persyaratan ketentuan
                            hukum kami </i> .
                        baca selengkapnya <a href="#"> disini.</a></p>

                    <button type="submit" name="submit" id="btnsubmit" disabled class="btn btn-block btn-modal btn-submit">Daftar
                        Sekarang!</button>
                </form>
            </div>
        </div>
    </div>
    <!--================ End Registration Form Area =================-->

    <script>
        $('.tab1_btn').prop('disabled', !$('.tab1_chk:checked')
            .length); //initially disable/enable button based on checked length
        $('input[type=checkbox]').click(function() {
            if ($('.tab1_chk:checkbox:checked').length > 0) {
                $('.btn-submit').prop('disabled', false);
            } else {
                $('.btn-submit').prop('disabled', true);
            }
        });
    </script>
@endsection
