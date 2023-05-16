@extends('layouts.login')
@section('content')
<h6 class="fw-light">{{ __('Reset Password') }}</h6>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                       <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>             
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="mt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>                 
                        </div>
                    </form>
@endsection