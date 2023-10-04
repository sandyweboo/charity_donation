<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Donation Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for styling */
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Donation Post</h2>
  
            <div class="mb-3">
                <label for="cause" class="form-label">Select a Cause</label>

                <select class="form-select" id="cause" name="cause" required>
                <?php
                                    require "Database.php";

      
                                    $rs = Database::search("SELECT * FROM `causes`");
                                    $n = $rs->num_rows;
                                    for($x=0; $x < $n; $x++){
                                        $d = $rs->fetch_assoc();
                                        ?>
                                        <option value="<?php echo $d["cause_id"]; ?>"><?php echo $d["name"]; ?></option>
                                        
                                        <?php
                                    }

                                    ?>

                    <!-- Add more causes as needed -->
                </select>
            </div>

            <div class="mb-3">
                <label for="goalAmount" class="form-label">Title</label>
                <input type="text" class="form-control" id="title"  required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description"  rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="goalAmount" class="form-label">starting Date</label>
                <input type="date" class="form-control" id="st_day"  required>
            </div>
            <div class="mb-3">
                <label for="goalAmount" class="form-label">closing Date</label>
                <input type="date" class="form-control" id="cl_day"  required>
            </div>
            <div class="mb-3">
                <label for="goalAmount" class="form-label">Goal Amount ($)</label>
                <input type="number" class="form-control" id="goalAmount"  required>
            </div>
            <button type="submit" onclick="addDonationPost();"; class="btn btn-primary btn-block">Post Donation</button>
        </form>
    </div>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
