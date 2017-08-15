<?php

namespace AboutYou\Entity;

class Variant
{
    /**
     * Id of the Variant.
     *
     * @var int
     */
    private $id;

    /**
     * Defines if the Variant is default for the product.
     *
     * @var bool
     */
    private $isDefault;

    /**
     * Defines if the Variant is Available or not.
     * 
     * @var bool
     */
    private $isAvailable;

    /**
     * Number of available items in stock.
     *
     * @var int
     */
    private $quantity;

    /**
     * Size of the Variant.
     *
     * @var mixed
     */
    private $size;

    /**
     * Variant price.
     * 
     * @var \AboutYou\Entity\Price
     */
    private $price;

    /**
     * Product that the Variant belongs to.
     *
     * @var \AboutYou\Entity\Product
     */
    private $product;

    public function __construct(int $id, bool $isDefault, bool $isAvailable, bool $quantity, $size, Product $product){
        $this->id = $id;
        $this->isDefault = $isDefault;
        $this->isAvailable = $isAvailable;
        $this->quantity = $quantity;
        $this->size = $size;
        $this->product = $product;
    }

    public function getId(){
        return $this->id;
    }

    public function getIsDefault(){
        return $this->isDefault();
    }

    public function setIsDefault(bool $isDefault) { 
        $this->isDefault = $isDefault;
    }

    public function getIsAvailable(){
        return $this->isAvailable();
    }

    public function setIsAvailable(bool $isAvailable){
        $this->isAvailable = $isAvailable;
    }

    /*
    *
    * Quantity would have additional functions such as add or sub. Not included
    * as it is not required.
    * Same for additional checks (for example, disabling availability when
    * quantity reaches zero), which is included in the second goal task
    *
    */
    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize(mixed $size){
        $this->size = $size;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice(Price $price){
        $this->price = $price;
    }

    public function getProduct(){
        return $this->product;
    }

    public function setProduct(Product $product){
        $this->price = $price;
    }
}
