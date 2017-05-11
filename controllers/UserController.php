<?php

class UserController
{
    public function actionLogout() {
        unset($_SESSION['user']);
        header("Location: /");
    }

    public function actionLogin() {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if(!User::checkPass($password)) {
                $errors[] = 'Пароль не короче 6-ти символов.';
            }

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт.';
            }
            else {
                User::auth($userId);

                header("Location: /user/account/");
            }
        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }

    public function actionRegister() {
        $name = '';
        $password = '';
        $email = '';
        $result = false;

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $passconf = $_POST['passwordconf'];

            $errors = false;

            if(!User::checkName($name)) {
                $errors[] = 'Имя не короче 2-х символов.';
            }

            if(!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if(!User::checkPass($password)) {
                $errors[] = 'Пароль не короче 6-ти символов.';
            }

            if(User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется.';
            }

            if ($password != $passconf) {
                $errors[] = 'Пароль не подтвержден.';
            }

            if($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }

        require_once(ROOT . '/views/user/register.php');

        return true;
    }
}