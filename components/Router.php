<?php
/**
 *Router е  Class в нашия front controller, 
 * който прави анализ на заявката и определя кой контролер и метод който ще отработва тази заявка 
 */

class Router {

    private $rorutes;

    public function __construct() {
        $this->rorutes = require_once (ROOT . '/config/routes.php');
    }
     /**
     * Връща заявката от адресната лента
     */
    private function getURI() {
        if ($_SERVER["REQUEST_URI"]) {
            return trim($_SERVER["REQUEST_URI"], '/');
        }
    }

    public function run() {

    // Записваме в $uri заявката от адресната лента
        $uri = $this->getURI();
    // в $uriPatern записваме шаблонната заявка а в $path пътя за обработка
        foreach ($this->rorutes as $uriPatern => $path) {

    // Проверяваме дали има съвпадение м/у шаблонната заявка и заявката от адресната лента
            if (preg_match("^$uriPatern^", $uri)) {

                $internalPath = preg_replace("^$uriPatern^", $path, $uri);

                $segments = explode('/', $internalPath);
    // Получаване името на контролера
                $contollerName = ucfirst(array_shift($segments)) . 'Controller';
    // Получаване името на метода
                $methodName = 'method' . ucfirst(array_shift($segments));
    // Получаване на параметрите          
                $paramers = $segments;
    // Свързване на файла на класа контролера и включването му в нашия файл Router.php.
                $controllerPath = ROOT . '/controllers/' . $contollerName . '.php';
                if ($controllerPath) {
                    require_once ($controllerPath);
    // създаване на обект                
                    $controllerObject = new $contollerName;
    // обръщаме се към метода $methodName в обекта $controllerObject 
    // при което предаваме нашия масив с параметри $paramers
                    $result = call_user_func_array(array($controllerObject, $methodName), $paramers);
     // Ако успешно сме се обърнали към метода в контролера свършва работата на рутера
                    if (!$result = NULL) {
                        break;
                    }
                }
            }
        }
    }

}
