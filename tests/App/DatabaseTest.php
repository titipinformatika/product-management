<?php
namespace TitipInformatika\Data\App;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase{

    function testConnection(){
        $database = new Database();
        $database->cekConnection();
        $this->expectOutputString("Success Connect Database product_management_test");
    }

}