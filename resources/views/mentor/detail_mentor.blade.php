@extends('layouts/home_mentor')

@section('title', 'Lunchat')

@section('content')
<div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <div class="hero text-white hero-bg-image" data-background="{{ asset('assets/stisla-assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash2.png')}}">
                                <div class="col-md-4 mx-auto  bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                                    <img src="/img/profil/{{ $mentor->profil }}" class="card-img-top img-responsive" alt="...">
                                </div>
                            </div>
                            <h4 class="font-weight-bold card-title text-center" style="color: black;">Detail Mentor </h4>
                            <table style="width: 100%" class="container text-left">
                                <tbody>
                                    <tr style="border-bottom: 0.5px solid #6c757d;">
                                        <td><span class="font-weight-bold">Nama Mentor :</span></td>
                                        <td>{{$mentor->name }}</td>
                                    </tr>
                                    <tr style="border-bottom: 0.5px solid #6c757d;">
                                        <td><span class="font-weight-bold">Email :</span></td>
                                        <td>{{$mentor->email }}</td>
                                    </tr>
                                    <tr style="border-bottom: 0.5px solid #6c757d;">
                                    	<td><span class="font-weight-bold">Status :</span></td>
                                        <td>{{$mentor->status }}</td>
                                    </tr>
                                    <tr style="border-bottom: 0.5px solid #6c757d;">
                                    	<td><span class="font-weight-bold">Motivasi Bergabung :</span></td>
                                        <td>{{$mentor->motivasi }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
@endsection