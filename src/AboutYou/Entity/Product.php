<?php

namespace AboutYou\Entity;

class Product
{
    /**
     * Id of the Product.
     *
     * @var int
     */
    private $id;

    /**
     * Name of the Product.
     *
     * @var string
     */
    private $name;

    /**
     * Description of the Product.
     * 
     * @var string
     */
    private $description;

    /**
     * Unsorted list of Variants with their corresponding prices.
     * 
     * @var \AboutYou\Entity\Variant[]
     */
    private $variants = [];

    public function __construct(int $id, String $name, String $description, array $variants = []){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->variants = $variants;
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

    public function getDescription(){
        return $this->description;
    }

    public function setDescription(String $description){
        $this->description = $description;
    }

    public function addVariant(Variant $variant){
        $this->variants[] = $variant;
    }
}
