<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin/">Админпанель</a></li>
                    <li><a href="/admin/project/">Управление проектами</a></li>
                    <li class="active">Удалить проект</li>
                </ol>
            </div>

            <form action="#" method="post" enctype="multipart/form-data" class="default-form">
                <div class="form-group">
                    <h4 class="form-control-static">Вы действительно хотите удалить этот проект? (<?php echo $id; ?>)</h4>
                </div>

                <input type="submit" name="submit" value="Удалить" class="btn-lg btn-danger center-block">

            </form>

        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
