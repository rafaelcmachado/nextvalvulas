<?php
  $_SESSION['login'] = 0;
  $_SESSION['senha'] = 0;
  $_SESSION['previlegio'] = 0;

  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }

  header('location:index.php');

?>
