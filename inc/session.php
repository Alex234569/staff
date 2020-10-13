<?php

//echo 'test';



if(session_id() == '') {
    session_start();
   /* if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
        echo 'BadInSession.php';
    }   */
}

if (isset($bufLogin)) {
        $_SESSION['users']['userName'] = "$bufLogin";
}

//print_r($_SESSION);
//session_destroy();

?>