<form action="" method="post">
<input type='submit' value='Drink red pill' name='out'>
</form>
<pre>
<?php
//нахождение и подключение в данном месте вызывает ошибку вывода текста, перемещено в начало header.php
//не забывать что header() должен быть до вывода любого текста

/*
if (isset($_POST['out'])) {
    unset($_SESSION['users']);
    header("Refresh:0");
}
*/