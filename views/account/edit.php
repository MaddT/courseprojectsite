<?php include ROOT . '/views/layouts/header.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <div class="container">

                <!-- Контейнер с закладками -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#home" role="tab" data-toggle="tab">Основные данные</a></li>
                    <li><a href="#profile" role="tab" data-toggle="tab">Смена пароля</a></li>
                </ul>


                <!-- Контейнер с панелями -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="home">

                    </div>
                    <div class="tab-pane fade" id="profile">
                        <form action="#" method="post" class="default-form">
                            <div class="form-group">
                                <h4 class="form-control-static">Смена пароля</h4>

                                <div class="form-group">
                                    <label for="oldpassword">Старый пароль</label>
                                    <input type="password" name="oldpassword" placeholder="" value="" class="form-control" id="oldpassword">
                                </div>

                                <div class="form-group">
                                    <label for="opassword">Новый пароль</label>
                                    <input type="password" name="password" placeholder="" value="" class="form-control" id="password">
                                </div>

                                <div class="form-group">
                                    <label for="passwordconf">Подтверждение пароля</label>
                                    <input type="password" name="passwordconf" placeholder="" value="" class="form-control" id="passwordconf">
                                </div>

                                <input type="submit" name="submitpass" value="Изменить" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

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

    <?php endif; ?>
</div>