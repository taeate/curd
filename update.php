<?php
    include("config.php");

    // form 정보 수정
    $id = $_GET["updateid"];

    if (isset($_POST["submit"])) {

        $title = $_POST["title"];

        $content = $_POST["content"];

        $sql = "UPDATE `crud` SET `title` = '$title', `content` = '$content' WHERE `id` = $id";


        $result = mysqli_query($conn, $sql);

        if ($result) {

            echo "<script>alert('글이 수정 되었습니다.');</script>";
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
        <input type="submit" name="submit" value="수정">
    </form>
    <br>
    <br>
    <br>
    <a href="list.php">리스트</a>
    
</body>
</html>