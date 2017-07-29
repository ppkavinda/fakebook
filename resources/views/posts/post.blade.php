@foreach($posts as $post)
<div class="card card-outline-info form-group" >
  @if($post->user_id == auth()->id())
    <form action="/posts/{{$post->id}}/delete" method="POST">
      <button type="submit" title="delete" style="padding: 10px;
          margin: 0;
          position: absolute;
          background: 0 0;
          font-weight: 900;
          border: 0;
          top: 0px;
          color: #343434;
          right: 4px;
          font-size: x-large;
          cursor: pointer;">
          <span>&times;</span>
        </button>
      {{ csrf_field() }}
    </form>
  @endif

  <div class="card-block">
    <div class="blog-post">

      @include('layouts.user.postuserblock')

      <p>
        {{ $post->message }}
      </p>
      @foreach($post->comments()->get() as $comment)

        @include('posts.comment')

      @endforeach

      @include('layouts.user.commentblock')

    </div>
  </div>
</div>
  @endforeach