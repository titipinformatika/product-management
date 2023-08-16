<?php
namespace TitipInformatika\Data\Repository\Impl;
use PDO;
use TitipInformatika\Data\App\Database;
use TitipInformatika\Data\Model\Category;
use TitipInformatika\Data\Repository\CategoryRepository;
class CategoryRepositoryImpl implements CategoryRepository{

    private  ?PDO $connection;
    public function __construct(){
        $this->connection = Database::getConnection();
    }

    public function save(Category $category):Category{
        $sql ="INSERT INTO category(name) VALUES (?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$category->getName()]);
        $id = $this->connection->lastInsertId();
        return $this->findById($id);
    }

    public function delete(int $id):bool{
        if($this->findById($id)!==null){
            $sql = "DELETE FROM category WHERE id =?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);
            if($statement->rowCount()>0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

    public function findById(int $id):?Category{
        $sql = "SELECT * FROM category WHERE id =?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
        if($result = $statement->fetch()){
            $category = new Category();
            $category->setId($result['id']);
            $category->setName($result['name']);
            return $category;
        }

        return null;
    }

    public function findAll():array{
        $result=[];
        $sql = "SELECT * FROM category";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        while ($row = $statement->fetch()) {
            $category = new Category();
            $category->setId($row['id']);
            $category->setName($row['name']);
            $result[]=$category;
            
        }
        return $result;
    }

    public function edit(Category $category):Category{
        $sql ="UPDATE FROM category SET (name = ?) WHERE id =?";
        $statement=$this->connection->prepare($sql);
        $statement->execute([$category->getName(),$category->getId()]);
        return $this->findById($category->getId());
    }

    public function __destruct(){
        $this->connection =null;
    }

}