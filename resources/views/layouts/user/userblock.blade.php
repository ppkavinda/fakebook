<div class="media form-group">
  <a href="/profile/{{ $user->id }}">
  	<img class="d-flex mr-3" src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="50px" alt="Generic placeholder image">
  </a>
  <div class="media-body">
    <a href="/profile/{{ $user->id }}"><h5 class="mt-0">{{ $user->nameOrEmail() }}</h5></a>
    <p>{{ $user->location ?: ''}}
	@if(auth()->check())
	    @if(auth()->user()->isFriends($user->id))
		    <p>
		    	<button type="submit" class="btn btn-primary btn-sm">friends</button>
		    </p>
		@elseif(auth()->user()->isRequest($user->id))
			<form action="/friends/confirm/{{ $user->id }}">
		    	<button type="submit" class="btn btn-primary btn-sm">Confirm</button>
		    </form>
		@elseif(auth()->user()->isRequestSent($user->id))
			<form>
		    	<button class="btn btn-primary btn-sm">Request Sent</button>
		    </form>
		@elseif(auth()->user()->id != $user->id)
		    <form action="/friends/add/{{ $user->id }}">
		    	<button type="submit" class="btn btn-primary btn-sm">Add friend</button>
		    </form>

		@endif
	@endif

    </p>
  </div>
</div>