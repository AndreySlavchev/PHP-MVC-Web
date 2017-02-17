<?php
/**
 * Клас DB
 */
class DB {
// Правиме връзка с базата данни
    public static function getConnect() {
// Получаваме параметрите от файла -  db_paramers.php
        $paramersPath = ROOT . '/config/db_paramers.php';
        $paramers = include ($paramersPath);
//  $paramers е масив       
        $dsn = "mysql:host={$paramers['host']};dbname={$paramers['dbname']};charset=utf8";
        $cont = new PDO($dsn, $paramers['username'], $paramers['password']);

        return $cont;
    }

}
