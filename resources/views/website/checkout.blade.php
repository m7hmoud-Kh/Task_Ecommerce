@extends('master')

@section('title')
    CheckOut
@endsection

@section('hero_section')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Checkout</h1>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="py-5">
        <!-- BILLING ADDRESS-->
        <h2 class="h5 text-uppercase mb-4">Billing details</h2>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{route('purchaseOrder')}}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-lg-6 form-group">
                            <label class="text-small text-uppercase" for="phone">Phone number</label>
                            <input class="form-control form-control-lg" id="phone" type="tel"
                            name="phone"
                                placeholder="e.g. +02 245354745">
                        </div>


                        <div class="col-lg-12 form-group">
                            <label class="text-small text-uppercase" for="address">Address</label>
                            <input class="form-control form-control-lg" id="address" type="text"
                            name="address"
                                placeholder="House number and street name">
                        </div>


                        <div class="col-lg-12 form-group">
                            <label class="text-small text-uppercase" for="card_number">card Number</label>
                            <input class="form-control form-control-lg" id="card_number" type="number"
                            name="card_number"
                                placeholder="card number">
                        </div>


                        <div class="col-lg-12 form-group">
                            <button class="btn btn-dark" type="submit">Place order</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
                <div class="card border-0 rounded-0 p-lg-4 bg-light">
                    <div class="card-body">
                        <h5 class="text-uppercase mb-4">Your order</h5>
                        <ul class="list-unstyled mb-0">
                            @php
                            $sub_total = 0;
                            @endphp
                            @foreach ($cartItem as $cart)
                            <li class="d-flex align-items-center justify-content-between"><strong
                                class="small font-weight-bold">{{$cart->products->name}}-({{$cart->cart_quantity}})</strong>
                                <span
                                class="text-muted small">{{$cart->cart_quantity * $cart->products->price}}</span>
                            </li>
                        <li class="border-bottom my-2"></li>
                        @php
                        $sub_total += $cart->cart_quantity * $cart->products->price;
                        @endphp

                            @endforeach

                            <li class="d-flex align-items-center justify-content-between"><strong
                                    class="text-uppercase small font-weight-bold">Total</strong><span>{{$sub_total}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
