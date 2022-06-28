<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Requests\CategoryRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        // Validazione
        $val_data = $request->validated();
        // generate slug
        $slug = Str::slug($request->name);
        $val_data['slug'] = $slug;
        // Salvataggio
        Category::create($val_data);
        // redirect from post to get
        return redirect()->back()->with('message', "Category $slug added successfully");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //dd($request->all());

        $val_data = $request->validate([
            'name' => ['required', Rule::unique('categories')->ignore($category)]
        ]);
        // generate slug
        $slug = Str::slug($request->name);
        $val_data['slug'] = $slug;

        $category->update($val_data);
        return redirect()->back()->with('message', "Category $slug updated successfully");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('message', "Category $category->name removed successfully");
    }
}
