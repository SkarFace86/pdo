<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 2/11/2019
 * Time: 2:09 PM
 */

//Connect to DB
try {
    //instantiate a database object
    $dbh = new PDO("mysql:dbname=bskargre_grc", "bskargre", "QWQWqwqw1!");
    echo 'Connected to database!';
} catch (PSOEcception $e) {
    echo $e->getMessage();
}