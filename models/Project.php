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

    public static function getProjectsListByCategory($categoryID = false, $page = 1) {
        if($categoryID) {
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::GetConection();
            $projects = array();

            $result = $db->query('SELECT id, title, description, financialpurpose FROM projects ' .
                ' WHERE categoryid=' . $categoryID .
                ' ORDER BY id DESC ' .
                'LIMIT ' . self::SHOW_BY_DEFAULT .
                ' OFFSET ' . $offset);

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

    public static function getProjectByID($id) {
        $id = intval($id);

        if ($id) {
            $db = Db::GetConection();

            $result = $db->query('SELECT * FROM projects WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public static function getProjectsList() {
        $db = Db::GetConection();

        $result = $db->query('SELECT * FROM projects ORDER BY id ASC');
        $projectList = array();
        $i = 0;
        while($row = $result->fetch()) {
            $projectList[$i]['id'] = $row['id'];
            $projectList[$i]['title'] = $row['title'];
            $projectList[$i]['description'] = $row['description'];
            $projectList[$i]['finaldate'] = $row['finaldate'];
            $i++;
        }
        return $projectList;
    }

    public static function deleteProjectById($id) {
        $db = Db::GetConection();

        $sql = 'DELETE FROM projects WHERE id=:id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id);
        return $result->execute();
    }

    public static function createProject($options) {
        $db = Db::GetConection();

        $sql = 'INSERT INTO projects ' .
            '(title, userid, description, categoryid, financialpurpose, financialcurrent, startdate, finaldate) ' .
            'VALUES ' .
            '(:title, 1, :desription, :categoryid, :financialpurpose, 0, CURDATE(), :date)';

        $date = '2019-02-02';
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title']);
        $result->bindParam(':desription', $options['description']);
        $result->bindParam(':categoryid', $options['category_id']);
        $result->bindParam(':financialpurpose', $options['financialpurpose']);
        $result->bindParam(':date', $date);

        if($result->execute()) {
            return $db->lastInsertId();
        }

        return 0;
    }

    public static function updateProjectById($id, $options) {
        $db = Db::GetConection();

        $sql = 'UPDATE projects SET
            title=:title,
            description=:description,
            categoryid=:categoryid,
            financialpurpose=:financialpurpose
            WHERE id=:id';

        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title']);
        $result->bindParam(':description', $options['description']);
        $result->bindParam(':categoryid', $options['category_id']);
        $result->bindParam(':financialpurpose', $options['financialpurpose'], PDO::PARAM_INT);
        $result->bindParam(':id', $id);


        return $result->execute();
    }

    public static function getImage($id) {
        $noImage = 'noimage.jpg';

        $path = '/upload/images/projects/';

        $pathToImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToImage)) {
            return $pathToImage;
        }

        return $path . $noImage;
    }
}