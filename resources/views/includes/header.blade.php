<!-- navbar-->
<header class="header bg-white">
    <div class="container px-0 px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <!-- Link--><a class="nav-link active" href="{{Route('home')}}">Home</a>
                    </li>

                    @foreach ($categories as $cat)
                        <li class="nav-item">
                            <a class="nav-link" href="{{Route('category',$cat->id)}}">{{$cat->name}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <a class="navbar-brand ml-auto d-flex" style="left:0%"
                href="index.html"><span class="font-weight-bold text-uppercase text-dark">Boutique</span>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>

        </nav>
    </div>
</header>
