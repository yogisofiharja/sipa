<html>
<body>
<h1>Reset Password untuk <?php echo $identity; ?></h1>

<p>Silakan klik link berikut
    untuk <?php echo anchor('user_auth/reset_password/' . $forgotten_password_code, 'mereset password Anda'); ?>.</p>
</body>
</html>
