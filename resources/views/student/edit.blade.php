@extends('layouts/home_student')

@section('title', 'Lunchat')

@section('content')
<!-- Start Class Card -->
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                                           <form method="POST" enctype="multipart/form-data" action="{{ route('users.update', Auth::user()->id) }}">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
  <div class="form-row">
       <div class="col-md-6 mb-3">
      <label for="name">Foto Profil</label>
      <input type="file" name="profil" value="{{ Auth::user()->profil }}" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label for="name">Nama Lengkap</label>
        <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" required>
    </div>
       
    <div class="col-md-6 mb-3">
    	  <div class="form-row">
      <label for="email">Email</label>
        <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" required>
    </div>
  </div>
    <div class="col-md-6 mb-3">
      <label for="no_hp">No. WhatsApp</label>
      <input type="text" name="no_hp" value="{{ Auth::user()->no_hp }}" class="form-control" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="status">Status</label>
      <select class="custom-select" type="text" name="status" value="{{ Auth::user()->status }}" required>
        <option value="Student" >Student</option>
      </select>
    </div>
        <div class="col-md-6 mb-3">
      <label for="hobby">Hobby</label>
      <input type="text" name="hobby" value="{{ Auth::user()->hobby }}" class="form-control" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="hobby">Motivasi Bergabung</label>
      <textarea name="motivasi" value="" class="form-control" required >{{ Auth::user()->motivasi }}</textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-warning">
        <i class="fa fa-btn fa-sign-in"></i>Update
    </button>
</form>

</div>
            </div>
                        </div>
                    </div>
    @endsection