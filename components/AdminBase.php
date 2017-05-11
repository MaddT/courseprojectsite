<?php

abstract class AdminBase
{
    public static function checkAdmin() {
        $userID = User::checkLogged();

        $user = User::getUserByID($userID);

        if($user['id'] == 1) {
            return true;
        }

        die('Access denied');
    }
}