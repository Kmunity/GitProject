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
		window.open("https://www.github.com/");
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
				<img src="../img/site1.gif" width="300" height="100" onclick="site_link1()">
			</div>
			<div id="site_info">
				<div id="site_title">
					���̹�
				</div>
				<div id="site_link" onclick="site_link1()">http://www.naver.com/</div>
				<div id="site_content">
					����in �ְ�!
				</div>
			</div>
		</div> <!-- end of site1 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site2.gif" width="300" height="100" onclick="site_link2()">
			</div>
			<div id="site_info">
				<div id="site_title">
					�����
				</div>
				<div id="site_link" onclick="site_link2()">https://www.github.com/</div>
				<div id="site_content">
					����Ĺ �⿩��
				</div>
			</div>
		</div> <!-- end of site2 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site3.gif" width="300" height="100" onclick="site_link3()">
			</div>
			<div id="site_info">
				<div id="site_title">
					���δ����������ý���
				</div>
				<div id="site_link" onclick="site_link3()">http://ktis.kookmin.ac.kr/</div>
				<div id="site_content">
					������û ����!
				</div>
			</div>
		</div> <!-- end of site3 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site4.gif" width="300" height="100" onclick="site_link4()">
			</div>
			<div id="site_info">
				<div id="site_title">
					��ǻ�����α׷���
				</div>
				<div id="site_link" onclick="site_link4()">http://cyber.ybmsisa.com/kookmin/</div>
				<div id="site_content">
					MOS EXCEL �ڰ��� ����
				</div>
		</div> <!-- end of site4 -->
	</div>
  </div>
</div>
</body>
</html>
