@extends('layout.master')
@section('body')


   
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

      <div class="mt-4">
        <h5>Öne Çıkan Kitaplar</h5>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="images\8.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\1.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\7.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\9.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\10.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\1.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\8.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\7.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\9.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\10.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\8.jpg" class="img-fluid" />
          </div>
          <div class="item">
            <img src="images\1.jpg" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>


@endsection