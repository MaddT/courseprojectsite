<?php

class Project
{
    const SHOW_BY_DEFAULT = 10;

    public static function getLatestProjects($count = self::SHOW_BY_DEFAULT) {
        $count = intval($count);

        $db = Db::GetConection();

        $projectsList = array();

        $result = $db->query('SELECT id, title, description, financialpurpose FROM projects ' .
            'ORDER BY id DESC ' .
            'LIMIT ' . $count);

        $i = 0;
        while($row = $result->fetch()) {
            $projectsList[$i]['id'] = $row['id'];
            $projectsList[$i]['title'] = $row['title'];
            $projectsList[$i]['description'] = $row['description'];
            $projectsList[$i]['financialpurpose'] = $row['financialpurpose'];
            $i++;
        }

        return $projectsList;
    }

    public static function getProjectsListByCategory($categoryID = false) {
        if($categoryID) {
            $db = Db::GetConection();
            $projects = array();

            $result = $db->query('SELECT id, title, description, financialpurpose FROM projects ' .
                ' WHERE categoryid=' . $categoryID .
                ' ORDER BY id DESC ' .
                'LIMIT ' . self::SHOW_BY_DEFAULT);

            $i = 0;
            while($row = $result->fetch()) {
                $projects[$i]['id'] = $row['id'];
                $projects[$i]['title'] = $row['title'];
                $projects[$i]['description'] = $row['description'];
                $projects[$i]['financialpurpose'] = $row['financialpurpose'];
                $i++;
            }

            return $projects;
        }
    }
}