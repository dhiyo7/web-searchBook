<?php

$page = '';
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}

$current_page = $page;

switch ($page) {
    case 'login':
      $page = "include 'pages/login.php';";
      break;

    default:
    // code...
    break;
}
 ?>
