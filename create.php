<?php
    include("config.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>글쓰기 페이지입니다.</h1>
</head>
<body>
    <?php
     // form 정보 db 저장
     
     if (isset($_POST["submit"])) {

        $title = $_POST["title"];

        $content = $_POST["content"];
    
        // 체크하여 필드가 비어 있는지 확인
        if (empty($title)) {

            echo "<script>alert('제목을 입력해주세요');</script>";

        } elseif (empty($content)) {

            echo "<script>alert('내용을 입력해주세요');</script>";

        } else {

            $sql = "INSERT INTO `crud` (title, content) VALUES ('$title', '$content')";

            $result = mysqli_query($conn, $sql);
    
            if ($result) {

                echo "<script>alert('데이터 저장 성공');</script>";

                echo "<script>setTimeout(function() { window.location.href = 'list.php'; }, 100);</script>";

            } else {

                echo "데이터 저장 실패: " . mysqli_error($conn);
                
            }
        }
    }
       

    
    ?>

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