<?
      include "../lib/dbconn.php";

      $sql = "delete from free_ripple where num=$_GET[ripple_num]";
      mysql_query($sql, $connect);
      mysql_close();

      echo "
	   <script>
	    location.href = 'view.php?table=$_GET[table]&num=$_GET[num]';
	   </script>
	  ";
?>
