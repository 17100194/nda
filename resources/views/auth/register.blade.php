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
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-check-circle"></i> <?php echo session()->pull('message') ?>
                            </div>
                        @endif
                        <h2>Create your account</h2>
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>Full Name</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Password</label>
                                <input id="password" type="password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input id="password-confirm" type="password" name="password_confirmation" required>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="flat-button btn-block">
                                    Register
                                </button>
                            </div>

                            <div class="form-group text-center">
                                <p>Already have an account? <a href="{{url('login')}}">Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
