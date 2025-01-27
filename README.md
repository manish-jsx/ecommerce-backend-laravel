**E-commerce Backend System (MVP):**

We'll aim for a functional, basic implementation that demonstrates the key technologies and concepts.

**Key Components (MVP Focus):**

*   **Laravel API:**
    *   Product Listing (GET products)
    *   Basic User Authentication (Register, Login) using JWT
    *   Basic Product Creation (POST product, only for admin users)
*   **MySQL Database:**
    *   `products` table (id, name, description, price, created_at, updated_at)
    *   `users` table (id, name, email, password, is_admin, created_at, updated_at)
*   **Redis:**
    *   Caching of product listings (for performance)
*   **JWT Authentication:**
    *   Generate and verify JWT tokens.
*   **Basic Docker setup** (Single Dockerfile for development)
*   **No Elasticsearch or RabbitMQ for MVP**


# API Documentation

This project provides API documentation for the various endpoints available in the application. The documentation is structured into different sections for easy navigation.

## Project Structure

- **resources/views/docs/auth/**: Contains documentation for authentication-related endpoints.
  - `login.blade.php`: Documentation for the login endpoint.
  - `logout.blade.php`: Documentation for the logout endpoint.
  - `me.blade.php`: Documentation for retrieving the authenticated user's information.
  - `register.blade.php`: Documentation for the registration endpoint.

- **resources/views/docs/categories/**: Contains documentation for category-related endpoints.
  - `index.blade.php`: Documentation for retrieving a list of categories.
  - `show.blade.php`: Documentation for retrieving a specific category by ID.
  - `store.blade.php`: Documentation for creating a new category.
  - `update.blade.php`: Documentation for updating an existing category.
  - `destroy.blade.php`: Documentation for deleting a category.

- **resources/views/docs/products/**: Contains documentation for product-related endpoints.
  - `index.blade.php`: Documentation for retrieving a list of products.
  - `show.blade.php`: Documentation for retrieving a specific product by ID.
  - `store.blade.php`: Documentation for creating a new product.
  - `update.blade.php`: Documentation for updating an existing product.
  - `destroy.blade.php`: Documentation for deleting a product.

- **resources/views/docs/layout/**: Contains layout templates for the documentation.
  - `app.blade.php`: Main layout template.
  - `nav.blade.php`: Navigation template for the documentation.

- **resources/views/docs/index.blade.php**: Main entry point for the API documentation.

## Setup

To set up the API documentation, ensure you have the necessary dependencies installed and run the application. You can access the documentation through the defined routes in `routes/web.php`.
