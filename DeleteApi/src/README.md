# DeleteApi Plugin for UnoPim

The **DeleteApi** plugin provides APIs to delete products and categories in UnoPim by their unique identifiers, such as ID, SKU, or Code.

## Features

- Delete products by ID or SKU.
- Delete categories by ID or Code.
- Modular and extensible structure.

---

## Installation

1. **Clone the Plugin**

   Place the plugin in the `packages/Webkul/DeleteApi` directory of your UnoPim application.

2. **Register the Plugin**

   Add the service provider to `config/app.php`:

   ```php
   'providers' => [
       // Other service providers
       Webkul\DeleteApi\Providers\DeleteApiServiceProvider::class,
   ],
   ```

3. **Run Composer Dump-Autoload**

   ```bash
   composer dump-autoload
   ```

4. **Clear and Cache Configurations**

   ```bash
   php artisan config:clear
   php artisan config:cache
   ```

---

## API Endpoints

### Delete Product by ID

- **Endpoint:** `DELETE /api/v1/delete/products/{id}`
- **Description:** Deletes a product by its unique ID.
- **Response Example:**

  ```json
  {
      "message": "Product deleted successfully"
  }
  ```

### Delete Product by SKU

- **Endpoint:** `DELETE /api/v1/delete/products/sku/{sku}`
- **Description:** Deletes a product by its unique SKU.
- **Response Example:**

  ```json
  {
      "message": "Product deleted successfully by SKU"
  }
  ```

### Delete Category by ID

- **Endpoint:** `DELETE /api/v1/delete/categories/{id}`
- **Description:** Deletes a category by its unique ID.
- **Response Example:**

  ```json
  {
      "message": "Category deleted successfully"
  }
  ```

### Delete Category by Code

- **Endpoint:** `DELETE /api/v1/delete/categories/code/{code}`
- **Description:** Deletes a category by its unique Code.
- **Response Example:**

  ```json
  {
      "message": "Category deleted successfully by Code"
  }
  ```

---

## Example Usage

### Delete Product by SKU

```bash
curl -X DELETE http://your-domain.com/api/v1/delete/products/sku/example-sku
```

### Delete Category by Code

```bash
curl -X DELETE http://your-domain.com/api/v1/delete/categories/code/example-code
```

---

## Folder Structure

```plaintext
packages/
└── Webkul/
    └── DeleteApi/
        ├── src/
        │   ├── Http/
        │   │   ├── Controllers/
        │   │   │   └── DeleteController.php
        │   │   └── routes.php
        │   └── Providers/
        │       └── DeleteApiServiceProvider.php
        ├── composer.json
        ├── README.md
```

---

## Contributing

Feel free to submit issues or pull requests to enhance the functionality of this plugin.

---

## License

This plugin is open-source and distributed under the [MIT License](https://opensource.org/licenses/MIT).
