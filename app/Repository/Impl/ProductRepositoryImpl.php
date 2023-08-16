<?php
namespace TitipInformatika\Data\Repository\Impl;
use PDO;
use TitipInformatika\Data\App\Database;
use TitipInformatika\Data\Model\Category;
use TitipInformatika\Data\Model\Product;
use TitipInformatika\Data\Repository\ProductRepository;
class ProductRepositoryImpl implements ProductRepository{
   
    private ?PDO $connection;
    public function __construct(){
      $this->connection = Database::getConnection();
    }

    public function save(Product $product):Product{


    }

    public function delete(int $id):bool{

    }

    public function findById(int $id):?Product{
        
    }

    public function findAll():array{

    }

    public function edit(Product $product):Product{

    }

    public function __destruct(){
        $this->connection = null;
    }
}