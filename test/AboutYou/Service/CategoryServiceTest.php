<?php

use PHPUnit\Framework\TestCase;
use AboutYou\Service\CategoryService;

final class CategoryServiceTest extends TestCase{
	/*
	*
	*	Very basic tests included
	*
	*/
	public function testValidCategoryService(){
		$category_service = new CategoryService();
		$products = $category_service->getProducts(17325);
		
		$this->assertEquals(count($products),2);

		echo "\n\ntestValidCategoryService---> Product list\n";
		print_r($products);
	}
}