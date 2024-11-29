<?php

use Illuminate\Support\Facades\Route;
use Webkul\DeleteApi\Http\Controllers\DeleteController;

Route::prefix('api/v1/delete')->group(function () {
    
    Route::delete('products/{id}', [DeleteController::class, 'deleteProduct'])->name('api.delete.products');
    Route::delete('categories/{id}', [DeleteController::class, 'deleteCategory'])->name('api.delete.categories');

    // New routes for deletion by SKU and Code
    Route::delete('products/sku/{sku}', [DeleteController::class, 'deleteProductBySku'])->name('api.delete.products.sku');
    Route::delete('categories/code/{code}', [DeleteController::class, 'deleteCategoryByCode'])->name('api.delete.categories.code');
    
    Route::delete('attributes/code/{code}', [DeleteController::class, 'deleteAttributeByCode'])->name('api.delete.attributes.code');

});
