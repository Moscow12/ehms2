<?php
    include('header.php');
    require_once ("connection.php");
    
            $id=$_GET['id'];
            $patient_name = $_GET['patient_name'];
            $date_check_up=$_GET['date_check_up'];
            $hb=$_GET['hb'];
            $hba1c=$_GET['hba1c'];
            $microalb=$_GET['microalb'];
            $bun=$_GET['bun'];
            $crea=$_GET['crea'];
            $esr=$_GET['esr'];
            $vb_test_date=$_GET['vb_test_date'];
            $fundoscopy_test=$_GET['fundoscopy_test'];
            $fundoscopy_test=$_GET['fundoscopy_test'];
            $diagnosis=$_GET['diagnosis'];
            $follow_up_date=$_GET['follow_up_date'];
            $bwt=$_GET['bwt'];
            $bp=$_GET['bp'];
            $rbg=$_GET['rbg'];
            $clinical_notes=$_GET['clinical_notes'];
            $diabete_date=$_GET['diabete_date'];
            $general=$_GET['general'];
            $diet=$_GET['diet'];
            $injection_technique=$_GET['injection_technique'];
            $urine_testing=$_GET['urine_testing'];
            $hyper_hypoglycemic=$_GET['hyper_hypoglycemic'];
            $foot_care=$_GET['foot_care'];
            $late_complication=$_GET['late_complication'];
            $drugs=$_GET['drugs'];

            $names_diabetic = "SELECT * FROM patients_diabetic WHERE id =$id ";
            $name_result = mysqli_query($query, $names_diabetic);

            $regural_checkup  = "SELECT * from regural_check where id =$id";
            $chackup_result = mysqli_query($query, $regural_checkup);

            /*if(mysqli_num_rows()>0){
                while($data = mysqli_fetch_assoc($regural_checkup)){

                }
            }*/
   
?>
<body><br>
    
<div class="col-md-2">
                <a href="index.php" class="btn  btn-info"><< Back</a>
            </div>
        <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden><input type="text" value="<?php echo $patient_name; ?>" name="patient_name" hidden>
            <div class="row col-md-12">
                <table class="table table-bordered" id="tabled">           
                    <thead>
                        <tr >
                            <th colspan="11" ><h4>Regular Checkup</h4></th>
                        </tr>
                        <tr>
                            <th><h4>Date</h4></th>
                            <th>Hb</th>
                            <th>HbA1c</th>
                            <th>Microalb</th>
                            <th>BUN</th>
                            <th>Crea</th>
                            <th colspan="2">ESR</th>
                        </tr>                
                    </thead>
                    <tbody>
                        <?php foreach($chackup_result as $checkup){?>
                        <tr>
                            <td><input type="date" class="form-control" name="date_check_up" value="<?php echo $checkup['date_check_up']; ?>" disabled></td>
                            <td><input type="text" class="form-control" name="hb" value="<?php echo $checkup['hb']; ?>" disabled></td> 
                            <td><input type="text" class="form-control" name="hba1c" value="<?php echo $checkup['hba1c']; ?>" disabled></td>
                            <td><input type="text" class="form-control" name="microalb" value="<?php echo $checkup['microalb']; ?>" disabled></td>
                            <td><input type="text" class="form-control" name="bun" value="<?php echo $checkup['bun']; ?>" disabled></td>
                            <td><input type="text" class="form-control" name="crea" value="<?php echo $checkup['crea']; ?>" disabled></td>
                            <td><input type="text" class="form-control" name="esr" value="<?php echo $checkup['esr']; ?>" disabled></td>
                            <td><button type="submit" class="btn btn-success" >Edit</button></td>   
                        </tr>
                        <?php } ?>
                        <tr>
                            <td><input type="date" class="form-control" name="date_check_up"></td>
                            <td><input type="text" class="form-control" name="hb"></td> 
                            <td><input type="text" class="form-control" name="hba1c"></td>
                            <td><input type="text" class="form-control" name="microalb"></td>
                            <td><input type="text" class="form-control" name="bun"></td>
                            <td><input type="text" class="form-control" name="crea"></td>
                            <td><input type="text" class="form-control" name="esr"></td>                                     
                            <td><button type="submit" class="btn btn-success" name="checkup">Save</button></td>
                        </tr>
                    
                    </tbody>
                </table>
            </div> 
        </form>
        <hr>   
    
       
            <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden>
                <div class="row col-md-12">
                    <table class="table table-bordered" id="tabled">
                        <thead>
                            <tr>
                                <th><h4>Date</h4></th>
                                <th colspan="2"><h5>Fundoscopy, Vibration test and other special investigation</h5></th>
                            </tr>               
                        </thead>
                        <tbody id="btn">
                            <tr> 
                                <td><input type="Date" class="form-control" name="vb_test_date"></td>
                                <td><input type="text" class="form-control" name="fundoscopy_test"></td>
                                <td><button class="btn btn-success btn-block" type="submit" title="save input field" name="vbTest">save</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        
    <br><hr><br>
    <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden>
        <div class="row col-md-12">
            <table class="table table-bordered" id="tabled">
                <thead>
                    <tr id="tabled"><th colspan="11">DIABETES EDUCATION</th></tr>
                    <tr id="tabled">                    
                        <th>Date</th>
                        <th>General</th>
                        <th>Diet</th>
                        <th>Insulin/Injection Technique</th>
                        <th>Urine Testing</th>
                        <th>Hyper -Hypoglycemic</th>
                        <th>Foot Care</th>
                        <th>Late Complications</th>
                        <th colspan="2">Drugs</th>
                        
                    </tr>                
                </thead>
                <tbody>
                    <tr>
                        <td><input type="date" class="form-control" name="diabete_date"></td>
                        <td><textarea type="text" class="form-control" name="general"></textarea></td>
                        <td><input type="text" class="form-control" name="diet"></td>
                        <td><input type="text" class="form-control" name="injection_technique"></td>
                        <td><input type="text" class="form-control" name="urine_testing"></td>
                        <td><input type="text" class="form-control" name="hyper_hypoglycemic"></td>
                        <td><input type="text" class="form-control" name="foot_care"></td>
                        <td><input type="text" class="form-control" name="late_complication"></td>
                        <td><input type="text" class="form-control" name="drugs"></td>
                        <td><button type="submit" class="btn btn-success" name="diabetes">Save</button></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </form>
    <hr>
    <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden>
        <div class="row col-md-12">
            <table class="table table-bordered" id="tabled">
                <thead> 
                    <tr ><th colspan="3" id="tabled">ADIMISSION</th> </tr>                                        
                        <tr>
                            <th>Date</th>
                            <th colspan="2">Diagnosis</th>
                        </tr>                   
                </thead>
                <tbody>
                    <tr>
                        <td><input type="date" class="form-control" name="admission_date"></td>
                        <td><textarea type="text" class="form-control" name="diagnosis"></textarea></td>
                        <td><button type="submit" class="btn btn-success btn-block" name="admission">Save</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
    <hr>
    <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden>   
        <div class="row col-md-12">
            <table class="table table-bordered" id="tabled">
                <thead >
                    <tr id="tabled">
                        <th colspan="6" style="align-content: center;"><h4>Follow-up Visits</h4></th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Bwt</th>
                        <th>BP</th>
                        <th>RBG</th>
                        <th colspan="2">Clinical Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="date" class="form-control" name="follow_up_date"></td>
                        <td><input type="text" class="form-control" name="bwt"></td>
                        <td><input type="text" class="form-control" name="bp"></td>
                        <td><input type="text" class="form-control" name="rbg"></td>
                        <td><textarea type="text" class="form-control" name="clinical_notes"></textarea></td>
                        <td><button  class="btn btn-success" type="submit" name="followup">Save</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
   
</body>
