<?php

namespace AboutYou\Entity;

class Price
{
    /**
     * Current price.
     *
     * @var int
     */
    private $current;

    /**
     * Old price.
     *
     * @var int|null
     */
    private $old;

    /**
     * Defines if the price is sale.
     *
     * @var bool
     */
    private $isSale;

    /**
     * Variant that the price belongs to.
     *
     * @var \AboutYou\Entity\Variant
     */
    private $variant;

    public function __construct(int $current, ?int $old, bool $isSale, Variant $variant){
        $this->current = $current;
        $this->old = $old;
        $this->isSale = $isSale;
        $this->variant = $variant;
    }

    public function getCurrent(){
        return $this->current;
    }

    public function setCurrent(int $current){
        $this->current = $current;
    }

    public function getOld(){
        return $this->old;
    }

    public function setOld(int $old){
        $this->old = $old;
    }

    public function getIsSale(){
        return $this->isSale;
    }

    public function setIsSale(bool $isSale){
        $this->isSale = sale;
    }
}
