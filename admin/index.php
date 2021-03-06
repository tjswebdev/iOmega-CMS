<?php
session_start();
if(isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>iOmega | CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">iOmega CMS</a>
          <div class="nav-collapse collapse">
          	
          	<ul class="nav" role="navigation">
                    <li class="active">
                      <a href="/">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="posts.php" id="drop1" role="button" class="dropdown-toggle" data-toggle="dropdown">Posts<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                      	<li><a tabindex="-1" href="posts.php">View Posts</a></li>
                      	<li class="divider"></li>
                        <li><a tabindex="-1" href="addPost.php">Add Posts</a></li>
                      </ul>
                    </li>
                    <li id="fat-menu" class="dropdown">
                      <a href="cats.php" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Manage Categories<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                      	<li><a tabindex="-1" href="cats.php">View Categories</a></li>
                      	<li class="divider"></li>
                        <li><a tabindex="-1" href="addCat.php">Add Categories</a></li>
                      </ul>
                    </li>
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop4" role="button" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop4">
                        <li><a tabindex="-1" href="pages.php">View Pages</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="addPage.php">Add a Page</a></li>
                      </ul>
                    </li>
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop5" role="button" class="dropdown-toggle" data-toggle="dropdown">Utilites<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop5">
                      	<!--<li><a tabindex="-1" href="apps/media.php">Media</a></li>-->
                      	<li><a tabindex="-1" href="apps/notebook.php">Notebook</a></li>
                      	<li><a tabindex="-1" href="apps/webmail.php">WebMail</a></li>
                      	<li><a tabindex="-1" href="apps/file_manager.php">File Manager</a></li>
                      </ul>
                    </li>
                  </ul>
            <p class="navbar-form pull-right" style="padding-top: 10px; color: white; float: right;">
              Welcome <?php echo $_SESSION['user']; ?>! | <a href="site-settings.php">Site Settings</a> | <a href="logout.php">Logout</a>
            </p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      		<h2 align="center">iOmega. Simple. Sweet. Serious.</h2>
      </div>

      <!-- Example row of columns -->
      <div class="row" style="color:white;">
        <div class="span4">
          <h2>Media</h2>
          <p>Upload documents, pictures, music and more! Once done uploading you will be given a link you can put into your blog post, or page.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Social Integration</h2>
          <p>Once you are done writing your blog post, what about also posting it to Facebook? With iOmega you can also do that too! Also, take advantage with the blog post Facebook, Twitter Icons, and more! Also have a Tweet or Facenook post? Use iOmega to post or Tweet it!</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Pages</h2>
          <p>Using iOmega, you can integrate your pages with iOmega. Use iOmega to create new pages, edit pages, and more with only a few changes of code. It's just that simple!</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
      <hr>

      <footer style="color:white;">
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
<?php
} else {
	header("Location: login.php");
}
?>
