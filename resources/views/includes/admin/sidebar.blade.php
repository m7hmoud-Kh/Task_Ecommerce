<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                    <div class="pull-left"><i class="ti-home"></i><span
                            class="right-nav-text">Dashboard</span></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <!-- menu item calendar-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                    <div class="pull-left"><i class="ti-calendar"></i><span
                            class="right-nav-text">Products</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{route('products')}}">Show ALL</a> </li>
                    <li> <a href="{{route('products.create')}}">Store</a> </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#category">
                    <div class="pull-left"><i class="ti-calendar"></i><span
                            class="right-nav-text">Categories</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="category" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{route('category.index')}}">Show ALL</a> </li>
                    <li> <a href="{{route('category.create')}}">Store</a> </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#supplier">
                    <div class="pull-left"><i class="ti-calendar"></i><span
                            class="right-nav-text">Suppliers</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="supplier" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{route('supplier.index')}}">Show ALL</a> </li>
                    <li> <a href="{{route('supplier.create')}}">Store</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
