<?php

namespace Webkul\DeleteApi\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Attribute\Repositories\AttributeRepository;

class DeleteController
{
    protected $productRepository;
    protected $categoryRepository;
    protected $attributeRepository; // Add the attribute repository

    public function __construct(ProductRepository $productRepository, CategoryRepository $categoryRepository, AttributeRepository $attributeRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->attributeRepository = $attributeRepository; // Initialize the attribute repository
    }


    // Delete by product ID
    public function deleteProduct(int $id): JsonResponse
    {
        $product = $this->productRepository->find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $this->productRepository->delete($id);
        return response()->json(['message' => 'Product deleted successfully'], 200);
    }

    // Delete by product SKU
    public function deleteProductBySku(string $sku): JsonResponse
    {
        $product = $this->productRepository->findOneByField('sku', $sku);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $this->productRepository->delete($product->id);
        return response()->json(['message' => 'Product deleted successfully by SKU'], 200);
    }

    // Delete by category ID
    public function deleteCategory(int $id): JsonResponse
    {
        $category = $this->categoryRepository->find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $this->categoryRepository->delete($id);
        return response()->json(['message' => 'Category deleted successfully'], 200);
    }

    // Delete by category code
    public function deleteCategoryByCode(string $code): JsonResponse
    {
        $category = $this->categoryRepository->findOneByField('code', $code);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $this->categoryRepository->delete($category->id);
        return response()->json(['message' => 'Category deleted successfully by Code'], 200);
    }
    public function deleteAttributeByCode(string $code): JsonResponse
    {
        $attribute = $this->attributeRepository->findOneByField('code', $code);

        if (!$attribute) {
            return response()->json(['message' => 'Attribute not found'], 404);
        }

        $this->attributeRepository->delete($attribute->id);
        return response()->json(['message' => 'Attribute deleted successfully by Code'], 200);
    }
}

