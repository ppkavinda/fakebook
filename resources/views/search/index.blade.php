@extends('layouts.master')

@section('content')
	@foreach($users as $user)
		@if($user != auth()->user())
			@include('layouts.user.userblock')
		@endif
	@endforeach
@stop