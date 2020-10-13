<?php


function showMenu(array $mMenu, string $cssClass, $sortLead)
{
    $mMenu = arraySort($mMenu, 'sort', $sortLead);
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/menu.php';
// echo 'as';
}  


function arraySort($arrMenu, $key = 'sort', $sort = SORT_ASC) : array
{
    $column = [];

    if ($sort !== SORT_DESC) {
        $sort = SORT_ASC;
    }

    usort($arrMenu, function ($item1, $item2) use ($key, $sort) {
        return $sort === SORT_ASC ? $item1[$key] <=> $item2[$key] : $item2[$key] <=> $item1[$key];
        }
    );
    return $arrMenu;
}


function strCut(string $str, int $strLength = 12) : string
{
    return strlen($str) > $strLength ? mb_strimwidth($str, 0, $strLength, '...') : $str;
}


function isCurrentUrl($url)
{
   return $url == parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}


function printNamePart(array $menu) : string
{   
    $resultTitle = array_search(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), array_column($menu, 'path'));
    return $resultTitle !== false ? strCut($menu[$resultTitle]['title']) : '';
}


function connect()
{
    static $connection = null;

    if (null === $connection) {
        require $_SERVER['DOCUMENT_ROOT'] . '/inc/DB.php';
        $connection = mysqli_connect($host, $user, $password, $dbname);
        if (mysqli_connect_errno()) {
            die(mysqli_connect_error());
        }
    }

    return $connection;
}
