@extends('master')

@section('title')
    Home
@endsection


@section('content')
    <form action="{{route('search')}}" method="GET">
        @csrf
        @method('GET')
        <div class="input-group d-flex justify-conent-center mt-2 w-50"
        style="margin-left: 25%">
            <input class="form-control mr-5" type="search"
            placeholder="Search by product name , category name , supplier name" aria-label="Search" name="searchKey">
            <button class="btn btn-outline-warning" type="submit">Search</button>
        </div>
    </form>
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
                                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark"
                                                        href="#"><i class="far fa-heart"></i>
                                                    </a></li>
                                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark"
                                                        href="#">Add to
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
