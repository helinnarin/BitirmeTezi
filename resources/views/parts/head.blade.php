@if(Auth::user() == null)
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <a class="navbar-brand mt-2 mt-lg-0" href="http://127.0.0.1:8000/">
        <img src="images\bookstore-meta.png" height="50" />
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('allBooks')}}">Books</a>
        </li>

      </ul>

    </div>

    <div>
      <a class="text-reset me-3" href="http://127.0.0.1:8000/login" role="button" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
      </a>
    </div>

    <div>
      <a class="d-flex align-items-center" href="#" role="button" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
        </svg>
      </a>
    </div>
  </div>

  </div>

</nav>
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <a class="navbar-brand mt-2 mt-lg-0" href="http://127.0.0.1:8000/">
        <img src="images\bookstore-meta.png" height="50" />
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('allBooks')}}">Books</a>
        </li>


        @if(Auth::user()->role == 1)
        <div class="dropdown">
          <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
          </button>
          <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="">Admin</a>
            <a class="dropdown-item" href="{{route('books.create')}}">Create Book</a>
            <a class="dropdown-item" href="{{route('books.index')}}">Books</a>
            <a class="dropdown-item" href="{{route('category.index')}}">category</a>
            <a class="dropdown-item" href="{{route('category.create')}}">Create category</a>
            <a class="dropdown-item" href="{{route('orders.index')}}">Orders</a>
          </div>
        </div>
        @endif
        
      </ul>

    </div>


    <div class="dropdown  m-4">
      <button class="btn btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
      </button>
      <div class="dropdown-menu m-4 " aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{ route('profile.edit') }}">My profile</a>
        <a class="dropdown-item" href="{{ route('myOrders') }}">Orders</a>
        <a class="dropdown-item" > <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-dropdown-link>
        </form>
        </a>
      </div>
      
    </div>

    <div>
      <a class="d-flex align-items-center" href="#" role="button" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
        </svg>
      </a>
    </div>
  </div>
</nav>
</nav>
@endif