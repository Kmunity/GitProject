    <div id="logo"><a href="index.php"><img src="./img/logo_new.gif" border="0"></a></div>
	<div id="moto"><a href="index.php"><img src="./img/moto.gif"></a></div>
	<div id="top_login">
<?	//�α��� ���� ���� �����϶�
    if(!$_SESSION[userid])
	{
?>
          <a href="./login/login_form.php">�α���</a> | <a href="./member/member_form.php">ȸ������</a>
<?
	}
	//�α��� �����϶�
	else
	{
?>
		<?=$_SESSION[userid]?> (<?=$_SESSION[usernick]?>) | 
		<a href="./login/logout.php">�α׾ƿ�</a> | <a href="./login/member_form_modify.php">��������</a>
<?
	}
?>
	 </div>
