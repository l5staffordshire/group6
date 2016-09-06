<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>HR-GTUC
    </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">  
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
              <a  href="index.jsp" class="logout">Logout
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
            <h5 class="centered">G6 Administrator
            </h5>
            <li class="mt">
              <a href="dashboard.jsp" class="active">
                <i class="fa fa-dashboard">
                </i>
                <span>Dashboard
                </span>
              </a>
            </li>
            <li class="sub-menu">
              <a>
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
                <li>
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
        <section class="wrapper site-min-height">
          <h3>
            <i class="fa fa-angle-right">
            </i> Dashboard & Statistics
          </h3>
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 main-chart">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="box1">
                        <span class="li_user">
                        </span>
                        <h3>Total: <br>9
                        </h3>
                      </div>
                      <p>There are total 9 members of the GTUC Staff in the database!
                      </p>
                    </div>
                    <div class="col-md-2">
                      <div class="box1">
                        <span class="li_user">
                        </span>
                        <h3>Males: <br>5
                        </h3>
                      </div>
                      <p>There are total 5 male members of the GTUC Staff in the database!
                      </p>
                    </div>
                    <div class="col-md-2">
                      <div class="box1">
                        <span class="li_user">
                        </span>
                        <h3>Females: <br>4
                        </h3>
                      </div>
                      <p>There are total 4 female members of the GTUC Staff in the database!
                      </p>
                    </div>
                    <div class="col-md-2">
                      <div class="box1">
                        <span class="li_news">
                        </span>
                        <h3>Teachers: <br>4
                        </h3>
                      </div>
                      <p>There are total 4 teachers of the GTUC Staff in the database!
                      </p>
                    </div>
                    <div class="col-md-2">
                      <div class="box1">
                        <span class="li_diamond ">
                        </span>
                        <h3>Management: <br>2
                        </h3>
                      </div>
                      <p>There are total 2 managers of the GTUC Staff in the database!
                      </p>
                    </div>
                    <div class="col-md-2">
                      <div class="box1">
                        <span class="li_trash">
                        </span>
                        <h3>Cleaners: <br>4
                        </h3>
                      </div>
                      <p>There are total 4 cleaners of the GTUC Staff in the database!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>TOTAL WORK HOURS LOGGED</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
          </div><!-- /row -->
        </section>
      </section>
      <!-- /MAIN CONTENT -->
      <!--main content end-->
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
