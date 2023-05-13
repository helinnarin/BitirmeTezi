@extends('layout.master')
@section('body')


<!--Main layout-->
<main class="my-5">

    <!--Section: News of the day-->
    <div class="border-bottom pb-4 mb-5">
        <div class="row gx-5">
            <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay ripple m-4 shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                    <img src="images\1.jpg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>

            <div class="col-md-8 mt-4 mb-4">
                <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Yeni Kitap</span>
                <h4><strong>Tutunamayanlar</strong></h4>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                    eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                    sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                    <p class="lead">
                        <span class="me-1">
                            <del>$200</del>
                        </span>
                        <span>$100</span>
                    </p>
                    <form class="d-flex justify-content-left">
                        <!-- Default input -->
                        <button class="btn btn-primary ms-1" type="submit">
                            Sepete Ekle
                            <i class="fas fa-shopping-cart ms-1"></i>
                        </button>
                    </form>
                </p>
              
            </div>
        </div>
    </div>
</main>
    <!--Section: News of the day-->



    @endsection