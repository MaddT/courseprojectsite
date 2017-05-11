<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<h2>Изменение проекта</h2>

<form action="#" method="post" enctype="multipart/form-data">
    <p>Название проекта</p>
    <input type="text" name="title" placeholder="" value="<?php echo $project['title']; ?>">

    <p>Описание проекта</p>
    <input type="text" name="description" placeholder="" value="<?php echo $project['description']; ?>">

    <p>Изобрадение проекта</p>
    <img src="<?php echo Project::getImage($project['id']); ?>" width="200" alt="">

    <input type="file" name="image" placeholder="" value="">

    <p>Категория</p>
    <select name="category_id">
        <?php if(is_array($categoriesList)): ?>
            <?php foreach($categoriesList as $category): ?>
                <option value="<?php echo $category['id']; ?>"
                    <?php if($project['categoryid'] == $category['id']) echo ' selected="selected"';?>>
                    <?php echo $category['title']; ?>
                </option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>

    <p>Бюджет проекта</p>
    <input type="text" name="financialpurpose" placeholder="" value="<?php echo $project['financialpurpose']; ?>">

    <p>Проект</p>
    <textarea name="details"><?php echo $project['projectdetails']; ?></textarea>

    <input type="submit" name="submit" value="Сохранить">
</form>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
