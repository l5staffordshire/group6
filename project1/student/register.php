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
        </div>
        <div class="col-md-6">
          <fieldset>
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
