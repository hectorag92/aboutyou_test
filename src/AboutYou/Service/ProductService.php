<?php

namespace AboutYou\Service;

class ProductService implements ProductServiceInterface{
	private $productService;

	public function __construct(ProductServiceInterface $productService){
		$this->productService = $productService;
	}

	public function getProductsForCategory($categoryName){
		return $this->productService->getProductsForCategory($categoryName);
	}
}