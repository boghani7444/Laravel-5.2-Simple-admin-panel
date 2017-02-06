@extends('layouts.app')

@section('container')
<section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">                
                <!-- FORM -->
                <div class="col-lg-4 pull-right">
                    <div class="form-login">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        
                            <h2 class="text-uppercase">Sign Up</h2>
                            <div class="btn-group btn-group-justified" style="padding-top: 5px;">
                                <a href="" class="btn btn-primary">Facebook</a> 
                                <a href="" class="btn btn-danger">Google</a>
                            </div>
                            
                            <div style="text-align: center;color: #FFF;padding-top: 15px;font-weight: bold;">
                                <span >OR</span>
                            </div>
                            <div class="form-datebirth{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="first-name"  placeholder="First name" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-email{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-password{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-password{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-submit-1">
                                <input type="submit" name="submit" value="Become a member" class="mc-btn btn-style-1">
                            </div>
                            <div class="link">
                                <a href="{{ url('/login') }}">
                                    <i class="icon md-arrow-right"></i>Already have account ? Log in
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
