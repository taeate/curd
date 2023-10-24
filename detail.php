<?php 
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상세 글</title>
    <h1>상세 설명 페이지 입니다.</h1>
</head>
<body>
    
<?php

if (isset($_GET['detailid'])){

    $id = $_GET['detailid'];

    $sql = "SELECT * FROM `crud` where id = $id";

    $result = mysqli_query($conn, $sql);

    if($result) {

        while( $row = mysqli_fetch_assoc($result) ) {
        $id = $row["id"];
        $title = $row["title"];
        $content = $row["content"];
    
        echo  $id.".".
             "제목 :".$title.
             "내용 :".$content. "<br><br><br>".
             "<button><a href='update.php?updateid=$id'>수정</a></button>
            <button><a href='delete.php?deleteid=$id'>삭제</a></button><br>";;
       
    }

}
    
}

?>
<br>
<br>
<br>
    <a href="list.php">리스트</a>
</body>
</html>