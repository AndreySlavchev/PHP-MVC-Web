<?php include (ROOT . '/view/layouts/header.php'); ?>
<div class="row">
    <?php foreach ($newsList as $value): ?>
        <div class="col-sm-4">
            <a href="<?php echo $value['id'] ?>">
                <img src=<?php echo News::Image($value['id']) ?> alt="" width="200" alt="">
                <h3><?php echo $value['title'] ?></h3>
            </a>
            <p><?php echo $value['date'] ?></p>
            <p><?php echo $value['content'] ?></p>
        </div>
    <?php endforeach; ?>

</div>
</div>

</body>
</html>


