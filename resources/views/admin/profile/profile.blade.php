@extends('admin.layouts.app')

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admin profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- /.col -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
                        <li><a href="#change_password" data-toggle="tab">Change Password</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="settings">
                            {!!   Form::model($user, ['route' => ['admin.profile.update', $user],'method' => 'PUT','class'=>"form-horizontal"]) !!}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-8">
                                        {!!  Form::text('name', null, ['class'=>'form-control','placeholder'=>'Enter Name']) !!}
                                        <span class="help-block"> <strong>{{ $errors->first('name') }}</strong></span>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-8">
                                        {!!  Form::text('email', null, ['class'=>'form-control','placeholder'=>'Enter Email']) !!}
                                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="tab-pane" id="change_password">
                            {!!   Form::model($user, ['url' => url('admin/changepassword'),'method' => 'POST','class'=>"form-horizontal"]) !!}
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="inputName" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('cpassword') ? ' has-error' : '' }}">
                                    <label for="inputEmail" class="col-sm-2 control-label">Confirm Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
                                        <span class="help-block"><strong>{{ $errors->first('cpassword') }}</strong></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success">Change Password</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <div class="col-md-2"></div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection