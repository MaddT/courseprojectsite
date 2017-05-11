<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Краудфандинг</title>
    <link href="/template/css/style.css" rel="stylesheet">
    <link href="/template/css/bootstrap.min.css" rel="stylesheet" />
    <script src="/template/js/jquery-3.2.1.min.js"></script>
    <script src="/template/js/bootstrap.min.js"></script>
    <style>
        .default-form {
            width: 500px;
            margin: 30px auto;
            border: 1px solid grey;
            padding: 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img alt="Brand" src="/upload/images/brand.png" width="32">
            </a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['user']) && $_SESSION['user'] == 1): ?>
                <li><a href="/admin/"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a></li>
            <?php endif; ?>
            <li><a href="/createproject/">Создать проект</a></li>
            <li><a href="/about/">О нас</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php if(User::isGuest()): ?>
                        <li><a href="/user/login/">Войти</a></li>
                        <li class="divider"></li>
                        <li><a href="/user/register/">Зарегистрироваться</a></li>
                    <?php else: ?>
                        <li><a href="/user/account/">Профиль</a></li>
                        <li class="divider"></li>
                        <li><a href="/user/logout/">Выйти</a></li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>


    </div>
</nav>
