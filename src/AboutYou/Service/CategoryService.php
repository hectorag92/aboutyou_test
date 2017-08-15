<?php

namespace AboutYou\Service;
use AboutYou\Entity\{Category,Product,Variant,Price};

class CategoryService implements CategoryServiceInterface{
	public function getProducts($categoryId){
		//Supossed one file per category, as the file name suggests
		$file_uri = __DIR__."/../../../data/".$categoryId.".json";
		$source_file = file_get_contents($file_uri);

		$category_data = json_decode($source_file);

		$category = new Category($category_data->id,$category_data->name);

		foreach($category_data->products as $product_id => $product_data){
			$new_product = new Product($product_id,$product_data->name,$product_data->description);
			foreach($product_data->variants as $variant_id => $variant_data){
				$new_variant = new Variant($variant_id,$variant_data->isDefault,$variant_data->isAvailable,$variant_data->quantity,$variant_data->size,$new_product);
				$new_price = new Price($variant_data->price->current,$variant_data->price->old,$variant_data->price->isSale,$new_variant);
				$new_variant->setPrice($new_price);
				$new_product->addVariant($new_variant);
			}
			$category->addProduct($new_product);
		}
		return $category->getProducts();
	}
}