<?php
echo "<pre>";
/*
//var_dump(setcookie ('test', 'test_value', time()+3600));

//var_dump($_COOKIE['test']);
setcookie('test', '', 1);
*/




// приложение которое считает количество просмотров страниц
/*
if(!$_COOKIE['count_vizit']){
    setcookie('count_vizit', 1, time()+60*60);
} else {
    $counter = $_COOKIE['count_vizit'] + 1;
    setcookie('count_vizit', $counter, time()+60*60);
};
print_r($_COOKIE);
echo $_COOKIE['count_vizit'];
//echo $counter;
*/



session_start();
$visit_count = 1;

if (isset($_SESSION["visit_count"])) {
    $visit_count = $_SESSION["visit_count"] + 1;
}
print_r($_SESSION);
$_SESSION["visit_count"] = $visit_count;
print_r($_SESSION);
echo ("Количество посещений: " . $visit_count);




//Cессии
/*
session_start();
$_SESSION['test'] = 1;
//print_r($_SESSION['test']);
//unset($_SESSION['test']);
//var_dump($_SESSION['test']); 

if (!$_SESSION['count_vizit']){
    $_SESSION['count_vizit'] = 1;
} else {
    $_SESSION['count_vizit']++;
}
print_r($_SESSION['count_vizit']);
session_destroy();
*/


