<?php
//$connection = connect();
//отключен коннект к БД ибо там только одна табличка с логином-паролем. Файл не удален

include $_SERVER['DOCUMENT_ROOT'] . '/inc/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/inc/main_menu.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/session.php';
if (isset($_POST['out'])) {
    unset($_SESSION['users']);
    header("Refresh:0");
}
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
				<p>Разбор авторизации, не допуск неавторизированных пользователей к другим страницам, сохранение информации о польхователе.</p>
				
			
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

					<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/logic.php';?> 
				</div>
			
			</td>
        </tr>
    </table>
    