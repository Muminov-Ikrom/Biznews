<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Str;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin/tags/index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.make');
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
            'name_uz'=>'required',
            'name_en'=>'required',
        ],[
           'name_uz.required'=>'Iltimos Name(Uz) maydonini to\'ldiring',
           'name_en.required'=>'Iltimos Name(Eng) maydonini to\'ldiring'
        ]);

        $tags = $request->all();

        $tags['slug'] = Str::slug($tags['name_en']);
        Tag::create($tags);
        return redirect()->route('admin.tags.index')->with('success', 'Tag created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name_uz'=>'required',
            'name_en'=>'required',
        ],[
            'name_uz.required'=>'Iltimos Name(Uz) maydonini to\'ldiring',
            'name_en.required'=>'Iltimos Name(Eng) maydonini to\'ldiring'
        ]);

        $requestData = $request->all();

        $requestData['slug'] = Str::slug($requestData['name_en']);
        $tag->update($requestData);

        return redirect()->route('admin.tags.index')->with('success', 'Tag Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('delete', 'Tag deleted successfully!');
    }
}
