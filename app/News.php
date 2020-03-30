<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News
{
    private static $news = [
        1 => [
            'id' => 1,
            'newsCategory' => 'sport',
            'title' => 'Новость про футбол',
            'text' => 'Футбола у нас больше нет :('
        ],
        2 => [
            'id' => 2,
            'newsCategory' => 'sport',
            'title' => 'Новость про академическую греблю',
            'text' => 'Скоро открытие сезона!'
        ],
        3 => [
            'id' => 3,
            'newsCategory' => 'sport',
            'title' => 'Новость про бокс',
            'text' => 'Рой Джонс возвращается!'
        ],

        4 => [
            'id' => 4,
            'newsCategory' => 'politics',
            'title' => 'Новость про Гондурас',
            'text' => 'В Гондурасе прходят выборы президента.'
        ],
        5 => [
            'id' => 5,
            'newsCategory' => 'politics',
            'title' => 'Новость про ООН',
            'text' => 'ООН приняла решение перенести штаб-квартиру в Гондурас.'
        ],
        6 => [
            'id' => 6,
            'newsCategory' => 'space',
            'title' => 'Новость про NASA',
            'text' => 'NASA забыла астронавта на Марсе.'
        ],
    ];

    public static function getNews() {
        return static::$news;
    }

    public static function getNewsCategories() {
        $newsCategories = [];
        foreach (static::$news as $singleNews) {

            if (!in_array($singleNews['newsCategory'], $newsCategories)) {
                $newsCategories[] = $singleNews['newsCategory'];
            }
        }
        return $newsCategories;
    }

    public static function getCategory($id) {
        $newsOfCategory = [];
        foreach (static::$news as $singleNews) {

            if ($singleNews['newsCategory'] == $id) {
                $newsOfCategory[] = $singleNews;
            }
        }
        return ['categoryId' => $id, 'news' => $newsOfCategory];
    }

    public static function getSingleNews($id) {
        return static::$news[$id];
    }
}
