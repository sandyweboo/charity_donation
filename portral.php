<?php
class ViewPortral {
    public function viewPost() {
       ?> 
        <div class="container">

        <?php
        require "Database.php";
        $rs = Database::search("SELECT * FROM `donation_process`");
        $n = $rs->num_rows;
        for ($x = 0; $x < $n; $x++) {
            $d = $rs->fetch_assoc();
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Donation Process Details</h5>

                    <p class="card-text"><strong>Cause ID:</strong>
                        <?php echo $d['causes_cause_id']; ?>
                    </p>
                    <p class="card-text"><strong>Title:</strong>
                        <?php echo $d['title']; ?>
                    </p>
                    <p class="card-text"><strong>Description:</strong>
                        <?php echo $d['description']; ?>
                    </p>
                    <p class="card-text"><strong>Start Date:</strong>
                        <?php echo $d['start_date']; ?>
                    </p>
                    <p class="card-text"><strong>Final Day:</strong>
                        <?php echo $d['final_day']; ?>
                    </p>
                    <p class="card-text"><strong>Goal Amount:</strong>
                        <?php echo $d['goal_amount']; ?>
                    </p>

                    <button type="button">MakeDonation</button>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

  <?php  }
}

    ?>