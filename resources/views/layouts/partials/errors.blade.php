@if(count($errors))
	<div class="er alert alert-danger alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
		</div>
@endif