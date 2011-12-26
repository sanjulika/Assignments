<?php
foreach(PDO::getAvailableDrivers() as $driver)
    {
    echo $driver.'<br />';
    }

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'username';

/*** mysql password ***/
$password = 'password';

/*** database name ***/
$dbname = 'animals';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br />';

    /*** set the PDO error mode to exception ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*** begin the transaction ***/
    $dbh->beginTransaction();

    /*** CREATE table statements ***/
    $table = "CREATE TABLE animals ( animal_id MEDIUMINT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    animal_type VARCHAR(25) NOT NULL,
    animal_name VARCHAR(25) NOT NULL
    )";
    $dbh->exec($table);
    /***  insert statements ***/
    $dbh->exec("insert into animals (animal_type, animal_name) values ('emu', 'bruce')");
    $dbh->exec("insert into animals (animal_type, animal_name) values ('funnel web', 'bruce')");
    $dbh->exec("insert into animals (animal_type, animal_name) values ('lizard', 'bruce')");
    $dbh->exec("insert into animals (animal_type, animal_name) values ('dingo', 'bruce')");
    $dbh->exec("insert into animals (animal_type, animal_name) values ('kangaroo', 'bruce')");
    $dbh->exec("insert into animals (animal_type, animal_name) values ('wallaby', 'bruce')");
    $dbh->exec("insert into animals (animal_type, animal_name) values ('wombat', 'bruce')");
    $dbh->exec("insert into animals (animal_type, animal_name) values ('koala', 'bruce')");
    $dbh->exec("insert into animals (animal_type, animal_name) values ('kiwi', 'bruce')");

    /*** commit the transaction ***/
    $dbh->commit();

    /*** echo a message to say the database was created ***/
    echo 'Data entered successfully<br />';
}
catch(PDOException $e)
    {
    /*** roll back the transaction if we fail ***/
    $dbh->rollback();

    /*** echo the sql statement and error message ***/
    echo $sql . '<br />' . $e->getMessage();
    }
?>
 
