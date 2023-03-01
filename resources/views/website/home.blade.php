<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('website/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{asset('website/vendor/lightbox2/css/lightbox.min.css')}}">
    <!-- Range slider-->
    <link rel="stylesheet" href="{{asset('website/vendor/nouislider/nouislider.min.css')}}">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="{{asset('website/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="{{asset('website/vendor/owl.carousel2/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/vendor/owl.carousel2/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('website/css/style.default.css')}}" id="theme-stylesheet">

    <link rel="stylesheet" href="{{asset('website/vendor/fontawesome-free-6.3.0-web/css/all.css')}}">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('website/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('website/img/favicon.png')}}">
    <!-- Tweaks for older IEs-->

</head>

<body>
    <div class="page-holder">
        <!-- navbar-->
        <header class="header bg-white">
            <div class="container px-0 px-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <!-- Link--><a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <!-- Link--><a class="nav-link active" href="shop.html">Shop</a>
                            </li>
                            <li class="nav-item">
                                <!-- Link--><a class="nav-link" href="detail.html">Product detail</a>
                            </li>
                        </ul>
                    </div>
                    <a class="navbar-brand ml-auto d-flex" style="left:7%"
                        href="index.html"><span class="font-weight-bold text-uppercase text-dark">Boutique</span>
                    </a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>

                </nav>
            </div>
        </header>
        <div class="container">
            <!-- HERO SECTION-->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h2 text-uppercase mb-0">Shop</h1>
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
                                            <a class="d-block"
                                                href="detail.html"><img class="img-fluid w-100"

                                                    src="{{asset('assets/products/'.$product->image)}}"
                                                    alt="..."></a>
                                            <div class="product-overlay">
                                                <ul class="mb-0 list-inline">
                                                    <li class="list-inline-item m-0 p-0"><a
                                                            class="btn btn-sm btn-outline-dark" href="#"><i
                                                                class="far fa-heart"></i>
                                                            </a></li>
                                                    <li class="list-inline-item m-0 p-0"><a
                                                            class="btn btn-sm btn-dark" href="#">Add to
                                                            cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h6> <a class="reset-anchor" href="#">{{$product->name}}</a></h6>
                                        <p class="small text-muted">${{$product->price}}</p>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!-- PAGINATION-->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center justify-content-lg-center">
                                    <li class="page-item"><a class="page-link" href="#"
                                            aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"
                                            aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="bg-dark text-white">
            <div class="container py-4">
                <div class="row py-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Customer services</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
                            <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
                            <li><a class="footer-link" href="#">Online Stores</a></li>
                            <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Company</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#">What We Do</a></li>
                            <li><a class="footer-link" href="#">Available Services</a></li>
                            <li><a class="footer-link" href="#">Latest Posts</a></li>
                            <li><a class="footer-link" href="#">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-uppercase mb-3">Social media</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#">Twitter</a></li>
                            <li><a class="footer-link" href="#">Instagram</a></li>
                            <li><a class="footer-link" href="#">Tumblr</a></li>
                            <li><a class="footer-link" href="#">Pinterest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-top pt-4" style="border-color: #1d1d1d !important">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="small text-muted mb-0">&copy; 2020 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 text-lg-right">
                            <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor"
                                    href="https://bootstraptemple.com/p/bootstrap-ecommerce">Mahmoud Khairy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JavaScript files-->
        <script src="{{asset('website/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('website/vendor/lightbox2/js/lightbox.min.js')}}"></script>
        <script src="{{asset('website/vendor/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('website/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('website/vendor/owl.carousel2/owl.carousel.min.js')}}"></script>
        <script src="{{asset('website/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
        <script src="{{asset('website/js/front.js')}}"></script>
        <!-- Nouislider Config-->

    </div>
</body>

</html>
