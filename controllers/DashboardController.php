<?php

class DashboardController {

    public function methodIndex() {

        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        require_once (ROOT . '/view/dashboard/index.php');
        return TRUE;
    }

}
