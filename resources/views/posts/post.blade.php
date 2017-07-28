@foreach($posts as $post)
<div class="card card-outline-info form-group" >
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