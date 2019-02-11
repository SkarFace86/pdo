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
} catch (PSOEcception $e) {
    echo $e->getMessage();
}

//define the query
$sql = "INSERT INTO pets(type, name, color)
    VALUES (:type, :name, :color)";

//prepare the statement
$statement = $dbh->prepare($sql);

//Bind the parameters
$type = 'kangaroo';
$name = 'Joey';
$color = 'purple';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

//execute
$statement->execute();