<?php include ROOT . '/views/layouts/header.php'; ?>
<p>main</p>
    <?php foreach($categories as $categoryItem): ?>
        <div>
            <a href="/category/<?php echo $categoryItem['id']; ?>">
                <h4><?php echo $categoryItem['title']; ?></h4>
            </a>
        </div>
    <?php endforeach; ?>
<hr>
<?php foreach($latestProjects as $projectItem): ?>
    <div>
        <h3><?php echo $projectItem['title']; ?></h3>
        <p><?php echo $projectItem['description']; ?></p>
        <h4><?php echo $projectItem['financialpurpose']; ?></h4>
        <a href="/project/<?php echo $projectItem['id']; ?>">Подробнее</a>
    </div>
<?php endforeach; ?>

<?php include ROOT . '/views/layouts/footer.php'; ?>