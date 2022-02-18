<?php
include_once 'config.php';

function seConnecter()
{
    include_once './models/SimpleOrm.php';
    $conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);

    if ($conn->connect_error)
        die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

    SimpleOrm::useConnection($conn, DATABASE_NAME);
}
