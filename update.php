<?php
include("config.php");

if (isset($_GET["updateid"])) {

    $id = $_GET["updateid"];


    // 데이터베이스에서 해당 데이터 가져오기
    $sql = "SELECT title, content FROM crud WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        $row = mysqli_fetch_assoc($result);

        $title = $row['title'];

        $content = $row['content'];

    } else {

        echo "데이터 검색 실패: " . mysqli_error($conn);

    }
}

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
        제목<input type="text" name="title" value="<?php echo isset($title) ? $title : ''; ?>">
        <br>
        내용<input type="text" name="content" value="<?php echo isset($content) ? $content : ''; ?>">
        <input type="submit" name="submit" value="수정">
    </form>
    <br>
    <br>
    <br>
    <a href="list.php">리스트</a>
</body>
</html>
