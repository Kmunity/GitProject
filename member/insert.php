<meta charset="euc-kr">
<?
	$id=$_POST[id];
	$pass=$_POST[pass];
	$name=$_POST[name];
	$nick=$_POST[nick];
	$hp1=$_POST[hp1];
	$hp2=$_POST[hp2];
	$hp3=$_POST[hp3];
	$email1=$_POST[email1];
	
   $hp = $hp1."-".$hp2."-".$hp3;
   $email = $email1."@kookmin.ac.kr";

   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
   $ip = $REMOTE_ADDR;         // 방문자의 IP 주소를 저장

   include "../lib/dbconn.php";       // dconn.php 파일을 불러옴

   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);

   if($exist_id) {
     echo("
           <script>
             window.alert('해당 아이디가 존재합니다.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   /*else if()			번호가 숫자가 맞는지 검사
   {
	   echo("
	   		<script>
				window.alert('휴대전화번호가 정확하지 않습니다.')
				history.go(-1)
			</script>
			");
   }*/
   else
   {            // 레코드 삽입 명령을 $sql에 입력
	    $sql = "insert into member(id, pass, name, nick, hp, email, regist_day, level) ";
		$sql .= "values('$id', '$pass', '$name', '$nick', '$hp', '$email', '$regist_day', 9)";

		mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행
   }

   mysql_close();                // DB 연결 끊기

	//확인메일 전송
	$code = $id;
	//id를 이용하여 암호화된 코드를 생성하여 메일로 링크를 보냄
	$message = "
		가입을 완료하시려면 아래 링크를 눌러주세요.
		http://localhost/Kmunity/member/member_level_up.php?code=$code";
	mail($email,'Kmunity 인증 메일입니다.',$message);

   echo "
	   <script>
	    location.href = 'insert_confirm.php?email=$email';
	   </script>
	";
?>

   
