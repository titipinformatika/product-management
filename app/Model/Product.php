<?php
namespace TitipInformatika\Data\Model;
use TitipInformatika\Data\Model\Category;
class Product {

    private string $id, $name,$description;
    private int $price,$quantity;
    private Category $category;

    

	/**
	 * @return string
	 */
	public function getId(): string {
		return $this->id;
	}
	
	/**
	 * @param string $id 
	 * @return self
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
	 * @return self
	 */
	public function setName(string $name): void {
		$this->name = $name;
		
	}

	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}
	
	/**
	 * @param string $description 
	 * @return self
	 */
	public function setDescription(string $description): void {
		$this->description = $description;
		
	}

	/**
	 * @return int
	 */
	public function getPrice(): int {
		return $this->price;
	}
	
	/**
	 * @param int $price 
	 * @return self
	 */
	public function setPrice(int $price): void {
		$this->price = $price;
		
	}

	/**
	 * @return int
	 */
	public function getQuantity(): int {
		return $this->quantity;
	}
	
	/**
	 * @param int $quantity 
	 * @return self
	 */
	public function setQuantity(int $quantity): void {
		$this->quantity = $quantity;
		
	}

	/**
	 * @return Category
	 */
	public function getCategory():Category {
		return $this->category;
	}
	
	/**
	 * @param Category $category 
	 * @return self
	 */
	public function setCategory(Category $category): void {
		$this->category = $category;
	}
}