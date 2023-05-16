@extends('layouts.login')

@section('content')
     <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
                    <form method="POST" action="{{ route('login') }}" class="pt-3">
                        @csrf

                        <div class="form-group">
                           

                           
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                           

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mt-3">
                          <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                        </div>
                        <div class="my-2 d-flex justify-content-between align-items-center">
                          <div class="form-check">
                            <label class="form-check-label text-muted">
                              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                              Keep me signed in
                            </label>
                          </div>
                          @if (Route::has('password.request'))
                          <a href="{{ route('password.request') }}" class="auth-link text-black">{{ __('Forgot Your Password?') }}</a>
                           @endif
                        </div>
                        

                        
                    </form>
                
@endsection
