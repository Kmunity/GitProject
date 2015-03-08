<?
	$user = $_GET[user];

	#Database Connect
	include "../lib/dbconn.php";
	
	#Data Convert
	if($_GET[mode]=="insert" && $_POST[name] != ""){
		$gradeToPoint = ["A+" => 4.5,
						"A" => 4.0,
						"B+" => 3.5,
						"B" => 3.0,
						"C+" => 2.5,
						"C" => 2.0,
						"D+" => 1.5,
						"D" => 1.0];
		
		$name = $_POST[name];
		$sub = $_POST[sub];
		$grade = $_POST[grade];
		$point = (float)$gradeToPoint[$grade];
		
		#Data Insert
		$sql="insert into grade (user, name, sub, grade, point)";
		$sql.=" values ('$user','$name',$sub,'$grade',$point)";

		$result = mysql_query($sql);

		mysql_close();
	}
	else if($_GET[mode]=="delete"){
		$sql="delete from grade where num='$_GET[num]' and user='$user'";
		mysql_query($sql);

		mysql_close();
		Header("Location:GradeCal.php?user=$user");
	}
	else if($_GET[mode]=="deleteAll"){
		$sql="delete from grade where user='$user'";
		mysql_query($sql);
		mysql_close();
	}
?>
<!--학점입력--><head>
<title>Grade Calcuration System</title>
</head>

<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"/>
<div class="menus"><img src="../img/menu_grade.gif" border="0"></div>


<div id = space><div>

<form action="GradeCal.php?mode=insert&user=<?=$user?>" method="post">
<table width="400"border="1" cellpadding="5"><tr>
	<td>과목명:<input type="text" size="6" name="name"/></td>
	<td>학점:<select name="sub">
			<option value="3">3</option>
			<option value="2">2</option>
			<option value="1">1</option>
			</select></td>
	<td>성적:<select name="grade">
			<option value="A+">A+</option>
			<option value="A">A</option>
			<option value="B+">B+</option>
			<option value="B">B</option>
			<option value="C+">C+</option>
			<option value="C">C</option>
			<option value="D+">D+</option>
			<option value="D">D</option>
			</select></td>
	<td><input type="submit" value="추가하기"/></td>		
</tr></table>	
</form>
<table width="400"border="1" cellpadding="5">
<tr align="center" bgcolor="#CCCCCC">
	<td>번호</td>
	<td>과목명</td>
	<td>학점</td>
	<td>평가</td>
	<td cellpadding="0"><a href="GradeCal.php?mode=deleteAll&user=<?=$user?>">[전체삭제]</a></td>
<tr/>
<!--데이터베이스출력-->
<?
	#Database Connect
	include "../lib/dbconn.php";	
	
	#Show Data
	$sql="select * from grade where user = '$user'";
	$result=mysql_query($sql);

	$count=1;
	(float)$total=0.0;
	$sum=0;

	while($row=mysql_fetch_array($result)){
		echo "<tr align='center'>";
		echo "<td>$count</td>";
		echo "<td>$row[name]</td>";
		echo "<td>$row[sub]</td>";
		echo "<td>$row[grade]</td>";
		echo "<td><a href='GradeCal.php?mode=delete&num=$row[num]&user=$user'>[삭제]</a></td>";
		echo "</tr>";
		$count++;
		$sum+=(int)$row[sub];
		$total+=$row[sub]*(float)$row[point];
	}
	echo "<tr align='center'>";
	echo "<td>총계</td>";
	echo "<td>$total</td>";
	echo "<td>평점</td>";
	if($sum != 0)
		$total = round($total / $sum, 2) ;
	echo "<td colspan='2'>$total</td></tr>";

	mysql_close();
?>
</table>
<p>* 패스/노패스 과목은 평점에 포함되지 않음</p>
