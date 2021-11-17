@extends('layouts.app')

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
                <div class="box p-4" style="margin: 0 auto;">
                    <div class="box-body">
                      {{-- @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>{{ $success }}</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        @endif --}}
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success text-center">A new email verification link has been emailed
                                to you!</div> @endif <div class="text-center mb-5">
                                <h3 class="text-dark">Verify e-mail address</h3>
                                <p>You must verify your email address to access this page.</p>
                            </div>
                            <form method="POST" action="{{ route('verification.send') }}" class="text-center"> 
                                @csrf
                                <button type="submit" class="btn btn-success btn-block">Resend verification email</button>
                            </form>
                            <a href="/clear-cache" class="btn btn-signup btn-block mt-2">Clear Your Browser Cache</a>
                    </div>
                    <p class="mt-3 mb-0 text-center">
                        <small>Issues with the verification process or entered the wrong email?
                            <br>Please sign up with <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">another</a> email address.</small>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                    </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
