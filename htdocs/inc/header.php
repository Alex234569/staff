<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/inc/main_menu.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/session.php';
$connection = connect();

?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clearfix">
        <?=showMenu($mainMenu, 'main-menu', SORT_ASC); ?>
    </div>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
			
				<h1><?=printNamePart($mainMenu, $_SERVER['PHP_SELF'])?></h1>
				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
				
			
			</td>
            <td class="right-collum-index">
				
				<div class="project-folders-menu">
					<ul class="project-folders-v">
    					<li class="project-folders-v-active"><a href="#"><?='Авторизация'?></a></li>
    					<li><a href="#">Регистрация</a></li>
    					<li><a href="#">Забыли пароль?</a></li>
					</ul>
				    <div class="clearfix"></div>
				</div>
                
				<div class="index-auth">

					<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/logic.php';
				//	if (isset($_POST['login'])) {
				//		(empty($_SESSION['users']) ? include_once 'error.php' : include_once 'success.php';
				//	}
					?> 
				</div>
			
			</td>
        </tr>
    </table>
    