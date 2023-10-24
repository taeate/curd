<?php
    include("config.php");

    // form 정보 db 저장
    if (isset($_POST["submit"])) {

        $title = $_POST["title"];

        $content = $_POST["content"];

        $sql = "INSERT INTO `crud` (title, content) VALUES ('$title', '$content')";

        $result = mysqli_query($conn, $sql);

        if ($result) {

            echo "<script>alert('데이터 저장 성공');</script>";
            echo "<script>setTimeout(function() { window.location.href = 'list.php'; }, 100);</script>";

        } else {

            echo "데이터 저장 실패: " . mysqli_error($conn);

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

    <form action="" method="POST">
        제목<input type="text" name="title" >
        <br>
        내용<input type="text" name="content" >
        <input type="submit" name="submit">
    </form>
    <br>
    <br>
    <br>
    <a href="list.php">리스트</a>
    
</body>
</html>