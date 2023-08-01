<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\SubCategoryStoreRequest;
use App\Http\Requests\SubCategoryUpdateRequest;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::get(['id','name','category_id','created_at']);

        return view('subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get(['id', 'name']);
        return view('subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryStoreRequest $request)
    {
        SubCategory::create([
            'category_id' => $request->category_id,
            'name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'is_active' => $request->filled('is_active')
        ]);

        Session::flash('status', 'SubCategory created successfully!');
        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $categories = Category::get(['id', 'name']);
        $subcategory = SubCategory::find($id);
        return view('subcategory.edit', compact(
            'categories',
            'subcategory'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryUpdateRequest $request, string $id)
    {
        $subcategory = SubCategory::find($id);

        $subcategory->update([
            'category_id' => $request->category_id,
            'name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'is_active' => $request->filled('is_active')
        ]);

        Session::flash('status', 'SubCategory created successfully!');
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SubCategory::find($id)->delete();
        Session::flash('status', 'SubCategory deleted successfully!');
        return redirect()->route('subcategory.index');
    }
}
