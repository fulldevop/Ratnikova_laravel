<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function showCategories()
    {
        return view('news.category', ['newsCategories' => News::$categories]);
    }

    public function showList($category)
    {
        $categoryInfo = $this->categoryInfo($category);
        return view('news.list', ['newsList' => News::$news, 'categoryInfo' => $categoryInfo]);
    }

    public function showOne($category, $id)
    {
        $categoryInfo = $this->categoryInfo($category);
        $news = News::$news;
        if (array_key_exists($id, $news) && ($news[$id]['category_id'] === $categoryInfo['id']))
            return view('news.one', ['news' => News::$news[$id], 'category' => $category]);
        else
            return redirect(route('news.categories'));
    }

    public function categoryInfo($category)
    {
        foreach (News::$categories as $item) {
            if ($item['category'] === $category) {
                return ['id' => $item['id'], 'name' => $item['name'], 'category' => $item['category']];
            }
        }
        return false;
    }
}
