    <div class="media form-group ml-3" style="background: rgb(240, 240, 255)">
      <a href="/profile/{{ $comment->user->id }}">
        <img class="d-flex mr-2" src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="40px">
      </a>
      <div class="media-body col-2" style="padding: 0">
        <a class="mt-0" href="/profile/{{ $comment->user->id }}"><h6 class="mt-0 mb-0">{{ $comment->user->nameOrEmail() }}</h6></a>
        <small class="mt-0">
          {{ $comment->created_at->diffForHumans()}}
        </small>
      </div>
      <div class="media-body ml-0">
          <h6 class="mt-0 mb-0">{{ $comment->body }}</h6>
      </div>
    </div>