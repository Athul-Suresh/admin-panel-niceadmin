@extends('admin.layouts.app')

@section('content')
    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
        <p class="text-center small">Enter your username & password to login</p>
    </div>

    <form class="row g-3 needs-validation" novalidate action="{{route('login')}}" method="POST">
        @csrf
        <div class="col-12">
            <label for="email" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @if (Route::has('password.request'))
                <p class="small mb-0"><a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a></p>
            @endif
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="rememberMe">Remember me</label>
                @error('remember')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">
                {{ __('Login') }}
            </button>
        </div>
        <div class="col-12">
            @if (Route::has('register'))
                <p class="small mb-0">Don't have account? <a href="{{ route('register') }}">Create an account</a></p>
            @endif

        </div>
    </form>
@endsection
