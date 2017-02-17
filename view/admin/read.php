<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
    table {
        max-width:95%;
    }
    table, th, td {

        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {

        padding: 5px;
        text-align: center;
    }

</style>
<html>
    <title>Административен панел</title>

    <body>

        <h1>Управление на новините</h1>
        <p><a href="/news/">Към сайта</a></p>
        <p><a href="/admin/">Административен панел</a></p>
        <p> <a href="/admin/greate/"><span class="glyphicon glyphicon-plus-sign"></span>Добави нова новина</a></p>

        <table style="width:100%">
              <tr>
                <th>номер на новината</th>
                <th>дата</th> 
                <th>заглавие</th>
                <th>изображение</th>
                <th>съдържание</th>
                <th><p>промени</p></th>
                <th><p>изтрии</p></th>
              </tr>
            <?php foreach ($newsList as $value): ?>

                <tr>
                    <th> <p><?php echo $value['id'] ?></p></th>   
                    <th> <p><?php echo $value['date'] ?></p></th>
                    <th> <h4><?php echo $value['title'] ?></h4></th>
                    <th>  <img src=<?php echo News::Image($value['id']) ?> alt="" width="100" alt=""></th>
                    <th><p><?php echo $value['content'] ?></p></th>
                    <th><a href="/admin/update/<?php echo$value['id'] ?>"><span class="glyphicon glyphicon-pencil"></span>
                    </a></th>
                    <th> <a href="/admin/delete/<?php echo$value['id'] ?>"> <span class="glyphicon glyphicon-remove"></span></a></th>
                </tr>

                <div class="col-sm-4"></div>
            <?php endforeach; ?>

        </table>

    </body>
</html> 