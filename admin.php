<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for styling */
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            color: #ffffff;
        }
        .navbar {
            background-color: #ffffff;
        }
        .content {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <!-- Add user profile and settings here -->
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
    <div class="position-sticky">
        <!-- Sidebar content, including menus -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addDonation.php">
                    Donations
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="causesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Causes
                </a>
                <ul class="dropdown-menu" aria-labelledby="causesDropdown">
                    <li><a class="dropdown-item" href="#">Cause 1</a></li>
                    <li><a class="dropdown-item" href="#">Cause 2</a></li>
                    <!-- Add more causes as needed -->
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Users
                </a>
            </li>
            <!-- Add more menu items as needed -->
        </ul>
    </div>
</nav>


            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <!-- Dashboard content, including summary counts, charts, and tables -->
                <div class="content">
                    <h2>Dashboard</h2>
                    Certainly! Below is a basic example of the code for the content of an admin dashboard. In this example, I'm providing a simple placeholder for the dashboard content with some sample elements such as statistics, charts, and a table.

```html
<!-- Main Content -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <!-- Dashboard content -->
    <div class="content">
        <h2>Dashboard</h2>
        <div class="row">
            <!-- Summary Statistics -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Donations</h5>
                        <p class="card-text">500</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Donors</h5>
                        <p class="card-text">300</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fundraising Progress</h5>
                        <p class="card-text">75%</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Donation Trends</h5>
                        <!-- Add chart here (e.g., using a library like Chart.js) -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Donor Demographics</h5>
                        <!-- Add chart here (e.g., using a library like Chart.js) -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Donation Table -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Donation List</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Donor Name</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2023-10-01</td>
                                    <td>John Doe</td>
                                    <td>$100</td>
                                    <td>Completed</td>
                                </tr>
                                <!-- Add more donation rows here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
