@extends('layouts.master')

@section('content')
    <div class="container">
      <h2>Register Here</h2>
      <div class="col-8">
      <hr>
        <form action="/register/new" method="post">
          <div class="form-group row{{ $errors->has('email') ? ' has-danger' : '' }}">
            <label for="email" class="col-3 col-form-label">Email</label>
            <div class="col-9">
              <input class="form-control" name="email" type="email" value="" id="email">
            </div>
          </div>
          <div class="form-group row{{ $errors->has('username') ? ' has-danger' : '' }}">
            <label for="username" class="col-3 col-form-label">Username</label>
            <div class="col-9">
              <input class="form-control" name="username" type="username" value="" id="username">
            </div>
          </div>
          <div class="form-group row{{ $errors->has('password') ? ' has-danger' : '' }}">
            <label for="password" class="col-3 col-form-label">Password</label>
            <div class="col-9">
              <input class="form-control" type="password" name="password" value="" id="password">
            </div>
          </div>
          <div class="form-group row{{ $errors->has('password_confirm') ? ' has-danger' : '' }}">
            <label for="password_confirm" class="col-3 col-form-label">Re-Password</label>
            <div class="col-9">
              <input class="form-control" type="password" value="" name="password_confirm" id="password_confirm">
            </div>
          </div>
          <small>* all fields required</small>
          <div class="form-group">
              <input class="btn btn-primary" value="Register" type="submit" id="submit" name="submit">
          </div>
        </div>
        {{ csrf_field() }}
      </form>
      @include('layouts.partials.errors')
    </div>
@stop