<?php

class Category
{
    public static function getCategoriesList() {
        $db = DB::GetConection();

        $categoryList = array();

        $result = $db->query('SELECT id, title FROM categories');

        $i = 0;
        while($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['title'] = $row['title'];
            $i++;
        }

        return $categoryList;
    }
}