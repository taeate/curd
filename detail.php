<?php 
include("config.php");

$sql = "SELECT * FROM `crud`";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        while( $row = mysqli_fetch_assoc($result) ) {
            $id = $row["id"];
            $title = $row["title"];
            $content = $row["content"];
        
            echo  $id.".".
                 "제목 :".$title.
                 "내용 :".$content. "<br><br><br>";

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
    <a href="list.php">리스트</a>
</body>
</html>