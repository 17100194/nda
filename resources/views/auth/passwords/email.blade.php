@extends('layouts.app')

@section('content')
    <section class="flat-row v8 bg-gray3">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="padding-contact">
                        @if(session()->has('status'))
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
                                <i class="fa fa-check-circle"></i> {{ session()->pull('status') }}
                            </div>
                        @endif
                        <h2>Reset Password</h2>
                            <p>Please enter your email and we will send an email to reset your password.</p>
                            <br>
                        <form method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="flat-button btn-block">
                                    Send Password Reset Link
                                </button>
                            </div>

                            <div class="form-group">
                                <p class="float-left">Don't have an account? <a href="{{url('register')}}">Join Now</a></p>
                                <p class="float-right"><a href="{{url('login')}}">Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
