 <!-- <div class="test"> 
<pre> -->
<?php

//echo 'test';



if(session_id() == '') {
    session_start();
    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
        echo '123';
    }
}

if (isset($bufLogin)) {
        $_SESSION['users']['userName'] = "$bufLogin";
}

//print_r($_SESSION);
//session_destroy();

?>

<!--

</pre>
</dev>

-->