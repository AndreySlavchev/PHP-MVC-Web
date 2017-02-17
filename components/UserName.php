<?php
// Получаваме името на потебителя
class UserName {

    public static function Name() {
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
        return $user;
    }

}
