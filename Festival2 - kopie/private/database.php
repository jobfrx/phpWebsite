<?php

require_once ('db_credentials.php');

function connect() {
    $connection = mysqli_connect(server, user, password, database);
    return $connection;
}

function disconnect($connection) {
    if(isset($connection)) {
        mysqli_close($connection);
    }
}

