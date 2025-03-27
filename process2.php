<?php
include('../connect.php');
if(isset($_POST['username'])) {
  
  $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];



    $qc = "SELECT * FROM `users` WHERE username = '".$username."'";

    $rc = $conn->query($qc);

    if($rc->num_rows > 0) {
        echo $username . " Already exists";
    } else {
       echo $qi = "INSERT INTO `users`(`id`, `username`, `passwords`, `first_name`, `last_name`, `email`, `phone_no`) VALUES ('  ','1','1','".$first_name."','".$last_name."','".$email."','1')";

        $rc = $conn->query($qi);

        if($qi) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error ";
        }
    }

    
}
