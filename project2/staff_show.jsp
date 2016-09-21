<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Human Resource - Project 2">
    <meta name="author" content="Aaron Segbedzi, Kojo Mensah, Nana Kwadzo Adjei-Manu">
    <meta name="keyword" content="Human Resource, GTUC, Project 2">
    <title>Staff List | HR
    </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  </head>
  <body>
    <section id="container" >
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation">
          </div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo">
          <b>Human Resource - GTUC V1.0
          </b>
        </a>
        <!--logo end-->
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li>
              <a  href="logout.jsp" class="logout">Logout
              </a>
            </li>
          </ul>
        </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
              <a href="profile.html">
                <img src="assets/img/ui-sam.jpg" class="img-circle" width="60">
              </a>
            </p>
            <h5 class="centered"><%= session.getAttribute( "username" ) %>
            </h5>
            <li class="mt">
              <a href="dashboard.jsp">
                <i class="fa fa-dashboard">
                </i>
                <span>Dashboard
                </span>
              </a>
            </li>
            <li class="sub-menu">
              <a class="active">
                <i class="fa fa-users">
                </i>
                <span>Staff
                </span>
              </a>
              <ul class="sub">
                <li>
                  <a  href="staff_list.jsp">
                    <i class="fa fa-user">
                    </i> Staff List
                  </a>
                </li>
                <li  class="active">
                  <a  href="staff_register.jsp">
                    <i class="fa fa-pencil">
                    </i> Register
                  </a>
                </li>
                <li>
                  <a  href="staff_update.jsp">
                    <i class="fa fa-edit">
                    </i> Update
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <h3>
            <i class="fa fa-angle-right">
            </i> CONFIRMATION OF FORM DETAILS
          </h3>
          <!-- BASIC FORM ELELEMNTS -->
          <div class="row mt">
            <div class="col-lg-12">
              <div class="form-panel">
              <form class="form-horizontal style-form" method="post" action="staff_show.jsp">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">First Name
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("first_name") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Middle Name
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("middle_name") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Last Name
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("last_name") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Date of Birth
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("dob") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Gender
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("gender") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Email
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("email") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Department / If Applicable
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("department") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Role
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("role") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Postal Address
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("postal") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Residential Address
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("residential") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Primary Telephone
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("phone1") %></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Secondary Telephone / If Applicable
                    </label>
                    <div class="col-sm-10">
                      <p><%= request.getParameter("phone2") %></p>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-theme">Save
                  </button>
                  <a href="staff_register.jsp" class="btn btn-error">Back
                  </a>
                  </form>
              </div>
            </div>
          </div>
        <!-- col-lg-12-->       
      <!-- /row -->
      <!-- /MAIN CONTENT -->
      <!--main content end-->
          </section>
      <!--footer start-->
      <footer class="site-footer">
        <div class="text-center">
          2016 - Group 6 [Stafford University Level-500] [GTUC]
        </div>
      </footer>
      <!--footer end-->

    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js">
    </script>
    <script src="assets/js/bootstrap.min.js">
    </script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js">
    </script>
    <script src="assets/js/jquery.ui.touch-punch.min.js">
    </script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js">
    </script>
    <script src="assets/js/jquery.scrollTo.min.js">
    </script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript">
    </script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js">
    </script>
    <!--script for this page-->
    <script>
      //custom select box
      $(function(){
        $('select.styled').customSelect();
      }
       );
    </script>
  </body>
</html>
