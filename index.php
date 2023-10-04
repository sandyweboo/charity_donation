<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for styling */
        body {
            background-color: #f0f0f0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div box d-flex align-content-center id="singup">
        <div class="container mt-5 ">

            <h2 class="text-center">User Registration</h2>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password"
                    required>
            </div>
            <div class="row">

                <div class="col-8">
                    <button type="button" class=" col-12 btn btn-primary d-grid" onclick="singup();">create new
                        account</button>
                </div>

                <div class="col-4">
                    <button type="button" onclick="change();" class=" col-12 btn btn-dark d-grid">login Here</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="box d-none " id="login">
        <div class="container mt-5 ">


            <h2 class="text-center"> User Login </h2>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email1" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password1" placeholder="Enter your password" required>
            </div>

            <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="cm">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>  <div class="row">

                <div class="col-6">
                    <button type="button" class=" col-12 btn btn-primary d-grid" onclick="login();">Login here</button>
                </div>

                <div class="col-6">
                    <button type="button" onclick="change();" class=" col-12 btn btn-dark d-grid">Register</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>