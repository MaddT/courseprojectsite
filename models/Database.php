<?php

class Database
{
    public static function getCountries () {
        $db = DB::GetConection();

        $countryList = array();

        $result = $db->query('SELECT id, country FROM countries');

        $i = 0;
        while($row = $result->fetch()) {
            $countryList[$i]['id'] = $row['id'];
            $countryList[$i]['country'] = $row['country'];
            $i++;
        }

        return $countryList;
    }
}