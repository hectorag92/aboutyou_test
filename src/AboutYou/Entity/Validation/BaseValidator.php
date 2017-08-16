<?php

namespace AboutYou\Entity\Validation;

abstract class BaseValidator{
	protected $messages = [];
	protected $entity = [];
	protected $validation_params = [];

	public function __construct($entity,$validation_params = []){
		$this->entity = $entity;
		$this->validation_params = $validation_params;
	}

	abstract function isValid();

	public function getMessages(){
		return $this->messages;
	}
}