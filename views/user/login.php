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

    <form action="#" method="post" class="default-form">
        <div class="form-group">
            <h4 class="form-control-static">Вход на сайт</h4>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="" value="<?php echo $email; ?>" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" name="password" placeholder="" value="" class="form-control" id="password">
        </div>

        <input type="submit" name="submit" value="Войти" class="btn-lg btn-info center-block">
    </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
