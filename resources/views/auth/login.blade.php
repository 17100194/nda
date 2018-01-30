@extends('layouts.app')

@section('content')
    <section class="flat-row v8 bg-gray3">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="padding-contact">
                        @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
                                <i class="fa fa-check-circle"></i> {{ session()->pull('message') }}
                            </div>
                        @endif
                        <h2>Login to your account</h2>
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Password</label>
                                <input id="password" type="password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember" class="float-left" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" class="float-left">Remember Me</label>
                                <a class="float-right" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="flat-button btn-block">Login</button>
                            </div>

                            <div class="form-group text-center">
                                <p>Don't have an account? <a href="{{url('register')}}">Join Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection
