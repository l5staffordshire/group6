<?php
// Begin Page variables.
$title = 'Register';
$author = 'Aaron Segbedzi';
$description = 'Index Number: 050915014';
// End page variables.
// Include web interface layout.
include($_SERVER['DOCUMENT_ROOT'].'/project1/resources/views/layout.php');
// Begin custom header container.
function custom_header_container(){?>
<link href="../assets/plugins/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
<?php 
} // End custom header container. 
// Begin custom content container.
function custom_content_container(){?>
<div class="content-box-large">
  <div class="panel-heading">
    <div class="panel-title">Student Registration Form
    </div>
  </div>
  <div class="panel-body">
    <form id="form-register">
      <fieldset>
        <div class="col-md-6">
          <form id="form-register">
            <fieldset>
              <div class="col-md-6">
                  <div class="form-group">
                    <legend>Personal details</legend>
                    <i>Please input your details in the field below.</i><br>
                    <label for="first-name">First Name</label><br>
                     <input type="text" name="first-name" id="firstname" class="form-control"><br>
                   <label for="lastname">Last Name</label><br>
                    <input type="text" name="last-name" id="last-name" class="form-control"><br>
      
                   <label for="level">Program Level</label><br>
                   <select class="form-control" id="level">
                     <option>Undergraduate</option>
                     <option>Postgraduate</option>
                   </select><br>
                   <label>Date of Birth</label>
                  <label for="studID">Student ID</label><br>
                   <input type="text" name="studID" id="studID" class="form-control"><br>
                   <label for="email">Email</label><br>
                    <input type="text" name="email" id="email" class="form-control"><br>
                    <label for="rAddress">Residential Address</label><br>
                     <textarea type="text" name="rAddress" id="rAddress" rows="8" cols="40" class="form-control"></textarea><br>
                     <label for="pAddress">Postal Address</label><br>
                     <textarea name="pAddress" rows="8" cols="40" class="form-control" id="pAddress"></textarea>
                     <br>
      
                  </div>
              </div>
              <div class="col-md-6">
                  <fieldset>
                    <legend>Next Of Kin</legend><br>
                    <i>Please input the details of your next of kin below.</i><br>
                    <label for="nameOk">Name</label><br>
                     <input type="text" name="nameOk" id="nameOk" class="form-control"><br>
                     <label for="phone">Phone</label><br>
                      <input type="text" name="phone" id="phone" class="form-control"><br>
                      <label for="nokemail">Email</label><br>
                       <input type="text" name="nokemail" id="nokemail" class="form-control"><br>
                       <label for="relation">Relationship to you</label><br>
                        <input type="text" name="relation" id="relation" class="form-control"><br>
      
                  </fieldset>
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
        url: '/resources/controllers/student/create.php',
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
