<?php

class User
{
    public static function edit($userID, $name, $password) {
        $password = 'course' . strval($password);
        $db = Db::GetConection();

        $sql = 'UPDATE users ' .
                'SET name=:name, ' .
                'password = MD5(:password) ' .
                'WHERE id=:id';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name);
        $result->bindParam(':password', $password);
        $result->bindParam(':id', $userID);

        return $result->execute();
    }

    public static function getUserByID($userID) {
        if($userID) {
            $db = Db::GetConection();
            $sql = 'SELECT * FROM users WHERE id=:id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $userID);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    public static function register($name, $email, $password) {
        $password = 'course' . strval($password);
        $db = Db::GetConection();

        $sql = 'INSERT INTO users (name, email, password, regdate, confirmed) ' .
            "VALUES (:name, :email, MD5(:password), CURDATE(), 0)";
        $s = $db->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':password', $password);

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

    public static function checkUserData($email, $password) {
        $password = 'course' . strval($password);
        $db = Db::GetConection();

        $sql = 'SELECT * FROM users WHERE email = :email AND password = MD5(:password)';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);
        $result->execute();

        $user = $result->fetch();
        if($user) {
            return $user['id'];
        }

        return false;
    }

    public static function auth($userID) {
        $_SESSION['user'] = $userID;
    }

    public static function checkLogged() {
        if(isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login/");
    }

    public static function isGuest() {
        if(isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
}