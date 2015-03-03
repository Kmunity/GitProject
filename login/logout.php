<?
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['username']);
  unset($_SESSION['usernick']);
  unset($_SESSION['userlevel']);
  unset($_SESSION['timeout']);

  echo("
       <script>
          location.href = '../index.php'; 
         </script>
       ");
?>
