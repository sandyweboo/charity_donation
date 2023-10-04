<?php

require "Database.php";

$cause = $_POST["cause"];
$title = $_POST["title"];
$description = $_POST["description"];
$st_day= $_POST["st_day"];
$cl_day = $_POST["cl_day"];
$goalAmount = $_POST["goalAmount"];


if (empty($cause)) {
    echo ("enter cause");
} else if (empty($title)) {
    echo ("enter title -require");
} else if (empty($description)) {
    echo ("enter description-require");
}else if (empty($st_day)) {
    echo ("enter start date -require");
}else if (empty($cl_day)) {
    echo ("enter close date -require");
}else if ($st_day == $cl_day) {
    echo ("day cant be same");
} else {

        Database::iud("INSERT INTO `donation_process`(`causes_cause_id`,`title`,`description`,`start_date`,`final_day`,`goal_amount`)
         VALUES ('" . $cause . "','" . $title. "','" . $description . "','" . $st_day . "','" . $cl_day . "','" . $goalAmount . "')");

        echo ("success");
        

    
}

// $conn = new mysqli("localhost", "root", "@Tharu0929", "myshop", "3306");



// $conn->query($q);
