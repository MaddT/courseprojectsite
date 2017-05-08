<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/template/css/style.css" type="text/css">
</head>
<body>
    <?php foreach($newslist as $newsItem): ?>
        <div>
            <h2><?php echo $newsItem['title']; ?></h2>
            <h4><?php echo $newsItem['date']; ?></h4>
            <p><?php echo $newsItem['short_content']; ?></p>
            <a href="/news/<?php echo $newsItem['id']; ?>">Перейти к новости</a>
        </div>
    <?php endforeach; ?>
</body>
</html>