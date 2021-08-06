@extends('layouts/home_mentor')

@section('title', 'Lunchat')

@section('content')
<!-- Start Class Card -->
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                    <!-- begin:: Subheader -->
                    <div class="section-header">
                        <h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Tambah Materi</h1>
                    </div>
                        <form action="/mentor/room" method="POST" enctype="multipart/form-data">
                            @csrf
                                          <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputname4">Nama Mentor</label>
                                            <input required type="text" readonly name="name" value="{{ Auth::guard('mentor')->user()->name  }}" class="form-control" id="inputname4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="inputEmail4">Topik</label>
                                            <input class="form-control" required name="topik"
                                            id="exampleFormControlTextarea1" placeholder="Masukan topik pembelajaran yang akan dibahas">
                                        </div>
                                        <div class="form-group">
                                            <label for="file">Materi</label>
                                            <input type="file" required name="file"
                                            id="file">
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="tanggal" class="form-control">
                                            <!-- <div class="custom-file">
                                                <input required type="file" name="video" class="custom-file-input"
                                                    id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Upload Video
                                                    Materi Disini</label>
                                            </div> -->
                                        </div>
                                    </div>

<div class="row">
    <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">jam mulai</label>
                                        <input type="time" class="form-control" required name="jam_mulai"
                                            id="exampleFormControlTextarea1">
                                    </div>
        
    </div>
    <div class="col-6">
        
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">jam selesai</label>
                                        <input type="time" class="form-control" required name="jam_selesai"
                                            id="exampleFormControlTextarea1">
                                    </div>
    </div>
</div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">URL Meet</label>
                                        <input class="form-control" required name="url"
                                            id="exampleFormControlTextarea1" placeholder="masukan link untuk conference">
                                    </div>
                                     
                                     <div class="form-group">
                                        <label for="inputState">quota</label>
                                        <select required id="inputState" name="kuota" class="form-control">
                                            <option selected>Pilih disini</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-success">Tambah materi</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>

</div>
            </div>
                        </div>
                    </div>
    @endsection