<?php
namespace TitipInformatika\Data\Controller;
use TitipInformatika\Data\App\View;


class HomeController{

    public function index():void{

        echo "Controller.index()";
    }

    function about(string $name):void{
       $model =[
        'title'=>"Home",
        "content"=>"Home Page"
       ];

      View::render("Home/index",$model);
    }
}