@extends('layout.master')
@section('body')

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Shopping
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>How can I order?</strong><br>
                You must be logged in to shop.<br>
                <br> Click the "BUY" button to make a payment.<br>
                </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Delivery
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>In how many days will my order be delivered? What are your delivery options?</strong><br>
                Your order will be shipped within 2 business days at the latest. Your order will be shipped in accordance with this date. There are 3 different delivery options for your orders: Delivery to Address, Next Day Delivery and Delivery Point for selected provinces/districts. </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Cancellation
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>How can I cancel my order?</strong><br>
                When your order arrives at your address, you can have it sent back to us by not receiving it from the cargo personnel.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Returns
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Can I return the product(s) I bought?</strong><br>
                You can return the products within the scope of the right of withdrawal, with all accessories, promotions and the original box, within 14 days of receiving your order, provided that the package is undamaged and unused. In case of using the right of withdrawal for orders with overseas delivery, the cargo shipping fee will belong to the customer.</div>
        </div>
    </div>

</div>

@endsection