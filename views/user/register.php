<?php include ROOT . '/views/layouts/header.php'; ?>
<section>
    <div class="container">
        <div class="row">

    <?php if(isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach($errors as $error): ?>
            <li>
                <h4><span class="label label-danger">- <?php echo $error ?></span></h4>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php if($result): ?>
        <?php User::userLogin($email, $password); ?>
    <?php endif; ?>

    <form action="#" method="post" class="default-form">
        <div class="form-group">
            <h4 class="form-control-static">Введите данные для регистрации</h4>
        </div>

        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="" value="<?php echo $name; ?>" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="" value="<?php echo $email; ?>" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" name="password" placeholder="" value="" class="form-control" id="password">
        </div>

        <div class="form-group">
            <label for="passwordconf">Подтверждение пароля</label>
            <input type="password" name="passwordconf" placeholder="" value="" class="form-control" id="passwordconf">
        </div>

        <button type="submit" name="submit" class="btn-lg btn-info center-block">Регистрация</button>
    </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
