<?php
// about_us
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/session.php';
if (empty($_SESSION['users']['userName'])) {
    header("Location: /../index.php");
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
}
