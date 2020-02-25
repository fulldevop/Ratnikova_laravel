<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function showCategories()
    {
        $newsCategories = DB::select("SELECT * FROM category");
        return view('news.category', ['newsCategories' => $newsCategories]);
    }

    public function showList($categoryCode)
    {
        $category = DB::select("SELECT * FROM category WHERE category = :category", [':category' => $categoryCode])[0];
        $newsList = DB::select("SELECT * FROM news WHERE category_id = :category_id", [':category_id' => $category->id]);

        return view('news.list', ['newsList' => $newsList, 'category' => $category]);
    }

    public function showOne($categoryCode, $id)
    {
        $category = DB::select("SELECT * FROM category WHERE category = :category", [':category' => $categoryCode])[0];
        $news = DB::select("SELECT * FROM news WHERE id = :id AND category_id = :category_id", [':id' => $id, ':category_id' => $category->id])[0];
        if ($news)
            return view('news.one', ['news' => $news]);
        else
            return redirect(route('news.categories'));
    }
}
