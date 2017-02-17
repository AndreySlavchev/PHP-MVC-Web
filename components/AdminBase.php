<?php
/**
 * Абстрактен клас AdminBase
 * Проверяваме дали потребителя има права на администратор
 * В класа AdminNewsController във всеки един метод правиме тази проверка
 */
abstract class AdminBase {

    public static function checkAdmin() {

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        if ($user['role'] == 'admin') {
            return true;
        }

        die('Access denied');
    }

}
