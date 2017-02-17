<?php

class User {

    public static function register($email, $password, $name) {
        $cont = DB::getConnect();
        $sql = 'INSERT INTO users (email,password,name) VALUES (:email,:password,:name)';
        $result = $cont->prepare($sql);

        $options = [
            'cost' => 11
        ];
        $hash = password_hash($password, PASSWORD_DEFAULT, $options);

        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $hash, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);


        return $result->execute();
    }

    public static function test($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public static function checkName($name) {


        if (strlen($name) >= 3) {
            echo $name;

            return TRUE;
        }
        return FALSE;
    }

    public static function checkPassword($password) {
        if (strlen($password) >= 6) {
            return TRUE;
        }
        return FALSE;
    }

    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return TRUE;
        }
        return FALSE;
    }

    public static function chechEmailExist($email) {
        $cont = DB::getConnect();

        $sql = 'SELECT COUNT(*) FROM users WHERE email=:email';
        $result = $cont->prepare($sql);

        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()) {

            return TRUE;
        }
        return FALSE;
    }

    public static function checkUserData($email, $password) {


        $cont = DB::getConnect();
        $sql = 'SELECT password,id FROM users WHERE email=:email';
        $result = $cont->prepare($sql);

        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        $hash = $result->fetch();


        if (password_verify($password, $hash['password'])) {
            echo '<br>' . 'Yes';
            return $hash['id'];
        }
        return FALSE;
    }

    public static function getUserById($id) {
        if ($id) {
            $cont = DB::getConnect();

            $result = $cont->query('SELECT*FROM users WHERE id=' . $id);
            $result = $result->fetch();
            return $result;
        }
    }

    public static function auth($userId) {

        $_SESSION['user'] = $userId;
    }

    public static function checkLogged() {

        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
    }

    public static function isAccount() {

        if (isset($_SESSION['user'])) {

            return FALSE;
        }
        return TRUE;
    }

}
