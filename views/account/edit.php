<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
    <?php if($result): ?>
        <div>Данные отредактированы</div>
    <?php else: ?>
        <?php if(isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach($errors as $error): ?>
                    <li>
                        - <?php echo $error ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="#" method="post">
            <p>Имя:</p>
            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"><br>
            <p>Пароль:</p>
            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"><br>
            <input type="submit" name="submit" value="Сохранить">
        </form>
    <?php endif; ?>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
