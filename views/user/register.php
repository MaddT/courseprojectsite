<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
    <?php if(isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach($errors as $error): ?>
            <li>
                - <?php echo $error ?>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php if($result): ?>
        <div>Регистрация прошла успешно</div>
    <?php endif; ?>
    <form action="#" method="post">
        <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"><br>
        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"><br>
        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"><br>
        <button type="submit" name="submit">Регистрация</button>
    </form>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
