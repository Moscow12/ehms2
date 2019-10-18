<?php
include('header.php');
?>
<style>
#type{
    border:none!important;
}
</style>
<body class="container">
    <br><br>
            <div class="col-md-2">
                <a href="index.php" class="btn  btn-info"><< Back</a>
            </div>
    <div class="row col-md-12">

        <div class="col-md-6">
            <h4 align="center"><U>KCMC Diabetes Clinic</U></h4><br>
            <table class="table" id="tabled">
                <tbody>
                    <tr>
                        <th>Diabetic Clinic No.</th>
                        <td><input type="text"class="form-control" name="diabetic_clinic_no"> </td>
                    </tr>
                    <tr>
                        <th>sirname</th>
                        <td><input type="text" class="form-control" name=""> </td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" class="form-control" name="name"> </td>
                    </tr>
                    <tr>
                        <th>Yeah born</th>
                        <td><input type="date" class="form-control" name="dob"> </td>
                    </tr>
                    <tr>
                        <th>Sex</th>
                        <td>
                            <select name="sex" id="" class="form-control">
                                <option value="">--select sex--</option>
                                <option value="Male">Male</option>
                                <option value="FEmale">Female</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <th>Maried?</th>
                        <td>
                            <select name="maried" id="" class="form-control">
                                <option value="">--select--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Tribe</th>
                        <td><input type="text" class="form-control" name="tribe"> </td>
                    </tr>
                    <tr>
                        <th>Place of residence</th>
                        <td><input type="text" class="form-control" name="place_of_residence"> </td>
                    </tr>
                    <tr>
                        <th>Closest Hospital</th>
                        <td><input type="text" class="form-control" name="closest_hospital"> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <div class="row">
                <table class="table" id="tableh">
                    <tr>
                        <th>HOSPITAL NO.</th>
                        <td><input type="text" class="form-control" name="hospital_no"></td>
                    </tr>
                </table>   
            </div>            
                
                <div class="row">
                    <table class="table borderless" id="type">
                        <tr>
                            <th>Type I</th><td><input type="radio" class="checkbox" value="type_1" name="type_1"></td>
                            <th>Type II</th><td><input type="radio"  class="checkbox" value="type_2" name="type_1"></td>
                        </tr>
                    </table>
                </div>
                
            <div class="row">
                <table class="table" id="tabley">
                    <tr>
                        <th>Year of diagnosis</th>
                        <td><input type="text"  name="year_of_diagnosis" class="form-control"></td>
                    </tr>
                </table>
            </div>
            <div class="row">
                <table class="table" id="tabley">
                    <tr>
                        <th>Occupation</th>
                        <td><input type="text" class="form-control" name="ocupation"></td>
                    </tr>
                </table>
            </div>
            <div class="form-group">
                <div class="row center" id="physical">
                    <h5><u>Physical activity</u></h5>                
                </div>
                <div class="row">
                    <table class="table" style="border: none;">
                        <tr>
                            <th>Light</th><td><input type="checkbox"  value="light" name="light"></td>
                            <th>Moderate</th><td><input type="checkbox"  value="moderate" name="moderate"></td>
                            <th>Heavy</th><td><input type="checkbox"  value="heavy" name="heavy"></td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <table class="table" style="border: none;">
                        <tr>
                            <th>Self-reliant</th><td><input type="checkbox"  value="self_reliant" name="self_reliant"></td>
                            <th>Dependent</th><td><input type="checkbox"  value="dependent" name="dependent"></td>
                        </tr>
                    </table>
                </div>
                <div class="row center" id="physical">
                    <h5><u>Kind of treatment</u></h5>                
                </div>
                <div class="row">
                    <table class="table" style="border: none;">
                        <tr>
                            <th>Diet</th><td><input type="checkbox"  value="diet" name="diet"></td>
                            <th>Drug</th><td><input type="checkbox"  value="drug" name="drug"></td>
                            <th>Insulin</th><td><input type="checkbox"  value="insulin" name="insulin"></td>
                        </tr>
                    </table>
                </div>
                <div class="row center" id="physical">
                    <h5><u>Self-injecting?</u></h5>                
                </div>
                <div class="row">
                    <table class="table" style="border: none;">
                        <tr>
                            <th>Yes</th><td><input type="checkbox"  value="yes" name="yes"></td>
                            <th>No</th><td><input type="checkbox"  value="yes" name="no"></td>
                        </tr>
                    </table>
                </div>
                
            </div>
                    
            
            
        </div>
    </div>
    <div class="row col-md-12">
        <div class="col-md-5">
            <div class="row"><h4><u>FIRST VISIT</u></h4></div>
            <table style="border: none;">
                <tr>
                    <th>Body weight</th>
                    <td><input type="text" class="form-control" name="body_weight"></td>
                </tr>
                <tr>
                    <th>Height</th>
                    <td><input type="text" class="form-control" name="height"></td>
                </tr>
                <tr>
                    <th>BMI</th>
                    <td><input type="text" class="form-control" name="bim"></td>
                </tr>
                <tr>
                    <th>RBG</th>
                    <td><input type="text" class="form-control" name="rbg"></td>
                </tr>
                <tr>
                    <th>BP</th>
                    <td><input type="text" class="form-control" name="bp"></td>
                </tr>
            </table>
            <div class="row">
                <table class="table" id="tabled">
                    <tr>
                        <th>Died:</th>
                        <td><input type="text" class="form-control" name="dead"></td>
                    </tr>
                </table>   
            </div> 
            <div class="row">
                <button value="submit" class="btn btn-primary">Submit</button>
            </div>      
        </div>
        <div class="col-md-7">
                <div class="form-group">
                    <div class="row"><h5><u>Special Needs</u> </h5></div>
                    <div class="row">
                        <textarea name="special_needs" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Other diagnoses</th>
                                <th>Since</th>
                                <th>Treatment</th>
                            </tr>
                        </thead>
                        <tbody id="addform">
                            <tr >
                                <td><input type="text" class="form-control" name="other_diagnoses"></td>
                                <td><input type="text" class="form-control" name="since"></td>
                                <td><input type="text" class="form-control" name="treatment"></td>
                                <td ><button class="btn btn-warning"  onclick="addForm()">+</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               
        </div>
    </div>
  
    <script type="text/javascript">
    var count_rw=0;
        function addForm(){
            count_rw++;
            var table = $('#addform').append("<tr id='"+count_rw+"'><td><input type='text' class='form-control' name='other_diagnoses'></td><td><input type='text' class='form-control' name='since'></td><td><input type='text' class='form-control' name='treatment'></td><td><button class='btn btn-danger'onclick='removerow("+count_rw+")'>X</button></td></tr>");
            
        }

        function removerow(row_id){
            $('#'+row_id).remove();
        }
    </script>
</body>