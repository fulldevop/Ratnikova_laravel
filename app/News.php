<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public static $news = [
        1 => [
            'id' => 1,
            'title' => 'Спортивная новость 1',
            'description' => 'Подробное описание спортивной новости 1',
            'category_id' => 1,
            'isPrivate' => false,
        ],
        2 => [
            'id' => 2,
            'title' => 'Спортивная новость 2',
            'description' => 'Подробное описание спортивной новости 2',
            'category_id' => 1,
            'isPrivate' => false,
        ],
        3 => [
            'id' => 3,
            'title' => 'Политическая новость 3',
            'description' => 'Подробное описание политической новости 3',
            'category_id' => 2,
            'isPrivate' => false,
        ],
        4 => [
            'id' => 4,
            'title' => 'Политическая новость 4',
            'description' => 'Подробное описание политической новости 4',
            'category_id' => 2,
            'isPrivate' => false,
        ],
        5 => [
            'id' => 5,
            'title' => 'Бьюти новость 5',
            'description' => 'Подробное описание бьюти новости 5',
            'category_id' => 3,
            'isPrivate' => false,
        ],
        6 => [
            'id' => 6,
            'title' => 'Бьюти новость 6',
            'description' => 'Подробное описание бьюти новости 6',
            'category_id' => 3,
            'isPrivate' => false,
        ],
        7 => [
            'id' => 7,
            'title' => 'Приватная новость 7',
            'description' => 'Подробное описание приватной новости 7',
            'category_id' => 4,
            'isPrivate' => true,
        ],
        8 => [
            'id' => 8,
            'title' => 'Приватная новость 8',
            'description' => 'Подробное описание приватной новости 8',
            'category_id' => 4,
            'isPrivate' => true,
        ],
    ];

    public static $categories = [
        1 => [
            'id' => 1,
            'category' => 'sport',
            'name' => 'Спорт'
        ],
        2 => [
            'id' => 2,
            'category' => 'politic',
            'name' => 'Политика'
        ],
        3 => [
            'id' => 3,
            'category' => 'beauty',
            'name' => 'Красота'
        ],
        4 => [
            'id' => 4,
            'category' => 'private',
            'name' => 'Приватные новости'
        ],
    ];
}
