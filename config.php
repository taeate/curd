<?php
   // 데이터베이스 연결 설정
    $servername = "localhost"; // 데이터베이스 서버 주소
    $username = "root"; // MySQL 사용자 이름
    $password = ""; // MySQL 비밀번호
    $dbname = "article"; // 사용할 데이터베이스 이름


    //MYSQL 연결
    $conn = new mysqli($servername, $username, $password, $dbname);

    //연결 확인
    if ($conn->connect_error){

        die("연결실패". $conn->connect_error);
        
    }
?>