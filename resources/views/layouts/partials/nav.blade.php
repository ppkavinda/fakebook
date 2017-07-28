{{-- <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="{{ route('home') }}">Home</a>
          <a class="nav-link" href="#">Publish</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link mr-auto" href="#">About</a>
          @if(!auth()->check())
          <div class="form-inline">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </div>
          @else
            <a class="nav-link" href="{{ route('profile', [auth()->id()]) }}">{{auth()->user()->email}}</a>
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
          @endif
        </nav>

      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
    </div>
 --}}
    {{-- 2nd --}}

<nav class="navbar navbar-inverse bg-primary navbar-toggleable-md navbar-light bg-faded " style="padding:0 1rem">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{ route('home')}}">
    <img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="50" alt="">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active my-0">
          <a class="nav-link active" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item my-0">
          <a class="nav-link" href="#">Publish</a>
      </li>
      <li class="nav-item my-0 mr-sm-5">
        <a class="nav-link" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-0 my-lg-0 mr-auto ml-sm-5" method="GET" action="/search">
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
      <button class="btn btn-outline-info my-0 my-sm-0" type="submit">Search</button>
      {{ csrf_field() }}
    </form>
    <ul class="navbar-nav">
      @if(!auth()->check())
          <div class="form-inline">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </div>
      @else
            <a class="nav-link" href="{{ url('/profile') }}">{{auth()->user()->email}}</a>
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
      @endif
    </ul>
  </div>
</nav>

<div class="blog-header">
      <div class="container">
        <h1 class="blog-title">FaKebook</h1>
        <p class="lead blog-description">An ultimate social network built by viKtor.</p>
      </div>
    </div>