<?php echo form_open("user_auth/registrasi"); ?>

<table>
    <tr>
        <td>Email :</td>
        <td><input type="text" name="email"/></td>
    </tr>
    <tr>
        <td>Password :</td>
        <td><input type="password" name="password"/></td>
    </tr>
    <tr>
        <td>Confirm Password :</td>
        <td><input type="password" name="password_confirm"/></td>
    </tr>
    <tr>
        <td>Nama :</td>
        <td><input type="text" name="name"/></td>
    </tr>
    <tr>
        <td><input type="submit" name="save" value="Ok"/></td>
    </tr>
</table>
<?php echo form_close(); ?>