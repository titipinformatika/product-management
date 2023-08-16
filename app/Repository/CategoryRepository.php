<?php
namespace TitipInformatika\Data\Repository;
use TitipInformatika\Data\Model\Category;

interface CategoryRepository{

    public function save(Category $category):Category;

    public function delete(int $id):bool;

    public function findById(int $id):?Category;

    public function findAll():array;

    public function edit(Category $category):Category;
          
}