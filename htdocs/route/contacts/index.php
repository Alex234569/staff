<?php
// contacts
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/session.php';
if (empty($_SESSION['users']['userName'])) {
    header("Location: http://p3.slobodyanika.newgrade.vpool/index.php");
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
}
