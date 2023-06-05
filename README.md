# Icon Creations Backend Task

This is a task for Icon Creations. It includes API endpoints for user login, logout, and logging out other devices.

## Contact

If you have any questions or need assistance, please feel free to contact us at:

Email: mahmoud201411hotmailcom@gmail.com
Phone:  +201116650728

## Installation

To use this project, make sure you have the following requirements:

- Laravel 9
- PHP 8.2 or above

Follow these steps to set up the project:

1. Clone the repository:

   ```shell
   git clone https://github.com/Mahmoud72E/task_icon.git
   ```

2. Install dependencies using Composer:

   ```shell
   composer install
   ```

3. Create a copy of the '.env.example' file and rename it to '.env'. Then, update the database and other configuration settings in the '.env' file.

4. Generate an application key:

   ```shell
   php artisan key:generate
   ```

5. Run the database migrations and seeders:

   ```shell
   php artisan migrate --seed
   ```

6. Serve the application locally:

   ```shell
   php artisan serve
   ```

7. Open your web browser and visit 'http://127.0.0.1:8000/' to access the application.

## API Endpoints

The project provides the following API endpoints:

```shell
POST /api/login
```
    - Log in the user. Requires 'email' and 'password' parameters.
    - Notes: Replace the email with 'mahmoud@icon-creations.com' and password with 'password'.

```shell
POST /api/logout
```
:Log out the user.
  - Notes: add '{token}' with the actual token obtained after successful login.

 ```shell
POST /api/logout-other-tokens
```
: Log out other tokens/devices for the authenticated user.
  - Notes: add '{token}' with the actual token obtained after successful login.

Make sure to include the necessary authentication headers when making API requests.
