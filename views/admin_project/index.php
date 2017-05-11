<?php include ROOT . '/views/layouts/header_admin.php'; ?>

    <p>Hello Admin!!!</p>
    <h4>Список проектов</h4>
    <a href="/admin/project/create/">Добавить проект</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Finaldate</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($projectList as $project): ?>
            <tr>
                <td><?php echo $project['id']; ?></td>
                <td><?php echo $project['title']; ?></td>
                <td><?php echo $project['description']; ?></td>
                <td><?php echo $project['finaldate']; ?></td>
                <td><a href="/admin/project/update/<?php echo $project['id']; ?>">Редактировать</a></td>
                <td><a href="/admin/project/delete/<?php echo $project['id']; ?>">Удалить</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>