<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Str;

class CategoriesControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::paginate(6);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.make');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
              'name_uz'=>'required',
              'name_en'=>'required',
            ],
            [
                'name_uz.required'=>'Iltimos Name(Uz) ni to\'ldiring',
                'name_en.required'=>'Iltimos Name (Eng) ni to\'ldiring',
            ]
        ) ;
        $categories = $request->all();
        $categories['slug'] = Str::slug($categories['name_en']);

        Category::create($categories);

        return redirect()->route('admin.categories.index')->with('success', 'Created category successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
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
        $request->validate(
            [
                'name_uz'=>'required',
                'name_en'=>'required',
            ],
            [
                'name_uz.required'=>'Iltimos Name(Uz) ni to\'ldiring',
                'name_en.required'=>'Iltimos Name (Eng) ni to\'ldiring',
            ]
        ) ;
        $categories = $request->all();
        $categories['slug'] = Str::slug($categories['name_en']);

        $category->update($categories);

        return redirect()->route('admin.categories.index')->with('success', 'Created category successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('delete', 'Category deleted successfully!');
    }
}
