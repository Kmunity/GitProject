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
					���δ��б�
				</div>
				<div id="site_link" onClick="site_link1()">http://www.kookmin.ac.kr/</div>
				<div id="site_content">
					���δ��б� ���� �� ������
				</div>
			</div>
		</div> <!-- end of site1 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site_bookstore.gif" width="250"  onClick="site_link2()">
			</div>
			<div id="site_info">
				<div id="site_title">
					�������
				</div>
				<div id="site_link" onClick="site_link2()">http://lib.kookmin.ac.kr/</div>
				<div id="site_content">
					������ �¼� ��Ȳ�� �����ڷ� �˻���<br>
					�����ϰ� ���������� �� �� �ִ� ����Ʈ.
				</div>
			</div>
		</div> <!-- end of site2 -->
		<div id="sites">
			<div id="site_img">
				<img src="../img/site_ktis.gif" width="250" height="88" onClick="site_link3()">
			</div>
			<div id="site_info">
				<div id="site_title">
					���δ����������ý���
				</div>
				<div id="site_link" onClick="site_link3()">http://ktis.kookmin.ac.kr/</div>
				<div id="site_content">
					������û ����! 
				</div>
			</div>
		</div> <!-- end of site3 -->

        <div id="sites">
			<div id="site_img">
				<img src="../img/site4.gif" width="250"onClick="site_link4()">
			</div>
			<div id="site_info">
				<div id="site_title">
					��ǻ�����α׷���
				</div>
				<div id="site_link" onClick="site_link4()">http://cyber.ybmsisa.com/kookmin/</div>
				<div id="site_content">
					MOS EXCEL �ڰ��� ����
				</div>
		</div> <!-- end of site5 -->
 
        
	</div>
  </div>
</div>
</body>
</html>
