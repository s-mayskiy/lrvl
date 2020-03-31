<?php

namespace App\Http\Controllers\Categories;

use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class CategoriesController extends Controller
{
    public function show($categoryTxt) {
        return view('Category')->with("Category", News::getNewsByCategoryId(Categories::getCategoryIdByCategory($categoryTxt)));
    }

    public function index() {
        return view('Categories')->with("Categories", Categories::getCategories());
    }
}
