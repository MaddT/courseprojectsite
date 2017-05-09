<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Project.php';

class CategoryController
{
    public  function actionIndex() {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProjects = array();
        $latestProjects = Project::getLatestProjects(12);

        require_once(ROOT . '/views/category/index.php');

        return true;
    }

    public static function actionCategory($categoryID) {
        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProjects = array();
        $categoryProjects = Project::getProjectsListByCategory($categoryID);

        require_once(ROOT . '/views/category/category.php');

        return true;
    }
}