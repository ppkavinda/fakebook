@extends('layouts.master')

@section('content')
    <div class="container">
      <h2>Update your details</h2>
      <div class="col-8">
      <hr>
        <form action="/profile/update" method="post">

          <div class="form-group row{{ $errors->has('username') ? ' has-danger' : '' }}">
            <label for="username" class="col-3 col-form-label">Username</label>
            <div class="col-9">
              <input class="form-control" name="username" type="username" value="{{ $user->username}}" id="username" disabled>
            </div>
          </div>
          <div class="form-group row{{ $errors->has('fname') ? ' has-danger' : '' }}">
            <label for="fname" class="col-3 col-form-label">First Name</label>
            <div class="col-9">
              <input class="form-control" name="fname" type="fname" value="{{ $user->fname}}" id="fname">
            </div>
          </div>
          <div class="form-group row{{ $errors->has('lname') ? ' has-danger' : '' }}">
            <label for="lname" class="col-3 col-form-label">Last Name</label>
            <div class="col-9">
              <input class="form-control" name="lname" type="lname" value="{{ $user->lname}}" id="lname">
            </div>
          </div>
          <div class="form-group row{{ $errors->has('dob') ? ' has-danger' : '' }}">
            <label for="dob" class="col-3 col-form-label">DoB</label>
            <div class="col-9">
              <input class="form-control" placeholder="yyyy-mm-dd" name="dob" type="date" value="{{ $user->dob}}" id="dob">
            </div>
          </div>
          <div class="form-group row{{ $errors->has('location') ? ' has-danger' : '' }}">
            <label for="location" class="col-3 col-form-label">Location</label>
            <div class="col-9">
              <input class="form-control" placeholder="" name="location" type="text" value="{{ $user->location}}" id="location">
            </div>
          </div>
          <div class="form-group row{{ $errors->has('gender') ? ' has-danger' : '' }}">
            <label for="gender" class="col-3 col-form-label">Gender</label>
            <div class="col-9">
              <select name="gender" id="gender" class="form-control">
              	<option value="M" {{($user->gender == 'M') ? ' selected' : ''}}>Male</option>
              	<option value="F" {{($user->gender == 'F') ? ' selected' : ''}}>Female</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="date" class="col-3 col-form-label">Joined date</label>
            <div class="col-9">
              <input class="form-control" name="date" type="date" value="{{ $user->created_at->formatLocalized('%A %d %B %Y')}}" id="date" disabled>
            </div>
          </div>
          <div class="form-group">
              <input class="btn btn-primary" value="Update" type="submit" id="submit" name="submit">
          </div>
        </div>
        {{ csrf_field() }}
      </form>
      @include('layouts.partials.errors')
    </div>
@stop

@section('sidebar.requests')
  @include('profile.sidebar.requests')
@stop

@section('sidebar.friends')
  @include('profile.sidebar.friends')
@stop

