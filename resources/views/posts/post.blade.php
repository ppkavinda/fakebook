@foreach($posts as $post)
<div class="card card-outline-info form-group">
  <div class="card-block">
    <div class="blog-post">
      @include('layouts.user.postuserblock')

      <p>
        {{ $post->message }}
      </p>


    <div class="media form-group ml-3">
      <a href="/profile/{{ $post->user->id }}">
        <img class="d-flex mr-2" src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="40px">
      </a>
      <div class="media-body col-3" style="padding: 0">
        <a class="mt-0" href="/profile/{{ $post->user->id }}"><h6 class="mt-0 mb-0">{{ $post->user->nameOrEmail() }}</h6></a>
        <small class="mt-0">
          {{ $post->user->created_at->diffForHumans()}}
        </small>
      </div>
      <div class="media-body col-9">
        <a class="mt-0" href="/profile/{{ $post->user->id }}"><h6 class="mt-0 mb-0">{{ $post->comments()->body }}</h6></a>
        <small class="mt-0">
          {{ $post->user->created_at->diffForHumans()}}
        </small>
      </div>
    </div>




    <div class="media form-group">
      <a href="/profile/{{ $post->user->id }}">
        <img class="d-flex mr-2" src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="40px">
      </a>
      <div class="media-body" style="padding: 0">

        
          <form action="comments/{{$post->id}}/new" method="POST">
            <div class="form-group">
              <input type="text" name="body" class="form-control mt-0 mb-0" placeholder="What do you think about this post...">
            </div>
            {{ csrf_field() }}
          </form>

        
      </div>
    </div>



    </div>
  </div>
</div>
  @endforeach