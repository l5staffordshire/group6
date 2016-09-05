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
                <li class="active">
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
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> LIST OF ALL GTUC STAFF </h3>
				<div class="row">
				
	                  <div class="col-md-12">
	                  	  
	                  	  	  
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>First Name</th>
		                              <th>Last Name</th>
		                              <th>ID</th>
		                          </tr>
		                          </thead>
		                          <tbody>
		                          <tr>
		                              <td>1</td>
		                              <td>Jason</td>
		                              <td>Obeng</td>
		                              <td>00171</td>
		                          </tr>
		                          <tr>
		                              <td>2</td>
		                              <td>Jacob</td>
		                              <td>Akrofi</td>
		                              <td>00272</td>
		                          </tr>
		                          <tr>
		                              <td>3</td>
		                              <td>Earl</td>
		                              <td>Bempong</td>
		                              <td>00373</td>
		                          </tr>
								   <tr>
		                              <td>4</td>
		                              <td>Roderick</td>
		                              <td>Agyekum</td>
		                              <td>00474</td>
		                          </tr>
								  <tr>
		                              <td>5</td>
		                              <td>Jeffrey</td>
		                              <td>Acquah</td>
		                              <td>00575</td>
		                          </tr>
								   <tr>
		                              <td>6</td>
		                              <td>Chris</td>
		                              <td>Stevens</td>
		                              <td>00676</td>
		                          </tr>
								   <tr>
		                              <td>7</td>
		                              <td>Kevin</td>
		                              <td>Awuye</td>
		                              <td>00777</td>
		                          </tr>
								  <tr>
		                              <td>8</td>
		                              <td>Jessica</td>
		                              <td>Owusu</td>
		                              <td>00878</td>
		                          </tr>
								  <tr>
		                              <td>9</td>
		                              <td>Barbara</td>
		                              <td>Achempong</td>
		                              <td>00979</td>
		                          </tr>
		                          </tbody>
		                      </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
                  
	                  
		</section><! --/wrapper -->
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
