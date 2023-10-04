<?php

require "Database.php";

$username = $_POST["un"];
$email = $_POST["em"];
$pwd1 = $_POST["pw1"];
$pwd2 = $_POST["pw2"];


if (empty($username)) {
    echo ("enter your user name -require");
} else if (empty($email)) {
    echo ("enter your email -require");
} else if (empty($pwd1)) {
    echo ("enter your password -require");
}else if (empty($pwd2)) {
    echo ("enter your  password again-require");
}else if ($pwd1 != $pwd2) {
    echo ("password does not match");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email ."'");
    $n = $rs->num_rows;

    if ($n > 0) {
        echo ("user alresy exist");
    } else {
        Database::iud("INSERT INTO `user`(`username`,`email`,`password`) VALUES ('" . $username . "','" . $email . "','" . $pwd1 . "')");

        echo ("success");
        
    }
}

// $conn = new mysqli("localhost", "root", "@Tharu0929", "myshop", "3306");



// $conn->query($q);
