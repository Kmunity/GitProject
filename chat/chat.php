<?
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head> 
<meta charset="euc-kr">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/board4.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
<div id="wrap">
  <div id="header">
    <? include "../lib/top_login2.php"; ?>
  </div>  <!-- end of header -->
  <div id="menu">
	<? include "../lib/top_menu2.php"; ?>
  </div>  <!-- end of menu --> 
  <div id="content">
	<div id="col2">    
    		<div id="title">
			<img src="../img/title_chat.gif">
			</div>
			<div id="chat">
			<embed height="400" width="90%" src="http://www.gagalive.kr/livechat1.swf?chatroom=kmuity&user=<?=$_SESSION[usernick]?>"></embed> 
			</div>
		</div>

</div>	<!-- end of content -->
</div>	<!-- end of wrap -->

</body>
</html>
