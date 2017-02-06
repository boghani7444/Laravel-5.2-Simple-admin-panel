@extends('layouts.app')
@section('container')
<section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">
                <!-- FORM -->
                <div class="col-xs-12 col-lg-4 pull-right">
                    <div class="form-login">
                        <form role="form" method="POST" action="{{ url('/login') }}">
                            
                        {{ csrf_field() }}
                        
                            <h2 class="text-uppercase">Login</h2>

                            <div class="btn-group btn-group-justified" style="padding-top: 5px;">
                                <a href="" class="btn btn-primary">Facebook</a>
                                <a href="" class="btn btn-danger">Google</a>
                            </div>

                            <div style="text-align: center;color: #FFF;padding-top: 15px;font-weight: bold;">
                                <span >OR</span>
                            </div>

                            <div class="form-email{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input placeholder="Email" type="email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-password{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input placeholder="Password" type="password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-check">
                               <input  id="check" type="checkbox" name="remember">
                                <label for="check">
                                    <i class="icon md-check-2"></i>
                                    Remember me</label>
                                <a href="{{ url('/password/reset') }}">Forget password?</a>
                            </div>
                            <div class="form-submit-1">
                                <input type="submit" value="Sign In" name="submit" class="mc-btn btn-style-1">
                            </div>
                            <div class="link">
                                <a href="{{ url('/register') }}">
                                    <i class="icon md-arrow-right"></i>Don’t have account yet ? Join Us
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END / FORM -->
                <div class="image">
                    <img src="{{ URL::asset('assets/web') }}/images/homeslider/img-thumb.png" alt="">
                </div>

            </div>
        </div>
    </section>
@endsection
