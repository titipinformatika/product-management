<?php
namespace TitipInformatika\Data\Repository;
use TitipInformatika\Data\Model\Product;

interface ProductRepository{

    public function save(Product $product):Product;
    
    public function delete(int $id):bool;

    public function findById(int $id):?Product;

    public function findAll():array;

    public function edit(Product $product):Product;
    
}