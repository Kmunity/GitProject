    <div id="logo"><a href="index.php"><img src="./img/logo.gif" border="0"></a></div>
	<div id="moto"><img src="./img/moto.gif"></div>
	<div id="top_login">
<?	//�α��� ���� ���� �����϶�
    if(!$userid)
	{
?>
          <a href="./login/login_form.php">�α���</a> | <a href="./member/member_form.php">ȸ������</a>
<?
	}
	//�α��� �����϶�
	else
	{
?>
		<?=$userid?> (<?=$usernick?>) | 
		<a href="./login/logout.php">�α׾ƿ�</a> | <a href="./login/member_form_modify.php">��������</a>
<?
	}
?>
	 </div>
