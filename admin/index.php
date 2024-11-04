<?php
    session_start();
    $_SESSION['userlogin'] = '';
    foreach (glob('TruyenOnline/models/*.php') as $file) {
        include $file;
    }

    include 'layout/header.php';
    include 'layout/sidebar.php';

    if(!empty($_GET['u'])){
      $url = $_GET['u'];
      switch ($url) {
        case 'dashboard':
          include 'home.php';
          break;
        
        default:
          include '../resources/404.php';
          break;
      }
    }else {
      include 'home.php';
    }

    include 'layout/footer.php';
?>