<?php include ROOT . '/views/layouts/header.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <h4>По категориям</h4>
                <ul class="nav nav-pills nav-stacked">
                <?php foreach($categories as $categoryItem): ?>
                    <li>
                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                            <?php echo $categoryItem['title']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>


            <div class="col-sm-9">
                <?php foreach($latestProjects as $projectItem): ?>
                    <div>
                        <h3><?php echo $projectItem['title']; ?></h3>
                        <p><?php echo $projectItem['description']; ?></p>
                        <h4><?php echo $projectItem['financialpurpose']; ?></h4>
                        <a href="/project/<?php echo $projectItem['id']; ?>">Подробнее</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>