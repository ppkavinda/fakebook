@extends('layouts.master')

@section('content')
    <div class="container">
      <h2>{{$user->nameOrEmail()}}'s details</h2>
      <div class="col-8">
      <hr>
        <div>

          <div class="form-group row">
            <span for="username" class="col-3 ">Userame</span>
            <div class="col-9">
              <div class="form-control" id="username">
                {{( $user->username) ?: 'N/A'}}
              </div>
            </div>
          </div>
          <div class="form-group row">
            <span for="fname" class="col-3 ">First Name</span>
            <div class="col-9">
              <div class="form-control" id="fname">
              	{{( $user->fname) ?: 'N/A'}}
              </div>
            </div>
          </div>
          <div class="form-group row">
            <span for="lname" class="col-3 ">Last Name</span>
            <div class="col-9">
              <div class="form-control" id="lname">
              	{{( $user->lname) ?: 'N/A'}}
              </div>
            </div>
          </div>
          <div class="form-group row">
            <span for="dob" class="col-3 ">DoB</span>
            <div class="col-9">
              <div class="form-control" id="dob">
				{{( $user->dob ?: 'N/A')}}
              </div>
            </div>
          </div>
          <div class="form-group row">
            <span for="location" class="col-3 ">Location</span>
            <div class="col-9">
              <div class="form-control" id="location">
              		{{( $user->location) ?: 'N/A'}}
              </div>
            </div>
          </div>
          <div class="form-group row">
            <span for="gender" class="col-3 ">Gender</span>
            <div class="col-9">
              <div class="form-control" id="gender">
              		{{ ($user->gender == "M") ? 'Male' : 'Female'}}
              </div>
            </div>
          </div>
          <div class="form-group row">
            <span for="email" class="col-3 ">Joined date</span>
            <div class="col-9">
              <div class="form-control" id="email">
              {{ $user->created_at->formatLocalized('%A %d %B %Y')}}
              </div>
            </div>
          </div>
      </div>
    </div>
    </div>
    <h4>{{$user->username}}'s posts</h4>
    @include('posts.post', ['posts' => $user->posts()->get()])
@stop

@section('sidebar.friends')
	@include('profile.sidebar.friends')
@stop

