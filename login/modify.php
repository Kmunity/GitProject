<?
	session_start();
	include "../lib/time_out2.php";
?>
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
	$email2=$_POST[email2];


   $hp = $hp1."-".$hp2."-".$hp3;
   $email = $email1."@".$email2;

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����

   include "../lib/dbconn.php";       // dconn.php ������ �ҷ���

   $sql = "update member set pass='$pass', name='$name' , ";
   $sql .= "nick='$nick', hp='$hp', email='$email', regist_day='$regist_day' where id='$userid'";

   mysql_query($sql, $connect);  // $sql �� ����� ��� ����

	       $_SESSION['username'] = $name;
           $_SESSION['usernick'] = $nick;

   mysql_close();                // DB ���� ����
   echo "
	   <script>
	    location.href = '../index.php';
	   </script>
	";
?>

   
