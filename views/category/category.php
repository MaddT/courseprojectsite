<?php include ROOT . '/views/layouts/header.php'; ?>

<p>category/category</p>
<?php foreach($categories as $categoryItem): ?>
    <div <?php if($categoryID == $categoryItem['id']) echo 'style="background: red"' ?>>
        <a href="/category/<?php echo $categoryItem['id']; ?>">
            <h4><?php echo $categoryItem['title']; ?></h4>
        </a>
    </div>
<?php endforeach; ?>
<hr>
<?php foreach($categoryProjects as $projectItem): ?>
    <div>
        <h3><?php echo $projectItem['title']; ?></h3>
        <p><?php echo $projectItem['description']; ?></p>
        <h4><?php echo $projectItem['financialpurpose']; ?></h4>
        <a href="/project/<?php echo $projectItem['id']; ?>">Подробнее</a>
    </div>
<?php endforeach; ?>

<?php echo $pagination->get(); ?>

<?php include ROOT . '/views/layouts/footer.php'; ?>