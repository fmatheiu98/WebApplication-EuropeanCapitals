<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Înregistrare</h2>
</div>

<form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Nume de utilizator</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Parola</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirmă parola</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <p>Admin: </p>
        <input type="checkbox" class="adm" name="admin" value="admin" />
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Sunteți deja înregistrat(ă) <a href="login.php">Log in</a>
    </p>
</form>
</body>
</html>