<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/template/css/style.css" type="text/css">
</head>
<body>
<div>
    <a href="/">Главная</a>
    <a href="/createproject/">Создать проект</a>
    <a href="/about/">О нас</a>
    <a href="/user/register/">Зарегистрироваться</a>
    <?php if(User::isGuest()): ?>
        <a href="/user/login/">Войти</a>
    <?php else: ?>
        <a href="/user/account/">Аккаунт</a>
        <a href="/user/logout/">Выйти</a>
    <?php endif; ?>
</div>