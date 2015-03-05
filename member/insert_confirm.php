<?
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<link rel="stylesheet" type="text/css" href="../css/common.css">
<link rel="stylesheet" type="text/css" href="../css/member.css">
</head>

<body>
<div id="wrap">
	<div id="header">
    <? include "../lib/top_login2.php"; ?>
	</div>  <!-- end of header -->

	<div id="menu">
	<? include "../lib/top_menu2.php"; ?>
    </div>	<!-- end of menu -->

<div id="content">
	<div id="col2">
		<div id="title">
			<img src="../img/insert_confirm.gif">
		</div>
		<div id="insert_confirm">
			회원가입이 완료되었습니다.<br>
			<?=$_GET[email]?>@kookmin.ac.kr 메일에서 가입을 확인해 주세요.<br>
		</div>
		<div align="center">
			<a href="../index.php"><img id="go_to_main" src="../img/go_to_main.gif"></a>
		</div>
	</div>
</div>

</div>	<!-- end of content -->
</div>	<!-- end of wrap -->
</body>
</html>

