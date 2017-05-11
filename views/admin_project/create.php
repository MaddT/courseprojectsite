<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin/">Админпанель</a></li>
                    <li><a href="/admin/project/">Управление проектами</a></li>
                    <li class="active">Создать проект</li>
                </ol>
            </div>

            <form action="#" method="post" enctype="multipart/form-data" class="default-form">
                <div class="form-group">
                    <h4 class="form-control-static">Новый проект</h4>
                </div>

                <div class="form-group">
                    <label for="title">Название проекта</label>
                    <input type="text" name="title" placeholder="" value="" class="form-control" id="title">
                </div>

                <div class="form-group">
                    <label for="description">Описание проекта</label>
                    <textarea name="description" class="form-control" id="description" rows="2"></textarea>
                </div>

                <div class="form-group">
                    <label for="userid">Автор</label>
                    <select name="userid" class="form-control" id="userid">
                        <?php if(is_array($userList)): ?>
                            <?php foreach($userList as $user): ?>
                                <option value="<?php echo $user['id']; ?>">
                                    <?php echo $user['name'] . ' - ' . $user['email']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Изображение проекта</label>
                    <input type="file" name="image" placeholder="" value="" class="form-control" id="image">
                </div>

                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select name="category_id" class="form-control" id="category_id">
                        <?php if(is_array($categoriesList)): ?>
                            <?php foreach($categoriesList as $category): ?>
                                <option value="<?php echo $category['id']; ?>">
                                    <?php echo $category['title']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="financialpurpose">Бюджет проекта</label>
                    <input type="text" name="financialpurpose" placeholder="" value="" class="form-control" id="financialpurpose">
                </div>

                <div class="form-group">
                    <label for="details">Проект</label>
                    <textarea name="details" class="form-control" id="details" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="country">Страна</label>
                    <select name="country" class="form-control" id="country">
                        <?php if(is_array($countryList)): ?>
                            <?php foreach($countryList as $country): ?>
                                <option value="<?php echo $country['id']; ?>">
                                    <?php echo $country['country']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="finaldate">Дата завершения</label>
                    <input type="date" name="finaldate" value="" placeholder="" class="form-control" id="finaldate">
                </div>

                <input type="submit" name="submit" value="Сохранить" class="btn btn-success">
            </form>

        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
