<nav class="navbar bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a href="http://127.0.0.1:8000" class="navbar-brand">BookStore</a>
    <form class="d-flex " role="search">
      <input class="form-control me-2 text-sm-center" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<section style="background: #2f3542; color: #fff;">
  <nav class="stroke">
    <ul>
      <li><a href="http://127.0.0.1:8000/">Homepage</a></li>
      <li><a href="http://127.0.0.1:8000/classics">Classics</a></li>
      <li><a href="http://127.0.0.1:8000/adventure">Adventure</a></li>
      <li><a href="http://127.0.0.1:8000/mystery">Mystery&Crime</a></li>
      <li><a href="http://127.0.0.1:8000/horror">Horror</a></li>
      <li><a href="http://127.0.0.1:8000/computer">Computer</a></li>
    </ul>
  </nav>
</section>
@include('parts.footer')
@include('parts.script')
@include('parts.style')