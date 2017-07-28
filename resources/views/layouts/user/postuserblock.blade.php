<div class="media form-group">
  <a href="/profile/{{ $post->user->id }}">
  	<img class="d-flex mr-2" src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="45px" alt="Generic placeholder image">
  </a>
  <div class="media-body col-3" style="padding: 0">
    <a class="mt-0" href="/profile/{{ $post->user->id }}"><h6 class="mt-0 mb-0">{{ $post->user->nameOrEmail() }}</h6></a>
    <small class="mt-0">
    	{{ $post->user->created_at->diffForHumans()}}
    </small>
  </div>
</div>