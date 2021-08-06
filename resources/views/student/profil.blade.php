@extends('layouts/home_student')

@section('title', 'Lunchat')

@section('content')
<!-- Start Class Card -->
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                                           <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
                <img src="{{ Auth::user()->getProfil() }}" class="card-img" width="150px" height="250px" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <ul class="list-group list-group-flush">
    <li class="list-group-item">Nama : {{ Auth::user()->name }}</li>
    <li class="list-group-item">Email : {{ Auth::user()->email }}</li>
     <li class="list-group-item">No. Hp : {{ Auth::user()->no_hp }}</li>
    <br>
<a href="{{ url('student/edit') }}" class="btn btn-success btn-sm">Ubah</a>
      </div>
    </div>
  </div>
</div>
            </div>
                        </div>
                    </div>
    @endsection