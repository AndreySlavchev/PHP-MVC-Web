<?php

class AdminController extends AdminBase {

    public function methodIndex() {

        self::checkAdmin();

        require_once (ROOT . '/view/admin/index.php');
        return TRUE;
    }

}
