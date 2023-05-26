@extends('layout.master')
@section('body')


<!--Main layout-->
<main class="my-5">
    <div class="container">
        <!--Section: Content-->
        <div class="text-center">
            <h4 class="mb-5"><strong>About Us</strong></h4>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BookStore Marka Vizyonu</h5>
                            <p class="card-text">
                                İnsanların zihnen özgürleşmesinin ve kişisel gelişimlerinin en büyük destekçisi olarak en çok sevilen deneyim markası olmak.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BookStore Marka Misyonu</h5>
                            <p class="card-text">
                                Sınırları kaldıran, özgürleştiren, destekleyen ve cesaretlendiren platform olmak.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Section: Content-->
    </div>
</main>
<!--Main layout-->


@endsection

