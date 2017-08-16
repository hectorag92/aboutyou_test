<?php

use PHPUnit\Framework\TestCase;
use AboutYou\Service\{CategoryService,ProductService,UnorderedProductService};

final class ProductServiceTest extends TestCase{
	/*
	*
	*	Very basic tests included
	*
	*/
	public function testValidProductCategory(){
		$category_service = new CategoryService();
		$unorderedProductService = new UnorderedProductService($category_service);
		$productService = new ProductService($unorderedProductService);
		$products = $productService->getProductsForCategory('Clothes');
		
		$this->assertEquals(count($products),2);

		echo "\n\ntestValidProductCategory---> Product list\n";
		print_r($products);
	}

	public function testInvalidProductCategory(){
		$this->expectException(InvalidArgumentException::class);
        
		$category_service = new CategoryService();
		$unorderedProductService = new UnorderedProductService($category_service);
		$productService = new ProductService($unorderedProductService);
		$products = $productService->getProductsForCategory('Shoes');
	}
}