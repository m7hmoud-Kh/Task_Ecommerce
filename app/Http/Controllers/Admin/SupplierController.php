<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSupplierRequest;
use App\Http\Requests\Admin\UpdateSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $suppliers=Supplier::all();
       return view("admin.supplier.index", ["suppliers"=>$suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("admin.supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $request)
    {
        Supplier::create($request->all());
        return redirect()->route('supplier.index')->with([
            'message' => 'supplier Added Successfully',
            'alert' => 'success'
        ]);
    }

    public function edit($supplierId)
    {
        $supplier = Supplier::find($supplierId);
        return view("admin.supplier.edit",
        ["supplier"=>$supplier]);
    }

    public function update(UpdateSupplierRequest $request, $supplierId)
    {
        $supplier = Supplier::find($supplierId);
        if ($supplier) {
            $supplier->update($request->all());
        }
        return redirect()->route('supplier.index')->with([
            'message' => 'supplier Updated Successfully',
            'alert' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index')->with([
            'message' => 'supplier deleted Successfully',
            'alert' => 'danger'
        ]);
    }
}
