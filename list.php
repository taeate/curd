<?php
    include("config.php");

    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        while( $row = mysqli_fetch_assoc($result) ) {
            $id = $row["id"];
            $title = $row["title"];
        
            echo "$id <a href='detail.php'>$title</a><br>";

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <br>
    <a href="create.php">글쓰기</a>
</body>
</html>