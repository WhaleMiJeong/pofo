<?php
header('Content-Type: text/html; charset=utf-8');

  // 데이터베이스 권한 인증 - 접속(Connection)
  // 서버(server)이름(name)          - $servername
  // 사용자(user)이름(name)          - $username
  // 비밀번호(password)              - $password
  // 데이터베이스(database)이름(name) - $dbname

  $servername = 'localhost'; 
  $username   = 'ghtjr111';
  $password   = 'Rlaal332!!';
  $dbname     = 'ghtjr111';
  
  //접속(Connection) - $conn : mysqli_connect() 데이터베이스 접속 함수
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_set_charset($conn, 'utf8');

  if( !$conn ){ //접속 정보가 틀리면
      echo '데이터베이스 접속 실패! 아래의 데이터베이스 접속정보를 확인하세요!';
      echo '서버이름:'.$servername.' 사용자:'.$username.' 비밀번호:'. $password.' 데이터베이스이름:'.$dbname;  
      die('데이터베이스 접속 실패! 데이터베이스 접속정보를 확인하세요!');
  }
  ?>