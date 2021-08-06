@extends('layouts/home_mentor')

@section('title', 'Lunchat')

@section('content')
<!-- Start Class Card -->
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                          @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                                           <form method="POST" enctype="multipart/form-data" action="{{ route('mentors.update', Auth::guard('mentor')->user()->id) }}">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
  <div class="form-row">
       <div class="col-md-6 mb-3">
      <label for="name">Profile Photo</label>
      <input type="file" name="profil" value="{{ Auth::guard('mentor')->user()->profil  }}" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label for="name">Name</label>
        <input type="text" name="name" value="{{ Auth::guard('mentor')->user()->name  }}" class="form-control" required>
    </div>
       
    <div class="col-md-6 mb-3">
    	  <div class="form-row">
      <label for="email">E-mail</label>
        <input type="email" name="email" value="{{ Auth::guard('mentor')->user()->email  }}" class="form-control" required>
    </div>
  </div>
    <div class="col-md-6 mb-3">
      <label for="no_hp">No. WhatsApp</label>
      <input type="text" name="no_hp" value="{{ Auth::guard('mentor')->user()->no_hp  }}" class="form-control" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="status">Status</label>
      <select class="custom-select" type="text" name="status" value="{{ Auth::guard('mentor')->user()->status  }}" required>
        <option value="Mentor" >Mentor</option>
        <option value="Online Teacher" >Online Teacher</option>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label for="hobby">Motivation</label>
      <textarea name="motivasi" value="" class="form-control" required >{{ Auth::guard('mentor')->user()->motivasi  }}</textarea>
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