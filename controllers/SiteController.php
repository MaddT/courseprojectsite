<?php

class SiteController
{
    public  function actionIndex() {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProjects = array();
        $latestProjects = Project::getLatestProjects(6);

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    public function actionAbout() {
        require_once(ROOT . '/views/site/about.php');

        return true;
    }
}