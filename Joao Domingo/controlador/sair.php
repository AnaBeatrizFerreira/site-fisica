<?php

  session_start();
  unset($_SESSION['idUsuárioConectado']);
  header("Location: ../login.php")

?>