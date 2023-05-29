@if(Auth::user() == null)
<nav class="navbar  navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand mt-2 mt-lg-0" href="{{route('homepage')}}">
    <img src="/bookstore-meta.png" height="50" />
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('homepage')}}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('allBooks')}}">Books</a>
      </li>
      <li class="nav-item">
        <a class="text-reset ps-4" href="http://127.0.0.1:8000/login" role="button" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </a>
      </li>
    </ul>
  </div>

</nav>
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand mt-2 mt-lg-0" href="{{route('homepage')}}">
    <img src="images\bookstore-meta.png" height="50" />
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('homepage')}}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('allBooks')}}">Books</a>
      </li>
      @if(Auth::user()->role == 1)
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
          </button>
          <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="">Admin</a>
            <a class="dropdown-item" href="{{route('books.create')}}">Create Book</a>
            <a class="dropdown-item" href="{{route('books.index')}}">Books</a>
            <a class="dropdown-item" href="{{route('category.index')}}">Category</a>
            <a class="dropdown-item" href="{{route('category.create')}}">Create category</a>
            <a class="dropdown-item" href="{{route('orders.index')}}">Orders</a>
          </div>
        </div>
      </li>
      @endif
      <li class="nav-item ms-4 mx-5">
        <div class="btn-group">
          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"  aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('profile.edit') }}">My profile</a>
            <a class="dropdown-item" href="{{ route('myOrders') }}">Orders</a>
           
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                  {{ __('Log Out') }}
                </x-dropdown-link>
              </form>
            
          </div>
        </div>
      </li>
    </ul>
  </div>


</nav>


@endif