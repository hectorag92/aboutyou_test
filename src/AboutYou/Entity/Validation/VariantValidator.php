<?php

namespace AboutYou\Entity\Validation;

class VariantValidator extends BaseValidator{
	
	public function isValid(){
		/*
		*	I decided to take this approach for conciseness and developing a solution in the recommended time
		*	However, I think the ideal implementation should have some default validator class (i.e NotNullPropertyValidator or PositiveIntegerValidator) 
		*	and allow further development for more class dependent validations 
		*/

		if(empty($this->entity->getId())){
			$this->_messages[] = "ID cannot be null";
		}

		if($this->entity->getQuantity() < 0){
			$this->_messages[] = "A quantity cannot be negative";
		}

		if(($this->entity->getQuantity() == 0) && $this->entity->getIsAvailable()){
			$this->messages[] = "There cannot be an available variant with no stock";
		}

		if(empty($this->entity->getSize())){
			$this->messages[] = "The variant must have a size defined";
		}

		if(empty($this->entity->getPrice())){
			$this->messages[] = "The variant must have a price defined";
		}

		if(empty($this->entity->getProduct())){
			$this->messages[] = "The variant is not assigned to a product";
		}
		
		return (count($this->messages) <= 0);
	}
}