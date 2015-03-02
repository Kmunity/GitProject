    <div id="logo"><a href="index.php"><img src="./img/logo_new.gif" border="0"></a></div>
	<div id="moto"><a href="index.php"><img src="./img/moto.gif"></a></div>
	<div id="top_login">
<?	//로그인 하지 않은 상태일때
    if(!$_SESSION[userid])
	{
?>
          <a href="./login/login_form.php">로그인</a> | <a href="./member/member_form.php">회원가입</a>
<?
	}
	//로그인 상태일때
	else
	{
?>
		<?=$_SESSION[userid]?> (<?=$_SESSION[usernick]?>) | 
		<a href="./login/logout.php">로그아웃</a> | <a href="./login/member_form_modify.php">정보수정</a>
<?
	}
?>
	 </div>
