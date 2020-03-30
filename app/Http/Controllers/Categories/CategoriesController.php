<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class CategoriesController extends Controller
{
    public function getCategory($id) {
        return view('Category')->with("Category", News::getCategory($id));
    }

    public function Categories() {
        return view('Categories')->with("Categories", News::getNewsCategories());
    }
}
