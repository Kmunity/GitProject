<?
   session_start();
?>
<meta charset="euc-kr">
<?
   if(!$_SESSION[userid]) {
     echo("
	   <script>
	     window.alert('�α��� �� �̿��ϼ���.')
	     history.go(-1)
	   </script>
	 ");
	 exit;
   }   
   include "../lib/dbconn.php";       // dconn.php ������ �ҷ���

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����

   // ���ڵ� ���� ���
   $sql = "insert into free_ripple (parent, id, name, nick, content, regist_day) ";
   $sql .= "values($_GET[num], '$_SESSION[userid]', '$_SESSION[username]', '$_SESSION[usernick]', '$_POST[ripple_content]', '$regist_day')";    
   
   mysql_query($sql, $connect);  // $sql �� ����� ��� ����
   mysql_close();                // DB ���� ����

   echo "
	   <script>
	    location.href = 'view.php?table=free&num=$_GET[num]';
	   </script>
	";
?>

   
