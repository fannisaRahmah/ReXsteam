@extends('layouts.main')

@section('container')
<div class="form-signin mt-0 ">
    <form>
        <h1 class="h3 mb-3 fw-bolder ">Login Page</h1>

        <div class="mb-3">
            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" class="form-control" id="floatingUsername">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control" id="floatingPassword">
        </div>
    
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg submit-btn" type="submit">Sign in</button>
        <div class="form-group row mb-0">
            <div class=" col-md-8 offset-md-4">
                {{-- @if (Route::has('register'))
                    <a class="btn btn-link dark-blue-text" href="{{ route('register') }}">
                        {{ __('Dont have an account?') }}
                    </a>
                @endif --}}
                <a class="btn btn-link dark-blue-text fw-bold text-decoration-none">
                    Dont have an account?
                </a>
            </div>
        </div>
    </form>
</div>
@endsection