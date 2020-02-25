<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    public static function addIntoDb($request)
    {
        $title = (isset($request['title']) ?: 'empty');
        $description = (isset($request['text']) ?: 'empty');
        $category = $request['category'];
        $isPrivate = (isset($request['isPrivate'])) ?: 0;
        $image = 'img/default.jpg';

        DB::insert("insert into news (title, description, category_id, isPrivate, image) values ('{$title}', '{$description}', {$category}, {$isPrivate}, '{$image}')");
    }
}
