<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
    <h2>Кабинет пользователя</h2>
    <h3>Привет, <?php echo $user['name']; ?>!</h3>
    <a href="/account/edit/">Изменить профиль</a><br>
    <a href="/user/projects/">Мои проекты</a>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
