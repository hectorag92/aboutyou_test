<?php

namespace AboutYou\Service;

/**
 * This class is an (unfinished) example implementation of an unordered product service.
 */
class UnorderedProductService implements ProductServiceInterface
{

    /**
     * Maps from category name to the id for the category service.
     *  
     * @var array
     */
    private $categoryNameToIdMapping = [
        'Clothes' => 17325
    ];

    /**
     * @param CategoryServiceInterface $CategoryService
     */
    public function __construct(CategoryServiceInterface $categoryService)
    {
       $this->categoryService = $categoryService;
    }

    /**
     * @inheritdoc
     */
    public function getProductsForCategory($categoryName)
    {
        if (!isset($this->categoryNameToIdMapping[$categoryName]))
        {
            throw new \InvalidArgumentException(sprintf('Given category name [%s] is not mapped.', $categoryName));
        }

        $categoryId = $this->categoryNameToIdMapping[$categoryName];
        $productResults = $this->categoryService->getProducts($categoryId);
        return $productResults;
    }
}
