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
		window.open("http://www.kookmin.ac.kr/");
	}
	function site_link2(){
		window.open("https://www.lib.kookmin.ac.kr/");
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
				<img src="../img/site_kookmin.gif" width="250" onClick="site_link1()">
			</div>
			<div id="site_info">
				<div id="site_title">
					국민대학교
				</div>
				<div id="site_link" onClick="site_link1()">http://www.kookmin.ac.kr/</div>
				<div id="site_content">
					국민대학교 공식 웹 페이지
				</div>
			</div>
		</div> <!-- end of site1 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site_bookstore.gif" width="250"  onClick="site_link2()">
			</div>
			<div id="site_info">
				<div id="site_title">
					성곡도서관
				</div>
				<div id="site_link" onClick="site_link2()">http://lib.kookmin.ac.kr/</div>
				<div id="site_content">
					열람실 좌석 현황과 소장자료 검색을<br>
					지원하고 모의토익을 볼 수 있는 사이트.
				</div>
			</div>
		</div> <!-- end of site2 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site_ktis.gif" width="250" height="88" onClick="site_link3()">
			</div>
			<div id="site_info">
				<div id="site_title">
					국민대종합정보시스템
				</div>
				<div id="site_link" onClick="site_link3()">http://ktis.kookmin.ac.kr/</div>
				<div id="site_content">
					수강신청 망함! 
				</div>
			</div>
		</div> <!-- end of site3 -->

        <div id="sites">
			<div id="site_img">
				<img src="../img/site4.gif" width="250"onClick="site_link4()">
			</div>
			<div id="site_info">
				<div id="site_title">
					컴퓨터프로그래밍
				</div>
				<div id="site_link" onClick="site_link4()">http://cyber.ybmsisa.com/kookmin/</div>
				<div id="site_content">
					MOS EXCEL 자격증 따자
				</div>
		</div> <!-- end of site5 -->
 
        
	</div>
  </div>
</div>
</body>
</html>
