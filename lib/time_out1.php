<?
	if($_SESSION['timeout'] && ($_SESSION['timeout'] + 20 * 60) < time())
	{
		unset($_SESSION['timeout']);
		unset($_SESSION['userid']);
		unset($_SESSION['usernick']);
		unset($_SESSION['username']);
		unset($_SESSION['userlevel']);
		
		echo "<script>alert('Session time over');</script>";
		echo "<script>location.herf = 'index.php';</script>";
	}else if($_SESSION['userid']){
		$_SESSION['timeout'] = time();
	}
?>
