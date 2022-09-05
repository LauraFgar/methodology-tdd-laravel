<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function store(Request $request, TagRequest $tagRequest)
    {   
        Tag::create($request->all());
        
        return redirect('/');
    }

    public function destroy(Tag $tag)
    {   
        $tag->delete();
        return redirect('/');
    }
}
