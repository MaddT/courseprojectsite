<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<h4>Удалить проект <?php echo $id; ?></h4>
<p>Вы действительно хотите удалить этот проект?</p>

<form method="post">
    <input type="submit" name="submit" value="Удалить">
</form>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
