<?php

include_once ROOT . '/models/News.php';

class NewsController
{
    public function actionIndex() {
        $newslist = array();
        $newslist = News::getNewsList();

        require_once(ROOT . '/views/news/index.php');

        return true;
    }

    public function actionView($id) {
        $newsItem = News::getNewsItemById($id);

        require_once(ROOT . '/views/news/singlenews.php');

        return true;
    }
}