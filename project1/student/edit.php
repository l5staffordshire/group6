<?php
/********************************************************           
* Register Form Page for Students              *   
*                                                      *   
* Author:  Aaron Segbedzi(PHP),                        *   
*                                                      *   
* Purpose:  Demonstration of a simple program.         *   
********************************************************/  
// Begin Page variables.
$title = 'Edit';
$author = 'Aaron Segbedzi';
$description = 'Index Number: 050915014';
// End page variables.
// Include web interface layout.
include($_SERVER['DOCUMENT_ROOT'].'/project1/resources/views/layout.php');
// Begin custom header container.
function custom_header_container(){?>
<?php 
} // End custom header container. 
// Begin custom content container.

function custom_content_container(){
  require($_SERVER['DOCUMENT_ROOT'].'/project1/config/database.php');
  $QUERY = "SELECT * FROM `students` WHERE `id` = '".$_GET['id']."'";
  $RESULT = mysqli_fetch_assoc(mysqli_query($DB_CONNECTION, $QUERY));
  $QUERY = "SELECT * FROM `next_of_kins` WHERE `student_id` = '".$RESULT['id']."'";
  $NOK = mysqli_fetch_assoc(mysqli_query($DB_CONNECTION, $QUERY));
  ?>
<div class="row">
  <div class="col-md-12">
    <form id="form-register">
      <fieldset>
        <div class="col-md-6">
            <div class="form-group">
              <legend>Personal details</legend>
              <i>Please input your details in the field below.</i><br>
              <label for="first-name">First Name</label><br>
               <input type="text" name="first-name" id="firstname" class="form-control" value="<?php echo $RESULT['first_name'] ?>"><br>
             <label for="lastname">Last Name</label><br>
              <input type="text" name="last-name" id="last-name" class="form-control" value="<?php echo $RESULT['last_name'] ?>"><br>

             <label for="level">Program Level</label><br>
             <select class="form-control" id="level" name="program-level">
               <option value="U">Undergraduate</option>
               <option value="P">Postgraduate</option>
             </select><br>
             <label for="level">Gender</label><br>
             <select class="form-control" id="level" name="gender">
               <option value="0">Male</option>
               <option value="1">Female</option>
             </select><br>
             <label>Date of Birth</label>
             <input type="date" name="dob" class="form-control" value="<?php echo $RESULT['dob'] ?>"><br>
             <label for="email">Email</label><br>
              <input type="text" name="email" id="email" class="form-control" value="<?php echo $RESULT['email'] ?>"><br>
              <label for="rAddress">Residential Address</label><br>
               <textarea type="text" name="address" id="rAddress" rows="8" cols="40" class="form-control"><?php echo $RESULT['address'] ?></textarea><br>
               <label for="pAddress">Postal Address</label><br>
               <textarea name="postal" rows="8" cols="40" class="form-control" id="pAddress"><?php echo $RESULT['postal'] ?></textarea>
               <br>
            </div>
        </div>
        <div class="col-md-6">
              <legend>Next Of Kin</legend><br>
              <i>Please input the details of your next of kin below.</i><br>
              <label for="nameOk">First Name</label><br>
               <input type="text" name="nok_fname" id="nameOk" class="form-control" value="<?php echo $NOK['first_name'] ?>"><br>
               <label for="nameOk">Last Name</label><br>
               <input type="text" name="nok_lname" id="nameOk" class="form-control" value="<?php echo $NOK['last_name'] ?>"><br>
               <label for="phone">Phone</label><br>
                <input type="text" name="nok_mobile" id="phone" class="form-control" value="<?php echo $NOK['phone'] ?>"><br>
                <label for="nokemail">Email</label><br>
                 <input type="text" name="nok_email" id="nokemail" class="form-control" value="<?php echo $NOK['email'] ?>"><br>
                 <label for="relation">Relationship to you</label><br>
                  <input type="text" name="nok_rel" id="relation" class="form-control" value="<?php echo $NOK['relationship'] ?>"><br>
            <div>
              <button class="btn btn-default btn-lg btn-block" type="submit">
                <i class="fa fa-save">
                </i> Submit
              </button>
              <button class="btn btn-default btn-lg btn-block" type="reset">
                <i class="fa fa-refresh">
                </i> Reset
              </button>
            </div>
          </div>
      </fieldset>
    </form>
  </div>
</div>
<?php 
} // End custom content container.
// Begin custom footer container.
function custom_footer_container(){?>
  <script type="text/javascript">
  $(function() {
    var form = $("#form-register");
    form.submit(function(event) {
      event.preventDefault();
      var data = $("#form-register").serialize();
      $.ajax({
        type: 'POST',
        url: '../resources/controllers/student/create.php',
        data: data,
        success: function(response) {
          if (response == false) {
            $("#form-register").trigger('reset');
            swal("Ooops!", "Failed to register student. Please try again or contact administrator.", "error");
          }
          else {
            swal("Good job!", "You successfully registered this student.", "success");
          }
        }
      }
            );
    }
               );
    return false;
  }
   );
</script>
<?php } // End of custom footer container. ?>
