<?php

require_once (ROOT . '/models/User.php');

class UserController {

    public function methodLogout() {
        session_start();
        unset($_SESSION['user']);
        header("Location: /");
    }

    public function methodLogin() {
        $name = '';
        $email = '';
        $password = '';
        $result = FALSE;
        $errorsName = $errorsEmail = $errorsPass = '';
        $errorsEmailExit = '';

        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = FALSE;


            if (!User::checkEmail($email)) {
                $errorsEmail = 'Неправилен Email';
                $errors = TRUE;
            }




            if (!User::checkPassword($password)) {
                $errorsPass = 'Паролата трябва да е по-дълга от 6 символа';
                $errors = TRUE;
            }




            //Проверка за съществуващ потребител

            $userId = User::checkUserData($email, $password);
            print_r($userId);

            if ($userId == FALSE) {
                $errorsPass = 'Неправелни данни';
                $errorsEmail = 'Неправелни данни';
            } else {
                User::auth($userId);
                header("Location: /dashboard/");
            }
        }

        require_once (ROOT . '/view/user/login.php');
        return TRUE;
    }

    public function methodRegister() {
        $name = '';
        $email = '';
        $password = '';
        $result = FALSE;
        $errorsName = $errorsEmail = $errorsPass = '';
        $errorsEmailExit = '';

        if (isset($_POST['submit'])) {
            $name = User::test($_POST['name']);
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = FALSE;





            if (!User::checkName($name)) {
                $errorsName = 'Името трябва да е по-дълго от 3 символа';
                $errors = TRUE;
            }

            if (!User::checkEmail($email)) {
                $errorsEmail = 'Неправилен Email';
                $errors = TRUE;
            }


            if (User::chechEmailExist($email)) {
                $errorsEmailExit = 'Този Email съществува';
                $errors = TRUE;
            }

            if (!User::checkPassword($password)) {
                $errorsPass = 'Паролата трябва да е по-дълга от 6 символа';
                $errors = TRUE;
            }

            //Записване на потребител
            if ($errors == FALSE) {
                $result = User::register($email, $password, $name);
            }
        }
        require_once (ROOT . '/view/user/register.php');
        return TRUE;
    }

}
