@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card card-login offset-md-3 col-md-5 mt-lg-5">
      <div class="card-header text-center">
        <i class="fas fa-user-lock fa-3x text-secondary"></i>
      </div>
      <div class="card-body">
        <form action="{{ route('login') }}" aria-label="{{ __('Login') }}" method="post">
        @csrf
        <div class="form-group">
          <div class="form-label-group">
            <input name="email" type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" autofocus>
            <label for="inputEmail" class="sr-only">
              {{ __('E-Mail Address') }}
            </label>
            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>
                  {{ $errors->first('email') }}
                </strong>
              </span>
            @endif
          </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="password" type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
              <label for="inputPassword" class="sr-only">
                {{ __('Password') }}
              </label>
              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>
                    {{ $errors->first('password') }}
                  </strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                {{ __('Remember Me') }}
              </label>
            </div>
          </div>
          <button class="btn btn-secondary btn-block" type="submit">
            <i class="fas fa-lock"></i>
            {{ __('Login') }}
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection
