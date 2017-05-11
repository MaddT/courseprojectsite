<?php

class AccountController
{
    public function actionEdit() {
        $userID = User::checkLogged();

        $user = User::getUserByID($userID);

        $name = $user['name'];
        $password = '';

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

        if(isset($_POST['submitpass'])) {
            $oldpassword = $_POST['oldpassword'];
            $newpassword = $_POST['password'];
            $passwordconf = $_POST['passwordconf'];

            $errors = false;

            if(!User::checkPass($oldpassword) || !User::checkPass($newpassword) || !User::checkPass($passwordconf)) {
                $errors[] = 'Пароль не короче 6-ти символов.';
            }

            $userpass = $user['password'];
            $oldpassword = 'course' . $oldpassword;
            $oldpassword = md5($oldpassword);
            if ($userpass != $oldpassword) {
                $errors[] = 'Старый пароль не верен';
            }

            if($newpassword != $passwordconf) {
                $errors[] = 'Пароль не подтвержден.';
            }

            if($errors == false) {
                $result = User::changePassword($userID, $newpassword);
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