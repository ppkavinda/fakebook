  @extends('layouts.master')

@section('content')
  <form action="/posts/new" method="POST">
    <div class="form-group{{ $errors->has('message') ? ' has-danger' : '' }}">
      <textarea class="form-control" name="message" id="post" cols="30" rows="5" placeholder="What's in your mind"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Post</button>
    </div>
    {{ csrf_field() }}
  </form>

  @include('layouts.partials.errors')

  <hr>
  <p>Recent posts</p>
  @include('posts.post')  

  {!! $posts->render() !!}

@stop

@section('sidebar.friends')
  @include('profile.sidebar.friends', ['user' => auth()->user()])
@stop