@extends('layouts.front')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <fieldset>
        <legend>{{ __('Login') }}</legend>
        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" required placeholder="{{ __('Email') }}">
            @error('email')
                <span class="form-input-invalid">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" required placeholder="{{ __('Password') }}">
            @error('password')
                <span class="form-input-invalid">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit" role="button">
                {{ __('Submit') }}
            </button>
        </div>
    </fieldset>
</form>
@endsection
