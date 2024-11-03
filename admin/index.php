<?php
    session_start();
    $_SESSION['userlogin'] = '';
    foreach (glob('TruyenOnline/models/*.php') as $file) {
        include $file;
    }

    include 'layout/header.php';

    include 'layout/footer.php';