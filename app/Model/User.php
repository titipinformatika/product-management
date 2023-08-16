<?php

namespace TitipInformatika\Data\Model;

class User{
    
    private $id,$name,$username,$password;
	/**
	 * @return mixed
	 */
	public function getId():string {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return void
	 */
	public function setId($id): void {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getName():string {
		return $this->name;
	}
	
	/**
	 * @param mixed $name 
	 * @return void
	 */
	public function setName($name): void {
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getPassword():string {
		return $this->password;
	}
	
	/**
	 * @param mixed $password 
	 * @return void
	 */
	public function setPassword($password): void {
		$this->password = $password;
	}
}