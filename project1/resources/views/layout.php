<!DOCTYPE html>
<html>
  <head>
    <title>
      <?php echo $title; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php echo $author; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/font-awesome/css/font-awesome.css">
    <!-- Custom stylesheets and js. -->
    <?php if (function_exists(custom_header_container())) {custom_header_container();}?>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <!-- Logo -->
            <div class="logo">
              <h1>
                <a href="index.html">Simple Student Book
                </a>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content">
      <div class="row">
        <div class="col-md-2">
          <div class="sidebar content-box" style="display: block;">
            <ul class="nav">
              <!-- Main menu -->
              <li class="current">
                <a href="../student/search">
                  <i class="glyphicon glyphicon-search">
                  </i> Search
                </a>
              </li>
              <li class="current">
                <a href="../student/register">
                  <i class="glyphicon glyphicon-home">
                  </i> Register
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-10">
          <?php if (function_exists(custom_content_container())) {custom_content_container();}?>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">        
        <div class="copy text-center">
          Created 
          <?php date("Y"); ?> by Aaron, Nana and Kojo [Group 6].
        </div>       
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery.min.js">
    </script>
    <script src="../assets/js/sweetalert.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js">
    </script>
    <?php if (function_exists(custom_footer_container())) {custom_footer_container();}?>
  </body>
</html>
