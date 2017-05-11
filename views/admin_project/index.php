<?php include ROOT . '/views/layouts/header_admin.php'; ?>

    <section>
    <div class="container">
    <div class="row">

        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin/">Админпанель</a></li>
                <li class="active">Управление проектами</li>
            </ol>
        </div>


        <a href="/admin/project/create/" class="btn btn-default back"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Добавить проект</a>
        <br>
        <br>

        <table class="table">
            <caption>Список проектов</caption>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Начало</th>
                <th>Завершение</th>
                <th>Бюджет</th>
                <th>Собрано</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($projectList as $project): ?>
                <tr>
                    <td><?php echo $project['id']; ?></td>
                    <td><?php echo $project['title']; ?></td>
                    <td><?php echo $project['description']; ?></td>
                    <td><?php echo $project['startdate']; ?></td>
                    <td><?php echo $project['finaldate']; ?></td>
                    <td><?php echo $project['financialpurpose']; ?></td>
                    <td><?php echo $project['financialcurrent']; ?></td>
                    <td><a href="/admin/project/update/<?php echo $project['id']; ?>" class="btn btn-link"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Редактировать</a></td>
                    <td><a href="/admin/project/delete/<?php echo $project['id']; ?>" class="btn btn-link"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Удалить</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
    </div>
    </section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>