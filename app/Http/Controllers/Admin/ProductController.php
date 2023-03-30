<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\trait\Imageable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Supplier;

class ProductController extends Controller
{
    use Imageable;
    public function index()
    {
        $products = Product::orderBy("id")->get();

        $data = [
            'products' => $products
        ];
        return view("admin.products.index", compact('data'));
    }

    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        $suppliers = Supplier::select('id', 'name')->get();
        return view("admin.products.create", [
            "categories"=>$categories,
            'suppliers' => $suppliers
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['image'] = $this->insertImage($request->name, $request->image, '/assets/products/');
        Product::create($data);
        return redirect()->route('products')->with([
            'message' => 'Product Added Successfully',
            'alert' => 'success'
        ]);
    }

    public function edit($productId)
    {
        $product = Product::find($productId);
        $categories = Category::select('id', 'name')->get();
        $suppliers = Supplier::select('id', 'name')->get();


        return view("admin.products.edit" ,
        ["product"=>$product,
        "categories"=>$categories,
        'suppliers' => $suppliers
        ]);
    }

    public function update(UpdateProductRequest $request, $productId)
    {
        $product = Product::find($productId);
        $data= $request->all();
        $data['slug'] = Str::slug($request->name);
        if ($request->file("image")) {
            Storage::disk('product')->delete($product->image);
            $data['image'] = $this->insertImage($request->name, $request->image, '/assets/products/');
        }
        $product->update($data);

        return redirect()->route('products')->with([
            'message' => 'Product Updated Successfully',
            'alert' => 'success'
        ]);
    }

    public function destory(Request $request)
    {
        $product = Product::find($request->id);
        if ($product) {
            Storage::disk('product')->delete($product->image);
            $product->delete();
        }
        return redirect()->route('products')->with([
            'message' => 'Product Deleted Successfully',
            'alert' => 'danger'
        ]);
    }
}
