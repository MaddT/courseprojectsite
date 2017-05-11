<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<h2>Создание проекта</h2>

<form action="#" method="post" enctype="multipart/form-data">
    <p>Название проекта</p>
    <input type="text" name="title" placeholder="" value="">

    <p>Описание проекта</p>
    <input type="text" name="description" placeholder="" value="">

    <p>Изобрадение проекта</p>
    <input type="file" name="image" placeholder="" value="">

    <p>Категория</p>
    <select name="category_id">
        <?php if(is_array($categoriesList)): ?>
            <?php foreach($categoriesList as $category): ?>
                <option value="<?php echo $category['id']; ?>">
                    <?php echo $category['title']; ?>
                </option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>

    <p>Бюджет проекта</p>
    <input type="text" name="financialpurpose" placeholder="" value="">

    <p>Проект</p>
    <textarea name="details"></textarea>

    <input type="submit" name="submit" value="Сохранить">
</form>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
