<?php

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

    public static function actionCategory($categoryID, $page = 1) {
        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProjects = array();
        $categoryProjects = Project::getProjectsListByCategory($categoryID, $page);

        $total = Category::getTotalProjectsInCategory($categoryID);

        $pagination = new Pagination($total, $page, Project::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/category/category.php');

        return true;
    }
}