<?
    $connect=mysql_connect( "localhost", "jun1", "1234") or  
        die( "SQL server에 연결할 수 없습니다."); 

    mysql_select_db("test1",$connect);
	
	//host: localhost
	//db : test1
	//db_password:1234
	//user jun1
	
?>
