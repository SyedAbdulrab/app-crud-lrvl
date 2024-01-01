<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Laravel CRUD Application with Bootstrap

This is a CRUD (Create, Read, Update, Delete) application built with Laravel. It allows you to manage products, including creating, viewing, updating, and deleting product records.

##  Features

- **Create:** Add new products to the database.
- **Read:** View a list of existing products with details.
- **Update:** Edit product information.
- **Delete:** Remove products from the database.

## User Interface
- All products Page

  ![image](https://github.com/SyedAbdulrab/app-crud-lrvl/assets/99114574/fb507084-66a8-4dd7-ae1d-c43dbb4d4123)

- Create Product Page
  ![image](https://github.com/SyedAbdulrab/app-crud-lrvl/assets/99114574/44b1da79-c757-4ec1-9afb-06f0dadfe39c)

- Edit Product Page
  ![image](https://github.com/SyedAbdulrab/app-crud-lrvl/assets/99114574/4ba7917e-aa3e-4672-a0c0-44e1d6233242)

- Error Handling
  ![image](https://github.com/SyedAbdulrab/app-crud-lrvl/assets/99114574/ac346f5d-482e-4271-9082-e9f34cb233dc)

- Product Deletion
  ![image](https://github.com/SyedAbdulrab/app-crud-lrvl/assets/99114574/4933cd9b-3b8f-448f-94e5-62b8dc61662e)


## Getting Started

These instructions will help you set up and run the Laravel CRUD application on your local machine.

### Prerequisites

Make sure you have the following software installed on your machine:

- PHP
- Composer
- Laravel CLI
- MySQL or any other database system supported by Laravel

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/SyedAbdulrab/laravel-crud-app.git
    ```

2. Navigate to the project directory:

    ```bash
    cd laravel-crud-app
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration in the `.env` file with your database credentials.

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Run database migrations:

    ```bash
    php artisan migrate
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

8. Open your browser and visit [http://localhost:8000](http://localhost:8000) to access the application.

## Usage

1. **Create a Product:**
   - Click on the "Create Product" button on the home page.
   - Fill in the product details and click "Save a new Product."

2. **View Products:**
   - All products are displayed on the home page.
   - Click on "View Details" for more information about a specific product.

3. **Update a Product:**
   - Click on the "Edit" button next to a product.
   - Modify the product details and click "Save Changes."

4. **Delete a Product:**
   - Click on the "Delete" button next to a product.
   - Confirm the deletion.

## Contributing

If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and submit a pull request.

