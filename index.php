<html lang="en">
<head>
  <title>Diabetic | clinic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body class="container" id="form" style="border: solid;">
    <div >
        <br><br>
        <div class="row col-md-12">
            <div class="col-md-3"><a href="checklist_skin_op.php" class="btn btn-info">Form for skin Operation</a></div>
            <div class="col-md-3"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info">Diabetes clinic form</button></div>
            <div class="col-md-3"><a href="regural_checkup_form.php" class="btn btn-info">Regural checkup forms</a></div>
            <div class="col-md-3"><a href="diabetes_education_form.php"  class="btn btn-info disabled">Diabetes education and Followup visit</a></div>
        </div>
        
    </div>
<!--trial-->
   
        
  
<!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
  
    <!-- Modal content-->
                    <div class="modal-content"><form action="regular_check_db.php" method="post" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                        </div>
                            <div class="modal-body">                            			
                                <div class="card m-3 border-danger">  <div class="card-header  text-center">Register Patient</div>                                  
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Patient Sirname</label>
                                                <input type="text" name="sirname" class="form-control" placeholder="Enter Sirname">
                                            </div>
                                            <div class="form-group">
                                                <label>Patient Name</label>
                                                <input type="text" name="patient_name" class="form-control" placeholder="Enter name">
                                            </div>
                                            <div class="form-group"> 
                                                <label>Date of Birth</label>
                                                <input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control">
                                            </div>
                                            <div class="form-dgroup">
                                                <label for="">Sex</label>
                                                <label class="radio-inline" style="padding: 5%;">
                                                    <input type="radio" value="Male" id="sex" name="sex">Male
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="Female" name="sex">Female
                                                </label>
                                            </div>                            
                                            <div class="form-dgroup">
                                                <label for="">Married?</label>
                                                <label class="radio-inline" >
                                                    <input type="radio" value="Yes" id="married" name="married">Yes
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="No" name="married">No
                                                </label>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Tribe</label>
                                                <input type="text" name="tribe" class="form-control" placeholder="Enter Tribe">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Place of residance</label>
                                                <input type="text" name="place_of_residence" class="form-control" placeholder="Enter place you settle">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Closest Hospital</label>
                                                <input type="text" name="closest_hospital" class="form-control" placeholder="Enter Closest Hospital">
                                            </div>
                                                        
                                            <div class="modal-footer">
                                                <button type="submit"  class="btn btn-info" name="patient" >Submit</button>
                                            </div>
                                        </div>	
                                                               			
                                </div>
                            </div>     
                        </div>    
                    </div>      </form>       
                </div>
            </div>    

    
</body>
<br><br><br>
<div class="table table-striped table-bordered">
    <h4>Names of patients done skin operations </h4>
  <?php 
    //include('header.php');
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

    //query for getting names of patient for diabetic clinic
    $names_diabetic = "SELECT * FROM patients_diabetic";
    $name_result = mysqli_query($query, $names_diabetic);

    if(mysqli_num_rows($name_result)>0 ){
        while($row =mysqli_fetch_assoc($name_result)){
            $id=$row['id'];
            $patient_name=$row['patient_name'];
            
            echo "<div class='table table-striped' style='padding-left: 20px;'><span>$patient_name </span> <a href='diabetes_clinic_form.php?id=$id&patient_name=$patient_name' class='btn btn-info' title='Click to view result'>Diabetic clinic form</a>&nbsp;&nbsp;<a href='regural_checkup_form.php?id=$id&patient_name=$patient_name' class='btn btn-info'>View regural checkup form</a> </div><br>";
        }

        }else{
            echo  "Result not found";
    }

?>  
</div>
