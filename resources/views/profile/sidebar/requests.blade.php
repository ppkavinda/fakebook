<div class="sidebar-module sidebar-module-inset">
    <h4>Friend requests</h4>
    @foreach($user->requestsReceived() as $user)
      @include('layouts.user.userblock')
    @endforeach
  </div>
  <hr>