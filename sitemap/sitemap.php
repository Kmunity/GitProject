<?
	session_start();
	include "../lib/time_out2.php";
?>
<html>
<head>
<meta charset="euc-kr">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/sitemap.css" rel="stylesheet" type="text/css" media="all">
<script>
	function site_link1(){
		window.open("http://www.naver.com/");
	}
	function site_link2(){
		window.open("http://www.kmutime.co.kr/");
	}
	function site_link3(){
		window.open("http://ktis.kookmin.ac.kr/");
	}
	function site_link4(){
		window.open("http://cyber.ybmsisa.com/koomin/");
	}
</script>
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
			<img src="../img/title_sitemap.gif">
		</div>
		<div id="sites">
			<div id="site_img">
				<img src="../img/site1.gif" onclick="site_link1()">
			</div>
			<div id="site_info">
				<div id="site_title">
					네이버
				</div>
				<div id="site_link" onclick="site_link1()">http://www.naver.com/</div>
				<div id="site_content">
					지식in 최고!
				</div>
			</div>
		</div> <!-- end of site1 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site2.gif" onclick="site_link2()">
			</div>
			<div id="site_info">
				<div id="site_title">
					크무타임
				</div>
				<div id="site_link" onclick="site_link2()">http://www.kmutime.co.kr</div>
				<div id="site_content">
					국민대학교의 전체 강의정보를 정리하여 볼 수 있고<br>
					모의 시간표작성기능을 지원하는 사이트.
				</div>
			</div>
		</div> <!-- end of site2 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site3.gif" onclick="site_link3()">
			</div>
			<div id="site_info">
				<div id="site_title">
					국민대종합정보시스템
				</div>
				<div id="site_link" onclick="site_link3()">http://ktis.kookmin.ac.kr/</div>
				<div id="site_content">
					수강신청 망함!
				</div>
			</div>
		</div> <!-- end of site3 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site4.gif" onclick="site_link4()">
			</div>
			<div id="site_info">
				<div id="site_title">
					컴퓨터프로그래밍
				</div>
				<div id="site_link" onclick="site_link4()">http://cyber.ybmsisa.com/kookmin/</div>
				<div id="site_content">
					MOS EXCEL자격증을 따기위한 인터넷 강의를<br>
					수강할 수 있는 사이트.		
				</div>
		</div> <!-- end of site4 -->
	</div>
  </div>
</div>
</body>
</html>
