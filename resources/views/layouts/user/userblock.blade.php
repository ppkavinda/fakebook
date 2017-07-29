<div class="media form-group">
	
  <a href="/profile/{{ $user->id }}">
  	<img class="d-flex mr-1" src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="50px" alt="Generic placeholder image">
  </a>
  <div class="media-body">
  	@if(auth()->id() == $user->id)
		<h5>You</h5>
	@else
    <a href="/profile/{{ $user->id }}"><h5 class="mt-0 mb-0">{{ $user->nameOrEmail() }}</h5></a>
    <p>{{ $user->location ?: ''}}</p>
    @endif
  </div>
	
  <div class="media-body ml-0">
	@if(auth()->check())
	    @if(auth()->user()->isFriends($user->id))
		    
			<form action="/friends/delete/{{ $user->id }}">
		    	<button type="submit" class="btn btn-danger btn-sm">Unfriend</button>
		    </form>
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
	</div>
</div>