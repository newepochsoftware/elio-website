@extends('layouts.auth')

@section('content')
<div class="card shadow-none">
  <div class="card-block">

      <div class="account-box">

          <div class="card-box shadow-none p-4 mt-2">
              <h2 class="text-uppercase text-center pb-3">
                  <a href="/" class="text-success">
                      <span><img src="https://storage.googleapis.com/wynn-bucket/elio-footer-logo.png" alt="" height="26"></span>
                  </a>
              </h2>

              <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group row">
                      <div class="col-12">
                          <label for="emailaddress">Email address</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-12">
                          @if (Route::has('password.request'))
                          <a href="{{ route('password.request') }}" class="text-muted float-right">
                            <small>Forgot your password?</small>
                          </a>
                          @endif
                          <label for="password">Password</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-12">

                          <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                          </div>

                      </div>
                  </div>

                  <div class="form-group row text-center">
                      <div class="col-12">
                          <button class="btn btn-block btn-primary waves-effect waves-light" type="submit">{{ __('Login') }}</button>
                      </div>
                  </div>

              </form>

              <!-- <div class="row mt-4">
                  <div class="col-sm-12 text-center">
                      <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-dark ml-1"><b>Sign Up</b></a></p>
                  </div>
              </div> -->

          </div>
      </div>

  </div>
</div>
@endsection
