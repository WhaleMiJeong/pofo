<?PHP
include_once('./header.php');
  $name = $_POST['name'];  //data.name
  $mail = $_POST['mail'];  //data.mail

  $sql = "insert into member_mail(name, mail) values( '$name','$mail')";
  mysqli_multi_query($conn, $sql);

// 데이터베이스 테이블에 저장된 데이터를 가져와서(SELCT) 외부 JSON파일로 저장하고
//저장된 JSON파일을 AJAX를 사용 웹 화면에 테이블 태그를 사용 목록을 출력한다.

$sql    = "select * from member_mail";
$result = mysqli_query($conn, $sql);

$arr = array();

if( mysqli_num_rows($result) > 0 ){ //데이터가 들어있다면 (0보다 크면 구현해라)
    while( $row = mysqli_fetch_array($result) ){
        array_push($arr, array(
            "이름"   => $row['name'],
            "이메일" => $row['mail']
        ));
    }
}

$json = json_encode($arr, JSON_UNESCAPED_UNICODE);
        file_put_contents('./data/member_mail.json', $json);

include_once('./footer.php');
?>
