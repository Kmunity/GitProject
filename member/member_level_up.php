<!--�Ķ���ͷ� ���޹��� ID�� ��ȣȭ�Ͽ� �ش� ������ ������ �ø��� ������-->
<?
	$start = time();
	include "../lib/dbconn.php";
	//�ڵ带 ��ȣȭ �ϴ� ������ �̱���

	$sql = "UPDATE member SET level=8 WHERE id='$_GET[code]'";

	$result = mysql_query($sql,$connect);

	if($result && $_GET[code])
		echo "������ ���������� ó���Ǿ����ϴ�.";
	else
		echo "�������� �ʴ� �����Դϴ�.";

	mysql_close();

	if($start + 5 < time())
		echo "<script>self.opener = self;
		window.close();</script>";
?>
