<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>글 목록 페이지</h1>
    <button>
    <a href="create.php">글쓰기</a>
    </button>
    <br>
    <br>
    <?php
    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        while( $row = mysqli_fetch_assoc($result) ) {
            $id = $row["id"];
            $title = $row["title"];
    

            echo $id."."."<a href='detail.php?detailid=$id'>$title</a><br>";
                
        }
    }
    ?>

   

    
</body>
</html>