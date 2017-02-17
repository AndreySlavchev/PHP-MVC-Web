<!DOCTYPE html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
    <title>Административен панел</title>
    <body>

        <h1>Създаване на нова новина</h1>
        <p><a href="/news/">Към сайта</a></p>
        <p><a href="/admin/news/">Управление на новините</a></p>

        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Дата</label>
                <div class="col-sm-2">
                    <input type="text" name="date" value="" class="form-control" id="email" placeholder="дата">
                </div> 
                <span class="error"></span>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Загалвие</label>
                <div class="col-sm-2">
                    <input type="text" name="title" value="" class="form-control" id="email" placeholder="загалвие">
                </div> 
                <span class="error"></span>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Съдържание</label>
                <div class="col-sm-4">
                    <textarea class="form-control" name="content" rows="5" id="comment"></textarea>
                </div> 
                <span class="error"></span>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="name"></label>
                <div class="col-sm-4">
                    <input type="file" name="image" placeholder="" value="">
                </div> 
                <span class="error"></span>
            </div>

            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit"  class="btn btn-default">Потвърди</button>
            </div>

        </form>

    </body>
</html> 


