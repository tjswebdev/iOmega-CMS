<?php
	include('includes/connect.php');
?>
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
	<link rel="stylesheet" type="text/css" href="assets/css/prettify.css"></link>
	<link rel="stylesheet" type="text/css" href="assets/src/bootstrap-wysihtml5.css"></link>
	
	<style type="text/css" media="screen">
		.btn.jumbo {
			font-size: 20px;
			font-weight: normal;
			padding: 14px 24px;
			margin-right: 10px;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border-radius: 6px;
		}
	</style>
		
	<script type="text/javascript" src="assets/lib/jquery-1.8.2.min.js"></script>		

	
	<!-- Redactor is here -->
	<link rel="stylesheet" href="assets/redactor/redactor.css" />
	<script src="assets/redactor/redactor.min.js"></script>

	<script type="text/javascript"> 
	$(document).ready(
		function()
		{
			$('#redactor').redactor();
		}
	);
	</script>				

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
                    <li>
                      <a href="/">Home</a>
                    </li>
                    <li class="dropdown" class="active">
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
      	<h3 style="margin-top: -20px;">Add a Post</h3>
      		<form action="doAddPost.php" method="post">
<table>
	<tr>
		<td><label for="PostName">Name</label></td><td><input type="text" name="PostName" /></td>
	</tr>
	<tr>
		<td><label for="PostAuth">Author</label></td><td><input type="text" name="PostAuth" /></td>
	</tr>
	<tr><td></br></td></tr>
	<tr>
		<td><label for="PostContent">Content</label></td>
		<td><textarea id="redactor" class="textarea" name="PostContent" ><?php echo $post['Content']; ?></textarea></td>
	</tr>
	<tr><td></br></td></tr>
	<tr>
		<td><label for="PostCats">Category</label></td>
		<td>
			<select name="PostCats">
				<?php
					$result = mysql_query("SELECT * FROM categories");
					while($cat = mysql_fetch_assoc($result)) {
				?>
					<option value="<?php echo $cat['ID']; ?>"><?php echo $cat['Title']; ?></option>
				<?php	
					}
					?>
			</select>
		</td>
	</tr>
	<tr>
		<td> </td>
		<td><button type="submit" name="submit" class="btn"/>Submit!</button></td>
	</tr>
</table>
</form>
      </div>

      

      <hr>

      <footer style="color:white;">
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

<script>
	$('.textarea').wysihtml5();
</script>

  </body>
</html>
<?php
} else {
	header("Location: ../index.php");
}
?>
