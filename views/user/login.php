<?php include ROOT . '/views/layouts/header.php'; ?>

<?php if(isset($errors) && is_array($errors)): ?>
    <ul>
        <?php foreach($errors as $error): ?>
            <li>
                - <?php echo $error ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<div>
    <h2>Вход на сайт</h2>
    <form action="#" method="post">
        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
        <input type="submit" name="submit" value="Войти">
    </form>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
