<form action="" method="post">
<input type='submit' value='Drink red pill' name='out'>
</form>
<pre>
<?php
if (isset($_POST['out'])) {
    unset($_SESSION['users']);
    header("Refresh:0");
} 