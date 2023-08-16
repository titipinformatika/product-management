<?php
namespace TitipInformatika\Data\App;
use PDO;

class Database{
    private static string $host ="localhost",$port="33061",$db="product_management_test",$username="root",$password="@r1k1Sukses1";

    public static function getConnection(string $mode ="test"):PDO{
        if($mode !="test"){
            self::$db="product_management";
        }
        return new PDO("mysql:host=".self::$host.":".self::$port.";dbname=".self::$db,self::$username,self::$password);
    
    }

    public function cekConnection():void{
        self::getConnection();
        echo "Success Connect Database ".self::$db;
    }

    public static function clear(string $table){
        $connection = self::getConnection();
        $sql = "TRUNCATE TABLE $table";
        $connection->exec($sql);
    }

}