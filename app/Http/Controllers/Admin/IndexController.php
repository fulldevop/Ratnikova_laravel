<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
//        return view('admin.admin_index', ['name' => 'Admin']);
        return view('admin.index')->with('name', 'User');
    }

    public function addNews(Request $request)
    {
        return view('admin.add_news', ['categories' => News::$categories]);
    }

    public function addNews2()
    {
        return view('admin.add_news_2', ['categories' => News::$categories]);
    }
}
