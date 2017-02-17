<!DOCTYPE html>



<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">

                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Начало</a></li>
                    <li><a href="/news/">Покажи всички новини</a></li>
                    <?php if (User::isAccount()): ?>
                        <li><a href="/user/login/">Влез</a></li> 
                        <li><a href="/user/register/">Регистрация</a></li> 
                    <?php else: ?>
                        <li><a href="/user/logout/">Изход</a></li> 
                        <li><a href="/dashboard/"><span class="glyphicon glyphicon-user"><li><?php echo $user['name']; ?></li></span></a></li> 
                    <?php endif; ?>

                </ul>
            </div>
        </nav>

        <div class="jumbotron text-center">
            <h1>MVC-PHP</h1>
        </div>
        <div class="container">
