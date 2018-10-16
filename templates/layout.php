<!-- templates/layout.php -->
<!DOCTYPE html>
  <html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <!-- Style -->
    <style>
		<?php include 'style/main.css'; ?>
	</style>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
     <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">DeustoCarBlog</a>
    </div>




    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
     <ul class="nav navbar-nav navbar-right">

    </ul>
  </div><!-- /.navbar-collapse -->
</div>
</nav>

<!-- START SECTION -->
<div class="section hero text-center background-dark dark-bg" style="padding-top: 200px;
padding-bottom: 200px;">
<div class="background-image"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="card">
      </br>
      </br>
        <div class="row">
			<div style="color: black;">
				<?php echo $content ?>
			</div>
        </div>
        </br>
        </br>
      </div>

    </div>
  </div>
</div>
</div>

<div class="container">
	<div class="row">
            <div class="col-md-6">
              <h3 class="text-uppercase font-size-md letter-spacing-md font-weight-lg ">Email</h3>
              <p> alberto.miranda [AR] opendeusto [DOT] com</p>
            </div>
            <div class="col-md-6 ">
              <h3 class="text-uppercase font-size-md letter-spacing-md font-weight-lg "> GitHub</h3>
              <a href="https://github.com/AlbertoMGV">GitHub.com/AlbertoMGV</a>
            </div>
          </div>
</div>


<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
