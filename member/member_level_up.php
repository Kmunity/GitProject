<!--파라미터로 전달받은 ID를 복호화하여 해당 계정의 레벨을 올리는 페이지-->
<?
	$start = time();
	include "../lib/dbconn.php";
	//코드를 복호화 하는 과정은 미구현

	$sql = "UPDATE member SET level=8 WHERE id='$_GET[code]'";

	$result = mysql_query($sql,$connect);

	if($result && $_GET[code])
		echo "가입이 정상적으로 처리되었습니다.";
	else
		echo "존재하지 않는 계정입니다.";

	mysql_close();

	if($start + 5 < time())
		echo "<script>self.opener = self;
		window.close();</script>";
?>
