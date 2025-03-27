<?php
include('../connect.php');
if(isset($_POST['city'])) {
    $city_name = $_POST['city'];

    $qc = "SELECT * FROM `city` WHERE city_name = '".$city_name."'";
    
    $rc = $conn->query($qc);

    if($rc->num_rows > 0) {
        echo $city_name . " Already exists";
    } else {
        $qi = "INSERT INTO `city`(`id`, `u_id`, `city_name`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES ('','1','".$city_name."','','`1`','','1')";

        $ri = $conn->query($qi);

        if($qi) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error ";
        }
    }
}

if(isset($_POST['timing'])){
    $timing = $_POST ['timing'];
    $ramadan_date = $_POST['ramadan_date'];
    $sehar_hanafia = $_POST['sehar_hanafia'];
    $sehar_jafria = $_POST['sehar_jafria'];
    $iftar_hanafia = $_POST['iftar_hanafia'];
    $iftar_jafria = $_POST['iftar_jafria'];

    $qc = "SELECT * FROM `timing` WHERE timing = '".$timing."'";

    $ri = $conn->query($qi);

    if($rc->num_rows > 0) {
        echo $timing . " Already exists";
    } else {
        $qi = "INSERT INTO `timing`(`id`, `u_id`, `city_id`, `ramadan_date`, `sehar_hanafia`, `sehar_jafria`, `iftari_hanafia`, `iftari_jafaria`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES ('', '1', '', '$ramadan_date.', '$sehar_hanafia', '$sehar_jafria', '$iftar_hanafia', '$iftar_jafria', '[created_at]', '1', '[modified_at]', '1')";

        $ri = $conn->query($qi);

    
        if($qi) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error ";
        }
    
    }
}