<?php
    session_start();
    $_SESSION['userlogin'] = '';
    foreach (glob('TruyenOnline/models/*.php') as $file) {
        include $file;
    }

    include 'layout/header.php';
    include 'layout/sidebar1.php';

    if(!empty($_GET['u'])){
      $url = $_GET['u'];
      switch ($url) {
        case 'dashboard':
          include 'home.php';
          break;
        case 'comic_manage':
          include 'comics/list.php';
          break;
        case 'category_manage':
          include 'categories/list.php';
          break;
        case 'user_manage':
          include 'accounts/list.php';
          break;
        case 'comment_manage':
          include 'comments/list.php';
          break;
          case 'statistic':
            include 'statistics/views.php';
            break;
        default:
          include '../resources/404.php';
          break;
      }
    }else {
      include 'home.php';
    }

    include 'layout/sidebar2.php';
