<header>
  <div class="container">
    <ul class="nav nav-pills nav-fill my-4">
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'trip') ? 'active' : '' }}" href="{{route('trip')}}">Trip</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'link') ? 'active' : '' }}" href="{{route('link')}}">Link</a>
      </li>
  
  </div>
</header>