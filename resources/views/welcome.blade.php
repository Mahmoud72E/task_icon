<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Creations - Backend Task</title>
    <!-- Add Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <!-- Add Font Awesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Add your custom CSS styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .logo {
            width: 200px;
            height: auto;
        }

        .color {
            color: #0066cc;
        }

        .headline {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .icon {
            margin-right: 5px;
        }

        .table-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .table-vertical th,
        .table-vertical td {
            padding: 10px 20px;
            border-top: none;
            border-bottom: 1px solid #ddd;
        }

        .table-vertical th {
            font-weight: bold;
            width: 150px;
            color: #555;
        }

        .table-vertical td {
            color: #333;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mt-5">
            <img src="https://icon-creations.com/images/icon-creations-logo.png" alt="Logo" class="logo">
        </div>

        <h1 class="text-center mt-3 color">Icon Creations</h1>
        <h2 class="text-center headline">Backend Task</h2>

        <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="headline"><i class="fas fa-sign-in-alt icon"></i>Login</h3>
                <p class="text-center">Already have an account? Click below to login:</p>
                <a href="{{ route('login') }}" class="btn btn-primary d-block mx-auto"><i class="fas fa-sign-in-alt icon"></i>Login</a>
            </div>

            <div class="col-md-6">
                <h3 class="headline"><i class="fas fa-user-plus icon"></i>Register</h3>
                <p class="text-center">New user? Register an account:</p>
                <a href="{{ route('register') }}" class="btn btn-success d-block mx-auto"><i class="fas fa-user-plus icon"></i>Register</a>
            </div>
        </div>

        <hr>

        <div class="table-container mx-auto mt-auto">
            <h3 class="text-center headline"><i class="fas fa-phone icon"></i>Contact Information</h3>
            <table class="table table-vertical mx-auto">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>Mahmoud Mohamed</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>mahmoud201411hotmailcom@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>+201116650728</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <footer class="footer mt-5">
            <p class="mb-0">This task was completed by Mahmoud Electron. Contact: mahmoud201411hotmailcom@gmail.com</p>
        </footer>
    </div>

    <!-- Add Bootstrap JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
