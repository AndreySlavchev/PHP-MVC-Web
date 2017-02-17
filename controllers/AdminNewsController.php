<?php

class AdminNewsController extends AdminBase {

    public function methodIndex() {
        self::checkAdmin();
        $newsList = News::getNewsList();
        require_once (ROOT . '/view/admin/read.php');
        return TRUE;
    }

    public function methodGreate() {


        self::checkAdmin();
        $errors = TRUE;
        $date = '';
        $title = '';
        $content = '';
        if (isset($_POST['submit'])) {
            $date = User::test($_POST['date']);
            $title = User::test($_POST['title']);
            $content = User::test($_POST['content']);
            $errors = FALSE;
        }
        if ($errors == FALSE) {

            $id = News::greatNews($date, $title, $content);


            if (($_FILES['image']['tmp_name'])) {


                move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upload/images/news/' . $id . '.jpg');
            }


            header("Location:/admin/news");
        }




        require_once (ROOT . '/view/admin/greate.php');
        return TRUE;
    }

    public function methodDelete($id) {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            News::deleteNewsById($id);
            header("Location:/admin/news");
        }

        require_once (ROOT . '/view/admin/delete.php');
        return TRUE;
    }

    public function methodUpdate($id) {
        self::checkAdmin();
        $news = News::getNewsById($id);
        if (isset($_POST['submit'])) {
            $date = User::test($_POST['date']);
            $title = User::test($_POST['title']);
            $content = User::test($_POST['content']);


            if (News::updateNewsById($id, $date, $title, $content)) {
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {


                    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upload/images/news/' . $id . '.jpg');
                };
            }
            header("Location:/admin/news");
        }
        require_once (ROOT . '/view/admin/update.php');
        return TRUE;
    }

}
