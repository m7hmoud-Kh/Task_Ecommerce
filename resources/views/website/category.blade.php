@extends('master')

@section('title')
    Category
@endsection


@section('hero_section')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
            <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">{{$category->name}}</h1>
            </div>
            <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
@include('includes.website.flash_session')

<section class="py-5">
    <div class="container p-0">
        <div class="row">
            <!-- SHOP LISTING-->
            <div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row">

                    @foreach ($products as $product)
                        <!-- PRODUCT-->
                        <div class="col-lg-4 col-sm-6">
                            <div class="product text-center">
                                <div class="mb-3 position-relative">
                                    <div class="badge text-white badge-"></div>
                                    <a class="d-block" href="detail.html"><img class="img-fluid w-100"
                                            src="{{ asset('assets/products/' . $product->image) }}" alt="..."></a>
                                    <div class="product-overlay">
                                        <ul class="mb-0 list-inline">

                                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark"
                                                href="{{Route('cart.add',$product->id)}}">Add to
                                                cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h6> <a class="reset-anchor" href="#">{{ $product->name }}</a></h6>
                                <p class="small text-muted">
                                    ${{ $product->price }} - {{ $product->origin }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center justify-content-lg-center">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                    aria-hidden="true">«</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                    aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
