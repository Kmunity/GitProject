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

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����
   $ip = $REMOTE_ADDR;         // �湮���� IP �ּҸ� ����

   include "../lib/dbconn.php";       // dconn.php ������ �ҷ���

   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);

   if($exist_id) {
     echo("
           <script>
             window.alert('�ش� ���̵� �����մϴ�.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   /*else if()			��ȣ�� ���ڰ� �´��� �˻�
   {
	   echo("
	   		<script>
				window.alert('�޴���ȭ��ȣ�� ��Ȯ���� �ʽ��ϴ�.')
				history.go(-1)
			</script>
			");
   }*/
   else
   {            // ���ڵ� ���� ����� $sql�� �Է�
	    $sql = "insert into member(id, pass, name, nick, hp, email, regist_day, level) ";
		$sql .= "values('$id', '$pass', '$name', '$nick', '$hp', '$email', '$regist_day', 9)";

		mysql_query($sql, $connect);  // $sql �� ����� ��� ����
   }

   mysql_close();                // DB ���� ����

	//Ȯ�θ��� ����
	$code = $id;
	//id�� �̿��Ͽ� ��ȣȭ�� �ڵ带 �����Ͽ� ���Ϸ� ��ũ�� ����
	$message = "
		������ �Ϸ��Ͻ÷��� �Ʒ� ��ũ�� �����ּ���.
		http://localhost/Kmunity/member/member_level_up.php?code=$code";
	mail($email,'Kmunity ���� �����Դϴ�.',$message);

   echo "
	   <script>
	    location.href = 'insert_confirm.php?email=$email';
	   </script>
	";
?>

   
