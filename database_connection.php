<?php
    DEFINE ('DB_HOST','localhost');
    DEFINE ('DB_USER','ivke');
    DEFINE ('DB_PASSWORD','12345');
    DEFINE ('DB_NAME', 'testdb');

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($db->connect_errno)
        die ("Couldn't connect to the database: ".$db->connect_error);
?>
