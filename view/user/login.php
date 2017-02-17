<?php include (ROOT . '/view/layouts/header.php'); ?>

<div class="container">
    <?php if ($result): ?>
        <p>Вие се регистрирахте успешно.</p>
    <?php else: ?>

        <style>
            .error {color: #FF0000;}
        </style>
        
        <h2>Влез в твоя профил</h2>
        <form action="#" method="post" class="form-horizontal">

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Вашият Email:</label>
                <div class="col-sm-4">
                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="email" placeholder="Въведете email">
                </div> <span class="error"><?php echo $errorsEmail ?><?php echo $errorsEmailExit ?></span>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Парола:</label>
                <div class="col-sm-4">
                    <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" id="pwd" placeholder="Въведете парола">
                </div> <span class="error"><?php echo $errorsPass ?></span>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">

                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit"  class="btn btn-default">Потвърди</button>
                </div>
            </div>
            
        </form>
    <?php endif; ?>
</div>



</body>
</html>



