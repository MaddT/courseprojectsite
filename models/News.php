<?php

class News
{
    public static function getNewsItemById($id) {
        $db = Db::GetConection();

        $newslist = array();

        $result = $db->query('SELECT * ' .
            'FROM news ' .
            'WHERE id=' . $id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $newsitem = $result->fetch();
        return $newsitem;
    }

    public  static  function  getNewsList() {

        $db = Db::GetConection();

        $newslist = array();

        $result = $db->query('SELECT id, title, date, short_content ' .
            'FROM news ' .
            'ORDER BY date DESC ' .
            'LIMIT 10');

        $i = 0;
        while($row = $result->fetch()) {
            $newslist[$i]['id'] = $row['id'];
            $newslist[$i]['title'] = $row['title'];
            $newslist[$i]['date'] = $row['date'];
            $newslist[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newslist;
    }
}