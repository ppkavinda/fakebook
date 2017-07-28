<div class="sidebar-module sidebar-module-inset">
    <h4><a href="/profile/{{ $user->id }}">{{ $user->username }}</a>'s friends</h4>
    @foreach($user->friends() as $user)
      @include('layouts.user.userblock')
    @endforeach
  </div>
  <hr>