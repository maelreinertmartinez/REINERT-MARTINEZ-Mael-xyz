<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Track;

class CategoryController extends Controller
{
    public function index()
    {
        return view('app.categories.index', [
            'categories' => Category::all(),
            'tracks' => Track::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('app.categories.show', [
            'category' => $category,
            'tracks' => $category->tracks()->paginate(10),
        ]);
    }
}
