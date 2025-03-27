<?php
include('../connect.php');
if(isset($_POST['timing'])){
    
    $timing = $_POST ['timing'];
    $ramadan_date = $_POST['ramadan_date'];
    $sehar_hanafia = $_POST['sehar_hanafia'];
    $sehar_jafria = $_POST['sehar_jafria'];
    $iftar_hanafia = $_POST['iftar_hanafia'];
    $iftar_jafria = $_POST['iftar_jafria'];



    $qc = "SELECT * FROM `timing` WHERE ramadan_date = '".$ramadan_date."'";

    $rc = $conn->query($qc);

    if($rc->num_rows > 0) {
        echo $timing . " Already exists";
    } else {
        echo $qi = "INSERT INTO `timing`(`id`, `u_id`, `city_id`, `ramadan_date`, `sehar_hanafia`, `sehar_jafria`, `iftar_hanafia`, `iftar_jafaria`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES ('', '1', '', '".$ramadan_date."', '".$sehar_hanafia."', '".$sehar_jafria."', '".$iftar_hanafia."', '".$iftar_jafria."', '[created_at]', '1', '[modified_at]', '1')";

        $ri = $conn->query($qi);

    
        if($qi) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error ";
        }
    
    }


}