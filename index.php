<?php
    session_start();

    $excludedFiles = [];
    foreach (glob('models/*.php') as $file) {
        if (!in_array(basename($file), $excludedFiles)) {
            include $file;
        }
    }
    include 'views/layout/header.php'; //đầu trang

    /* khu vực nội dung trang */
    if(!empty($_GET['u'])) {
        $url = $_GET['u'];
        switch ($url) {
            case 'comic_detail':
                include 'views/comic_detail.php';
                break;
            
            case 'comic_read':
                include 'views/comic_read.php';
                break;

            default:
                include 'resources/404.php';
                break;
        }
    } else {
        include 'views/comic_home.php';
    }
    # kết thúc nội dung trang

    // đuôi trang
    include 'views/layout/footer.php';
