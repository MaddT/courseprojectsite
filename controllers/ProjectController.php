<?php

class ProjectController
{
    public static function actionView($id) {
        
        require_once(ROOT . '/views/project/view.php');

        return true;
    }
}