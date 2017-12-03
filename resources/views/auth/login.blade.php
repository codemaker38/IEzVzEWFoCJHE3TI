@extends('site.layouts.default')

@section('title', 'Home')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="p-4 bg-white border-rounded border-shadow">
                <h4 class="pt-2 pb-3 text-center">Login</h4>
                <form class="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                        @if ($errors->has('email'))
                            <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                        @if ($errors->has('password'))
                            <small class="form-text text-danger">{{ $errors->first('password') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                        <a class="d-block" href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection