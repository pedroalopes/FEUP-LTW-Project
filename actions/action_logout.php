<?php
    include_once('../abs_path.php');
    include_once(ABSPATH . '/includes/session.php');

    session_destroy();

    session_start();
    header('Location: ../index.php');
?>
