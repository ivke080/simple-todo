<?php
    require('database_connection.php');
    $id = $_POST['id'];
    $query = "DELETE FROM todo WHERE id='$id'";
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "Couldn't remove data - query problem!";
    }
    echo $id;

    mysqli_close($db);
?>
