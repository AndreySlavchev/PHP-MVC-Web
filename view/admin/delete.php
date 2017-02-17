<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
    <title>Административен панел</title>
    <body>
        <table>
            <h1>Изтриване на новина</h1>
            <p><a href="/news/">Към сайта</a></p>
            <p><a href="/admin/news/">Управление на новините</a></p>
            <p>Наистина ли искате да изтриете новина:   <?php echo $id ?> ? </p>
            <form method="post">

                <input type="submit" name="submit" value="ИЗТРИЙ">
            </form>


        </table>

    </body>
</html> 


