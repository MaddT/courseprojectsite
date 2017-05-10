<?php

class UserController
{
    public function actionRegister() {
        $name = '';
        $password = '';
        $email = '';
        $result = false;

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

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

            if($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }

        require_once(ROOT . '/views/user/register.php');

        return true;
    }
}