<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCateogryRequest;

class CateogryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories=Category::all();
       return view("admin.category.index", ["categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index')->with([
            'message' => 'Category Added Successfully',
            'alert' => 'success'
        ]);
    }

    public function edit($cateogryId)
    {
        $category = Category::find($cateogryId);
        return view("admin.category.edit",
        ["category"=>$category]);
    }

    public function update(UpdateCateogryRequest $request, $categoryId)
    {
        $category = Category::find($categoryId);
        if ($category) {
            $category->update($request->all());
        }
        return redirect()->route('category.index')->with([
            'message' => 'Category Updated Successfully',
            'alert' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with([
            'message' => 'Category deleted Successfully',
            'alert' => 'danger'
        ]);
    }
}
