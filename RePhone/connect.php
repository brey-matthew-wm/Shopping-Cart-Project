<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=rephone', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}