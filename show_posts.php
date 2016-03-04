<?php
    require('database_connection.php');
    $query = "SELECT id, content,post_date FROM todo";
    $result = mysqli_query($db, $query);
    if (!$result) {
        echo "Coulnd't get resulsts - query problem!";
        mysqli_close($db);
        exit();
    }
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        echo '<article class="todo '.$row[0].'">
            <div class="row">
                <div class="col-xs-12 article-content">'.$row[1].'</div></div>
                <div class="row">
                    <div class="col-xs-12 text-center date">'.$row[2].'</div>
                    </div>
        </article>';
    }
    mysqli_close($db);
?>
