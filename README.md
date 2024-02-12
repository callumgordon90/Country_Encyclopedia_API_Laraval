# Laravel Project

Welcome to the Laravel Project! This project is a RESTful API built using the Laravel framework. It provides endpoints for managing countries, user authentication, and password reset functionalities.

## How to Use the Application

To use the application, follow these steps:

* Clone the repository to your local machine.
* Install dependencies by running `composer install`.
* Set up your environment variables by copying the `.env.example` file to `.env` and configuring the database connection and other settings.
* Generate an application key by running `php artisan key:generate`.
* Run database migrations and seeders to set up the database schema and initial data: `php artisan migrate --seed`.
* Start the Laravel development server by running `php artisan serve`.

Once the server is running, you can make HTTP requests to the available endpoints using tools like Postman or cURL.

## Project Structure

```

The project follows a standard Laravel directory structure:

laravel_project/
├── app/
│ ├── Console/
│ ├── Events/
│ ├── Exceptions/
│ ├── Http/
│ │ ├── Controllers/ <-- Contains controllers for handling HTTP requests
│ │ │ ├── Auth/
│ │ │ ├── CountryController.php <-- Controller for managing countries
│ │ │ ├── UserController.php <-- Controller for user management
│ │ │ └── AuthController.php <-- Controller for authentication
│ │ ├── Middleware/
│ │ └── ...
│ ├── Models/ <-- Contains database models
│ └── Providers/
├── ...
└── ...
```


## Available Endpoints

### Countries

* **GET /api/countries**: Get all countries.
* **GET /api/countries/{id}**: Get a specific country by ID.
* **POST /api/countries**: Create a new country.
* **PUT /api/countries/{id}**: Update an existing country.
* **DELETE /api/countries/{id}**: Delete a country.
* **GET /api/country/search**: Search/filter countries by various criteria.

### Authentication

* **POST /api/auth/register**: Register a new user.
* **POST /api/auth/login**: Login user.

### Password Reset

* **POST /api/auth/create-password-reset-token**: Generate a password reset token.

