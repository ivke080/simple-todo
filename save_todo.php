<?php
    require('database_connection.php');
    $todo = mysqli_real_escape_string($db, trim($_POST['todo']));
    $date = date('Y-m-d');


    $query = "INSERT INTO todo (content, post_date)
             VALUES ('$todo','$date')";
    $result = mysqli_query($db, $query);
    if (!$result) {
        echo "Coulnd't enter data - query problem";
    }
    
    mysqli_close($db);
?>
