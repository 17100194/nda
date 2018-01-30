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
                        <h1>Set New Password</h1>
                        <form method="POST" action="{{ route('password.request') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email</label>
                                <input id="email" type="email" name="email" value="{{ $email or old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>New Password</label>
                                <input id="password" type="password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label>Confirm Password</label>
                                <input id="password-confirm" type="password" name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="flat-button btn-block">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
