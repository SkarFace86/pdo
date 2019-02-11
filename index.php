<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 2/11/2019
 * Time: 2:09 PM
 */

require_once('/home/bskargre/config.php');
//Connect to DB
try {
    //instantiate a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo 'Connected to database!';
} catch (PSOEcception $e) {
    echo $e->getMessage();
}