<?php
/********************************************************           
* Register Form Page for Students              *   
*                                                      *   
* Author:  Aaron Segbedzi(PHP),                        *   
*                                                      *   
* Purpose:  Demonstration of a simple program.         *   
********************************************************/  
// Begin Page variables.
$title = 'Search';
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
function custom_content_container(){?>
<div class="row">
  <div class="col-md-12">
    <div class="content-box-large">
      <div class="panel-heading">
        <div class="panel-title">
        <i class="glyphicon glyphicon-search">
        </i> Advanced Search Table
        </div>
      </div>
      <div class="form-group col-md-12">
       <input type="text" name="query" id="query" placeholder="Search here..." class="form-control input-md">
      </div>
      <div class="panel-body">
        <table class="table table-responsive table-striped table-hover table-condensed table-bordered" id="searchResults">
          <thead>
            <tr>
              <th>#
              </th>
              <th>First Name
              </th>
              <th>Last Name
              </th>
              <th>Date of Birth
              </th>
              <th>Programm Level
              </th>
              <th>Actions
              </th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php 
} // End custom content container.
// Begin custom footer container.
function custom_footer_container(){?>
  <script type="text/javascript">
  // Handle search input.
  $("#searchResults").hide();

      // Begin processing search query.
      $("#query").keyup(function (){
         var query = $("#query").val();
         $.ajax({
          type: 'POST',
          url: '../resources/controllers/student/read.php',
          data: {query: query},
          success: function (response) {
            if(response == false){
              // Hide search table when empty.
              $("#searchResults").hide();
            }else{
               // Show search table results.
              $("#searchResults").fadeIn();
            }     
            // Put search results into body of table.
            $("#searchResults > tbody").html(response);
          }
         });
      });

      function  delete_student(id) {
        $.ajax({
          type: 'POST',
          url: '../resources/controllers/student/delete.php',
          data: {id: id},
          success: function (response) {
            if(response == false){
              // Hide search table when empty.
              swal("Ooops!", "Failed to delete this student. Please try again or contact administrator.", "error");
            }else{
               // Show search table results.
              $("#row_"+id).fadeOut();
            }
          }
         });
      }
  </script>
<?php } // End of custom footer container. ?>
