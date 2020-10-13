<?php

if (empty($_SESSION['users'])) { //проверка: если в сессии уже есть логин то будет показываться кнопка выхода, если нет то выполняется одна из веток ниже
    if (isset($_POST['login'])) { //если был введен логин то подключаю файлы логинов и паролей и проверяю их
        include $_SERVER['DOCUMENT_ROOT'] . '/inc/login.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/inc/password.php';
        if (($passwords[array_search($_POST['login'], $logins)]) == $_POST['password'] && array_search($_POST['login'], $logins) !== false) {
            $bufLogin = $_POST['login'];
            include $_SERVER['DOCUMENT_ROOT'] . '/inc/session.php'; //в случае если все ввели верно 
            include $_SERVER['DOCUMENT_ROOT'] . '/include/success.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/inc/rat.php'; 
        } else {
            $name = $_POST['login']; //если ввели неверно то выпускаю ошибку и еще раз предоставляю форму для заполнения
            include $_SERVER['DOCUMENT_ROOT'] . '/inc/form.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/include/error.php';
        }
    } else {
        include $_SERVER['DOCUMENT_ROOT'] . '/inc/form.php'; //если еще ничего не вводили то будет предоставленна пользователю только форма
    };
} else {
    echo "Hi, " . $_SESSION['users']['userName'] . '...'; //если залогинилось то приветствуем и предлагаем красную таблетку
    include $_SERVER['DOCUMENT_ROOT'] . '/inc/rat.php';
}
