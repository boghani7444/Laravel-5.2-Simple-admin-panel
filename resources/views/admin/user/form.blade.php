<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name">Name</label>
    {!!  Form::text('name', null, ['class'=>'form-control','placeholder'=>'Enter Name']) !!}
    <span class="help-block"> <strong>{{ $errors->first('name') }}</strong></span>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email">Email address</label>
    {!!  Form::text('email', null, ['class'=>'form-control','placeholder'=>'Enter Email']) !!}
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
@endif
</div>