<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Project.php';

class SiteController
{
    public  function actionIndex() {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProjects = array();
        $latestProjects = Project::getLatestProjects(3);

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

}