<?php

class User
{
    public static function register($name, $email, $password) {
        $password = 'course' . strval($password);
        $db = Db::GetConection();

        /*$sql = 'INSERT INTO user (name, email, password, regdate, confirmed) ' .
            'VALUES (:name, :email, MD5(:password), CURDATE(), 0)';*/
/*        $sql = 'INSERT INTO users (name, email, password, regdate, confirmed) ' .
            "VALUES ('" . $name . "', '" . $email . "', MD5('" . $password . "'), CURDATE(), 0)";*/
        $sql = 'INSERT INTO users (name, email, password, regdate, confirmed) ' .
            "VALUES (:name, :email" . ", MD5(:password), CURDATE(), 0)";
        $s = $db->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':password', $password);
        //$s->execute();
        //$result = $db->prepare($sql);
        /*$result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password);*/

        echo 'Hello<br>';

        return $s->execute();
    }

    public static function checkName($name) {
        if(strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkPass($pass) {
        if(strlen($pass) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkEmail($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email) {
        $db = Db::GetConection();

        $sql = 'SELECT count(*) FROM users WHERE email=:email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn()) {
            return true;
        }
        return false;
    }
}