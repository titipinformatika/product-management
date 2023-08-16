<?php
namespace TitipInformatika\Data\Repository\Impl;
use PDO;
use PHPUnit\Framework\TestCase;
use TitipInformatika\Data\App\Database;
use TitipInformatika\Data\Model\Category;
use TitipInformatika\Data\Repository\CategoryRepository;
class CategoryRepositoryImplTest extends TestCase{

    private ?PDO $connection;
    private CategoryRepository $repository;
    public function setUp():void{
        $this->connection =  Database::getConnection();
        $this->repository = new CategoryRepositoryImpl();
    }

    public function testSaveSuccess(){
        // Database::clear("category");

        $category = new Category();
        $category->setName("Hand Phone");
        $result= $this->repository->save($category);
        self::assertSame($result->getName(),$category->getName());
    }

    public function testFindById(){
        $result = $this->repository->findById(1);
        self::assertEquals(1,$result->getId());
        self::assertSame("Hand Phone",$result->getName());
    }

}