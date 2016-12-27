<?php
class Connection
{
    protected function connect()
    {
        //if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
            $dbh = new PDO('mysql:host=localhost;dbname=stmpl', 'root', 'Unununium111');
            $dbh->exec("set names utf8");
            return $dbh;
        /*}else{
            return new PDO('mysql:host=localhost;dbname=tiary.wz.cz7069', 'tiary.wz.cz7069', 'VqOziuR');
        }*/
    }
}