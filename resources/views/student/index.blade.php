@extends('layouts/home_student')

@section('title', 'Lunchat')

@section('content')
<!-- Start Class Card -->
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-xl-12">

                                <!--begin:: Widgets/Blog-->
                                <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                    <div class="kt-portlet__body kt-portlet__body--fit">
                                        <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides">
                                            <img src="{{ asset('img/student.png') }}" class=" img-fluid" alt=""
                                                srcset="">
                                            <h4 class="kt-widget19__title -weight-bold"
                                                style="letter-spacing: -1px;">
                                                Selamat Datang, 
                                            </h4>

                                        </div>
                                    </div>
                                </div>

                                <!--end:: Widgets/Blog-->
                            </div>
                        </div>

    @endsection