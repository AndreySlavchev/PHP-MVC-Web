<?php include (ROOT . '/view/layouts/header.php'); ?>
<div class="row">
    <div class="col-sm-4">
        <img src=<?php echo News::Image($newsItem['id']) ?> alt="" width="200" alt="">
        <h3><?php echo $newsItem['title'] ?></h3>
        <p><?php echo $newsItem['id'] ?></p>
        <p><?php echo $newsItem['date'] ?></p>
        <p><?php echo $newsItem['content'] ?></p>
    </div>

</div>
</div>

</body>
</html>

