@extends('admin.master_dash')

@section('title')
    Product
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/plugins/select2.min.css') }}">
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Update Product </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}" class="default-color">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a class="default-color" href="{{ route('products') }}">Product</a>
                    </li>
                    <li class="breadcrumb-item active">Update Product</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">Product</h5>
                    <form action="{{ route('products.update',$product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                                placeholder="Name" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1"
                                value="{{ $product->price }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Quantity</label>
                            <input type="number" name="quatity" class="form-control" id="exampleInputPassword1"
                                value="{{ $product->quatity }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Origin</label>
                            <input type="text" name="origin" class="form-control" id="exampleInputPassword1"
                                placeholder="Origin" value="{{ old('origin',$product->origin) }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <input type="number" name="status" class="form-control" id="exampleInputPassword1"
                                value="{{ $product->status }}">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Category</label>
                            <select class="custom-select" name="category_id">
                                <option disabled>Choose Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Supplier</label>
                            <select class="custom-select" name="supplier_id">
                                <option disabled>Choose Supplier</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" @if ($product->supplier_id == $supplier->id) selected @endif>
                                        {{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-lg-12 form-group">
                            <label class="text-small text-uppercase" for="firstName">description</label>
                            <textarea class="form-control form-control-lg" id="firstName" name="description" type="text">
                                {{$product->description}}
                            </textarea>
                        </div>

                        <div class="custom-file mb-10 mt-10 ">
                            <input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script src="{{ asset('assets/admin/js/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection
