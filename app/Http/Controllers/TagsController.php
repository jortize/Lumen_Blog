<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function showAllTags()
    {

        return response()->json(Tag::all());
    }
}
