@extends('layouts.main')

@section('title', 'Register | Student')


@section('content')
<section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(images/page-contact.png)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 offset-lg-1 col-md-8">
                    <div class="category-form category-form-3 pt-50">
                        <div class="form-title text-center">
                            <h3>STUDENT</h3>
                            <span>Register</span>
                        </div>
                        <div class="main-form">
                            <div class="card-body">

                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                        @csrf

                        <div class="singel-form">
                            <label class="label-font1" for="name">{{ __('Name') }}</label>

                            <div class="singel-form">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="singel-form">
                            <label class="label-font1" for="email">{{ __('E-Mail') }}</label>

                            <div class="singel-form">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="singel-form">
                            <label class="label-font1" for="password">{{ __('Password') }}</label>

                            <div class="singel-form">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="singel-form">
                            <label class="label-font1" for="password-confirm">{{ __('Confirm Password') }}</label>

                            <div class="singel-form">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
<br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div></div>
</section>
@endsection
