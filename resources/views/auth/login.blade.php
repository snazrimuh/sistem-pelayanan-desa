@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h5 class="card-title text-center">{{ __('Login Admin') }}</h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" name="email"
                                class=" mt-2 mb-3 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required
                                autofocus>
                            @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password"
                                class="mt-2 mb-3 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                required>
                            @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn mt-2 mb-3 w-100" style="background-color:#3498DB; color:white">
                            <i class="bi bi-box-arrow-in-right"></i>
                            {{ __('Login') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection