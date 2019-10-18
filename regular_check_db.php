<?php 
    
    require_once ("connection.php");

    if(isset($_POST['checkup'])){
    $date_check_up = mysqli_real_escape_string($query,  $_POST["date_check_up"]);
    $hb = mysqli_real_escape_string($query,  $_POST["hb"]);
    $hba1c = mysqli_real_escape_string($query,  $_POST["hba1c"]);
    $microalb = mysqli_real_escape_string($query,  $_POST["microalb"]);
    $bun = mysqli_real_escape_string($query,  $_POST["bun"]);
    $crea = mysqli_real_escape_string($query,  $_POST["crea"]);
    $esr = mysqli_real_escape_string($query,  $_POST["esr"]);
    
    $send_checkup = "INSERT INTO regural_check (date_check_up,hb,hba1c,microalb,bun,crea,esr) 
    VALUES ('$date_check_up', '$hb', '$hba1c', '$microalb', '$bun', '$crea', '$esr')";

     $result = mysqli_query($query, $send_checkup) or die(mysqli_error($query));

    if(!$result){
        die( "Couldn't insert data".mysqli_error($query));
    }else{
        header('location: regural_checkup_form.php');
    }
}

    if(isset($_POST['vbTest'])){
        $vb_test_date = mysqli_real_escape_string($query,  $_POST["vb_test_date"]);
        $fundoscopy_test = mysqli_real_escape_string($query,  $_POST["fundoscopy_test"]);

        $send_test = "INSERT INTO fundoscopy(vb_test_date, fundoscopy_test ) VALUES('$vb_test_date', '$fundoscopy_test')";

        $result = mysqli_query($query, $send_test);

        if(!$result){
            die( "Couldn't insert data".mysqli_error($query));
        }else{
            header('location: regural_checkup_view.php');
        }
    }

    if(isset($_POST['diabetes'])){
        $diabete_date = mysqli_real_escape_string($query,  $_POST["diabete_date"]);
        $general = mysqli_real_escape_string($query,  $_POST["general"]);
        $diet = mysqli_real_escape_string($query,  $_POST["diet"]);
        $injection_technique = mysqli_real_escape_string($query,  $_POST["injection_technique"]);
        $urine_testing = mysqli_real_escape_string($query,  $_POST["urine_testing"]);
        $hyper_hypoglycemic = mysqli_real_escape_string($query,  $_POST["hyper_hypoglycemic"]);
        $foot_care = mysqli_real_escape_string($query,  $_POST["foot_care"]);
        $late_complication = mysqli_real_escape_string($query,  $_POST["late_complication"]);
        $drugs = mysqli_real_escape_string($query,  $_POST["drugs"]);

        $send_diabetes_education = "INSERT INTO diabetes_education (diabete_date, general,diet, injection_technique, urine_testing, hyper_hypoglycemic, foot_care, late_complication, drugs ) 
        VALUES ('$diabete_date', '$general', '$diet', '$injection_technique','$urine_testing', '$hyper_hypoglycemic', '$foot_care', '$late_complication', '$drugs')";

        $result = mysqli_query($query, $send_diabetes_education);
        if(!$result){
            die("Couldn't insert data ".mysqli_error($query));
        }else{
            header('location: regural_checkup_view.php');
        }

    }

    
    if(isset($_POST['admission'])){
        $admission_date = mysqli_real_escape_string($query,  $_POST["admission_date"]);
        $diagnosis = mysqli_real_escape_string($query,  $_POST["diagnosis"]);

        $send_admisions_diagnosis = "INSERT INTO admission (admission_date, diagnosis ) VALUES('$admission_date', '$diagnosis')";

        $result = mysqli_query($query, $send_admisions_diagnosis);

        if(!$result){
            die( "Couldn't insert data".mysqli_error($query));
        }else{
            header('location: regural_checkup_view.php');
        }
    }

    if(isset($_POST['followup'])){
        $follow_up_date = mysqli_real_escape_string($query,  $_POST["follow_up_date"]);
        $bwt = mysqli_real_escape_string($query,  $_POST["bwt"]);
        $bp = mysqli_real_escape_string($query,  $_POST["bp"]);
        $rbg = mysqli_real_escape_string($query,  $_POST["rbg"]);
        $clinical_notes = mysqli_real_escape_string($query,  $_POST["clinical_notes"]);
       
        $send_follow_up_visit = "INSERT INTO follow_up_visit (follow_up_date, bwt, bp, rbg, clinical_notes) 
        VALUES ('$follow_up_date', '$bwt', '$bp', '$rbg','$clinical_notes')";

        $result = mysqli_query($query, $send_follow_up_visit);
        if(!$result){
            die("Couldn't insert data ".mysqli_error($query));
        }else{
            header('location: regural_checkup_view.php');
        }

    }

    $preview = "SELECT * FROM skin_operations ";
    $preview_result = mysqli_query($query, $preview);
    //output data of each row
    if(mysqli_num_rows($preview_result)>0 ){
        while($row =mysqli_fetch_assoc($preview_result)){
            header('location: skin_operation.php');
        }

        }else{
            echo "Result not found";
    }
?>