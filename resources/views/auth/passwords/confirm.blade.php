@extends('layouts.login')
@section('content')

                   <h6 class="fw-light">{{ __('Please confirm your password before continuing.') }}</h6>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="mt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>
						</div>
                           @if (Route::has('password.request'))
                          		<a href="{{ route('password.request') }}" class="auth-link text-black">{{ __('Forgot Your Password?') }}</a>
                           @endif
                    </form>
@endsection