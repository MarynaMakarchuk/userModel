<html>
 <head>
   <title>Register</title>
   <meta charset="utf-8">
</head>
<body>
<?php if ($result): ?>
    <p>Вы зарегистрированы!</p>
        <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
                <div class="signup-form">
                     <h2>Регистрация на сайте</h2>
					<form action=" " method="post">
                    <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/><br />
                    <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/><br />
                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/><br />
                    <input type="submit" name="submit" value="Регистрация" />
                    </form>
                </div>
<?php endif; ?>
</body>
</html>