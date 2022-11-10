<?php

namespace App\Services;

use App\Models\Tag;
use Str;

class TagService{

    public function store($request){
        $request->validate([
            'name_uz'=>'required',
            'name_en'=>'required',
        ],[
            'name_uz.required'=>'Iltimos Name(Uz) maydonini to\'ldiring',
            'name_en.required'=>'Iltimos Name(Eng) maydonini to\'ldiring'
        ]);

        $tagsData = $request->all();

        $tagsData['slug'] = Str::slug($tagsData['name_en']);
        $tags=Tag::create($tagsData);

        return $tags;
    }

    public function update($request,$tag){

        $request->validate([
            'name_uz'=>'required',
            'name_en'=>'required',
        ],[
            'name_uz.required'=>'Iltimos Name(Uz) maydonini to\'ldiring',
            'name_en.required'=>'Iltimos Name(Eng) maydonini to\'ldiring'
        ]);

        $requestdata = $request->all();

        $requestdata['slug'] = Str::slug($requestdata['name_en']);
        $requestDataGet = $tag->update($requestdata);

        return $requestDataGet;
    }


}

