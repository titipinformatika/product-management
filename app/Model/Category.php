<?php
namespace TitipInformatika\Data\Model;

class Category{

    private string $id,$name;
	/**
	 * @return string
	 */
	public function getId(): string {
		return $this->id;
	}
	
	/**
	 * @param string $id 
	 * @return void
	 */
	public function setId(string $id): void {
		$this->id = $id;
		
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}
	
	/**
	 * @param string $name 
	 * @return void
	 */
	public function setName(string $name): void {
		$this->name = $name;
		
	}
}