<?php

class ProjectController
{
    public static function actionView($projectid) {
        $categories = array();
        $categories = Category::getCategoriesList();

        $project = Project::getProjectByID($projectid);

        require_once(ROOT . '/views/project/view.php');

        return true;
    }
}