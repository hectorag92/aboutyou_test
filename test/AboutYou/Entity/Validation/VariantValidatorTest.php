<?php

use PHPUnit\Framework\TestCase;
use AboutYou\Entity\{Product,Variant,Price};
use AboutYou\Entity\Validation\VariantValidator;

final class VariantValidatorTest extends TestCase{
	/*
	*
	*	Included one example of valid entity and another invalid one.
	*	Real case implementation should have many more tests.
	*
	*/
	public function testValidVariant(){
		$product = new Product(1,"Test product","Test product description");
		$variant = new Variant(1,true,true,2,"XL",$product);
		$price = new Price(5,null,false,$variant);
		$variant->setPrice($price);
		$variantValidator = new VariantValidator($variant);

		$this->assertTrue($variantValidator->isValid());
	}

	public function testInvalidVariantNoPrice(){
		$product = new Product(1,"Test product","Test product description");
		$variant = new Variant(1,true,true,2,"XL",$product);
		$variantValidator = new VariantValidator($variant);

		$this->assertFalse($variantValidator->isValid());

		echo "\ntestInvalidVariantNoPrice ---> Errors shown:\n".implode("\n", $variantValidator->getMessages());
	}
}