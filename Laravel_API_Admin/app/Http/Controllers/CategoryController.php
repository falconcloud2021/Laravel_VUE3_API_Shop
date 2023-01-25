<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesList = Category::all();
        return view('category.list-add-cat', compact('categoriesList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $createCategory = Category::all();
        return view('category.list-add-cat', compact('createCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Category::insert([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $notification = [
            'message' => 'Category Added successfuly!',
            'alert-type' => 'success'
        ];

        return redirect()->route('categories.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit-form-cat', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);

        return view('category.list-add', compact($category));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryDelete = Category::findOrFail($id);
        $image = $categoryDelete->category_image;
        unlink($image);

        Category::findOrFail($id)->delete();

        $notification = [
            'message' => 'Category Deleted!',
            'alert-type' => 'danger'
        ];

        return redirect()->route('category.index');
        // return redirect()->back()->with($notification);
    }
}
