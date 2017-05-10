<?php

class AccountController
{
    public function actionEdit() {
        $userID = User::checkLogged();

        $user = User::getUserByID($userID);

        $name = $user['name'];
        $password = '';//$user['password'];

        $result = false;

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)) {
                $errors[] = 'Имя не короче 2-х символов.';
            }

            if(!User::checkPass($password)) {
                $errors[] = 'Пароль не короче 6-ти символов.';
            }

            if($errors == false) {
                $result = User::edit($userID, $name, $password);
            }
        }

        require_once(ROOT . '/views/account/edit.php');

        return true;
    }

    public function actionIndex() {

        $userID = User::checkLogged();

        $user = User::getUserByID($userID);

        require_once(ROOT . '/views/account/index.php');

        return true;
    }
}