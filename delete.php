<?php
    include("config.php");

    if (isset($_GET['deleteid'])){

        $id = $_GET['deleteid'];

        $sql = "DELETE FROM `crud` where id = $id";
        $result = mysqli_query($conn,$sql);

        if ($result) {
            echo "<script>alert('삭제되었습니다.');</script>";
            echo "<script>setTimeout(function() { window.location.href = 'list.php'; }, 100);</script>";
        } else {
            die(mysqli_error($conn));
        }
        
        
    }
?>