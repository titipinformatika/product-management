<?php
namespace TitipInformatika\Data\App;
class Routers{

    private static array $routers=[];

    public static function add(string $method,string $path,string $controller, string $function, array $middlewares=[]):void{

        self::$routers[]=[
            "method"=>$method,
            "path"=>$path,
            "controller"=>$controller,
            "function"=>$function,
            "middlewares"=>$middlewares
        ];

    }

    public static function run():void{
        // lakukan perulangan 
        $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO']:"/";
        $method = $_SERVER['REQUEST_METHOD'];
        foreach(self::$routers as $route){
            $pattern = '#^'.$route['path'].'$#';
            if(preg_match($pattern,$path,$match) && $method == $route['method']){
                $controller= new $route['controller'];
                $function = $route['function'];
              

                array_shift($match);
                call_user_func_array([$controller,$function],$match);

            return;
            }

        }

        http_response_code(404);
        echo "Controller Not Found".PHP_EOL;

    }
}