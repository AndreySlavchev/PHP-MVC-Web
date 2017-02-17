<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html>
    <title>Административен панел</title>
    <body>

        <h1>Редактиране на новина</h1>
        <p><a href="/news/">Към сайта</a></p>
        <p><a href="/admin/news/">Управление</a></p>

        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Дата</label>
                <div class="col-sm-2">
                    <input type="text" name="date"  class="form-control" id="email" placeholder="" value="<?php echo $news['date']; ?>">
                </div> 
                <span class="error"></span>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Загалвие</label>
                <div class="col-sm-2">
                    <input type="text" name="title"  class="form-control" id="email" placeholder="" value="<?php echo $news['title']; ?>">
                </div> 
                <span class="error"></span>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Съдържание</label>
                <div class="col-sm-4">
                    <textarea class="form-control" name="content"  rows="5" id="comment"> <?php echo $news['content']; ?></textarea>
                </div> 
                <span class="error"></span>
            </div>

            <div class="form-group">  
                <label class="control-label col-sm-2" for="name"></label>

                <div class="col-sm-4">
                    <p> <img src=<?php echo News::Image($news['id']) ?> alt="" width="100" alt="">  </p>
                    <input type="file" name="image" placeholder="" value="<?php echo News::Image($news['id']) ?>">
                </div> 
                <span class="error"></span>
            </div>

            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit"  class="btn btn-default">Потвърди</button>
            </div>

        </form>

