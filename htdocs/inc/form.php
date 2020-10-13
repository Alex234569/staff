<form action="/" method="POST">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="iat">
                <?php 
                    if () {
                       ; 
                    }
                ?>
                <label for="login_id">Ваш e-mail:</label>
                <input type='text' id="login_id" size="30" name="login" value="<?=(isset($name)) ? $name : ''?>">
            </td>
        </tr>
        <tr>
            <td class="iat">
                <label for="password_id">Ваш пароль:</label>
                <input id="password_id" size="30" name="password" type="password" value=''>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Войти" name='send'></td>
        </tr>
    </table>
</form>