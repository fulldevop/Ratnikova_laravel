<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
//        return view('admin.admin_index', ['name' => 'Admin']);
        return view('admin.index')->with('name', 'User');
    }

    public function addNews(Request $request)
    {
        if ($request->isMethod('post')) {
//            $request->flash();

            News::addIntoDb($request->all());

            return redirect()->route('admin.add_news');
        }
        $categories = DB::select("SELECT * FROM category");
        return view('admin.add_news', ['categories' => $categories]);
    }

/*    public function addNews2()
    {
        return view('admin.add_news_2', ['categories' => old::$categories]);
    }*/
}
