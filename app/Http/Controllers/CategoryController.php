<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function dogs(Category $category)
    {
        return view('category.dogs', compact('category'));
    }
}
