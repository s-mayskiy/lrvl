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

    public function show($id) {
        return view('show')->with("SingleNews", News::getSingleNews4Page($id));
    }

}
