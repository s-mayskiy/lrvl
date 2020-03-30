<?php

namespace App\Http\Controllers\News;

use App\News;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        return view('News')->with("News", News::getNews());
    }

    public function getSingleNews($id) {
        return view('SingleNews')->with("SingleNews", News::getSingleNews($id));
    }

}
