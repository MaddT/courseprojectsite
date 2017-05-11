<?php

class AdminProjectController extends AdminBase
{
    public function actionIndex () {
        self::checkAdmin();

        $projectList = Project::getProjectsList();

        require_once(ROOT . '/views/admin_project/index.php');
        return true;
    }

    public function actionDelete($id) {
        self::checkAdmin();

        if(isset($_POST['submit'])) {
            Project::deleteProjectById($id);
            header('Location: /admin/project/');
        }

        require_once(ROOT . '/views/admin_project/delete.php');
        return true;
    }

    //todo
    public function actionCreate() {
        self::checkAdmin();

        $categoriesList = Category::getCategoriesList();
        $countryList = Database::getCountries();
        $userList = User::getUsers();

        if(isset($_POST['submit'])) {
            $options['title'] = $_POST['title'];
            $options['description'] = $_POST['description'];
            $options['category_id'] = $_POST['category_id'];
            $options['financialpurpose'] = $_POST['financialpurpose'];
            $options['details'] = $_POST['details'];
            $options['userid'] = $_POST['userid'];
            $options['country'] = $_POST['country'];
            $options['finaldate'] = $_POST['finaldate'];

            $errors = false;

            if(!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поля';
            }

            if($errors == false) {
                $id = Project::createProject($options);

                if($id) {
                    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                        move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/projects/{$id}.jpg");
                    }
                }

                header('Location: /admin/project/');
            }
        }

        require_once(ROOT . '/views/admin_project/create.php');
        return true;
    }

    public function actionUpdate($id) {
        self::checkAdmin();

        $categoriesList = Category::getCategoriesList();
        $countryList = Database::getCountries();
        $userList = User::getUsers();

        $project = Project::getProjectByID($id);

        if(isset($_POST['submit'])) {
            $options['title'] = $_POST['title'];
            $options['description'] = $_POST['description'];
            $options['category_id'] = $_POST['category_id'];
            $options['financialpurpose'] = $_POST['financialpurpose'];
            $options['details'] = $_POST['details'];
            $options['userid'] = $_POST['userid'];
            $options['country'] = $_POST['country'];
            $options['finaldate'] = $_POST['finaldate'];

            if(Project::updateProjectById($id, $options)){
                if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/projects/{$id}.jpg");
                }
            }

            header('Location: /admin/project/');
        }

        require_once(ROOT . '/views/admin_project/update.php');
        return true;
    }
}