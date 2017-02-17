<?php

require_once (ROOT . '/models/News.php');
require_once (ROOT . '/models/User.php');

class NewsController {

    public function methodList() {

        $newsList = array();
        $newsList = News::getNewsList();
        $user = UserName::Name();

        require_once (ROOT . '/view/indexList.php');
        return TRUE;
    }

    public function methodIndex($id) {



        $newsItem = News::getNewsById($id);
        $user = UserName::Name();
        require_once (ROOT . '/view/index.php');
        return TRUE;
    }

    public function methodHome() {
        $user = UserName::Name();
        require_once (ROOT . '/view/home.php');
    }

}
