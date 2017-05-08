<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/template/css/style.css" type="text/css">
</head>
<body>
    <div>
        <h2><?php echo $newsItem['title']; ?></h2>
        <h4><?php echo $newsItem['date']; ?></h4>
        <p><?php echo $newsItem['content']; ?></p>
        <a href="/news">Вернуться к новостям</a>
    </div>
</body>
</html>