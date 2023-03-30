@extends('admin.master_dash')

@section('title')
    Suppliers
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/plugins/jquery.dataTables.min.css') }}">
@endsection
@section('content')

    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> <a class="btn btn-primary" href="{{ route('supplier.create') }}">Add Supplier</a> </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">supplier</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                                <tr>
                                    <td> {{ $supplier->id }} </td>
                                    <td> {{ $supplier->name }} </td>

                                    <td>
                                        <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-primary "> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        <tfoot>
                            <tr>
                                <th scope="">#</th>
                                <th scope="">Name</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                        </tfoot>
                        </tbody>
                    </table>
                </div>
            @endsection
            @section('script')
                <script src="{{ asset('assets/admin/js/bootstrap-datatables/jquery.dataTables.min.js') }}"></script>
                <script>
                    $(document).ready(function() {
                        $('#datatable').DataTable();
                    });
                </script>
            @endsection