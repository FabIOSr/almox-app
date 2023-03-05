@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('login') }}" autocomplete="off">
    @csrf
    <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72"
        height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}"  autofocus>
        <label for="floatingInput">Email address</label>        
    </div>
    <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password"  autocomplete="off">
        <label for="floatingPassword">Password</label>
        @error('email')
            <span class=text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; {{ date('Y') }}</p>
</form>
@endsection