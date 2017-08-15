<?php

namespace AboutYou\Entity;

class Category
{
    /**
     * Id of the Category.
     *
     * @var int
     */
    private $id;

    /**
     * Name of the Category.
     *
     * @var string
     */
    private $name;

    /**
     * List of Products that belong to a Category.
     *
     * @var \AboutYou\Entity\Product[]
     */
    private $products = [];

    public function __construct(int $id, String $name, array $products = []){
        $this->id = $id;
        $this->name = $name;
        $this->products = $products;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(String $name){
        $this->name = $name;
    }

    public function addProduct(Product $product){
        $this->products[] = $product;
    }

    public function getProducts(){
        return $this->products;
    }
}
