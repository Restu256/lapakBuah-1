@extends('layouts.auth')

@section('content')
<div class="page-content page-auth">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center justify-content-center row-login">
            <div class="col-lg-6 text-center">
              <img
                src="/images/login-placeholder.png"
                alt=""
                class="w-50 mb-4 mb-lg-none"
              />
            </div>
            <div class="col-lg-5">
              <h2 class="text-center">
                Belanja kebutuhan utama,<br />
                lebih mudah
              </h2>
              <form method="POST" action="{{ route('login') }}" class="mt-3 justify-content-center">
                @csrf
                <div class="form-group col-md-12">
                  <label for="">Email Address</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group col-md-12">
                  <label for="">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group col-md-12">
                  <button
                    type="submit"
                    class="btn btn-success btn-block mt-4"
                  >
                    Sign In to My Account
                  </button>
                </div>
                <div class="form-group col-md-12">
                  <a
                    href="{{ route('register') }}"
                    class="btn btn-signup btn-block mt-2"
                  >
                    Sign Up
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
