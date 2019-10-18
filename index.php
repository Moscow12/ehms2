
<body class="container" id="form">
    <div >
        <br><br>
        <div class="row col-md-12">
            <div class="col-md-3"><a href="checklist_skin_op.php" class="btn btn-info">Form for skin Operation</a></div>
            <div class="col-md-3"><a href="diabetes_clinic_form.php" class="btn btn-info">Diabetes clinic form</a></div>
            <div class="col-md-3"><a href="regural_checkup_form.php" class="btn btn-info">Regural checkup forms</a></div>
            <div class="col-md-3"><a href="diabetes_education_form.php"  class="btn btn-info disabled">Diabetes education and Followup visit</a></div>
        </div>
        
    </div>

    
</body>
<div class="table table-bordered">
    <h4>Names of patients done skin operations </h4>
  <?php 
    include('header.php');
    require_once ("connection.php");

    $preview = "SELECT patient_name,id FROM skin_operations ";
    $preview_result = mysqli_query($query, $preview);
    //output data of each row
    if(mysqli_num_rows($preview_result)>0 ){
        while($row =mysqli_fetch_assoc($preview_result)){
            $id=$row['id'];
            $patient_name=$row['patient_name'];
            
            echo  "<a href='skin_operation_names.php?id=$id&patient_name=$patient_name' title='Click to view result'>$patient_name</a><br>";
        }

        }else{
            echo "Result not found";
    }
?>  
</div>
