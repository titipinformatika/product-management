<?php
namespace TitipInformatika\Data\Repository;
use TitipInformatika\Data\Model\User;

interface UsersRepository{

    public function save(User $user):User;

    public function delete(int $id):bool;

    public function findById(int $id):?User;

    public function findAll():array;

    public function edit(User $user):User;
    
}