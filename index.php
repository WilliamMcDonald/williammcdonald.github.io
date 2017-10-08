<!DOCTYPE html>
<html>
  <!--- 1225 --->
<head>
  <title> William McDonald </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.min.css">
  <link rel="stylesheet" href="css/nat.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
<!--- add your bootstrap code  below this line--- >
<!-- This is for navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li><a href="index.php"> Home </a></li>
			<li><a href="skills.html"> Computer Science Skills </a></li>
			<li><a href="tritech/tt2016.html"> Tritech Summer School </a></li>
			<li><a href="https://github.com/WilliamMcDonald"> Github </a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Github Repositories <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="https://github.com/WilliamMcDonald/Arduino"> Arduino </a></a></li>
					<li><a href="https://github.com/WilliamMcDonald/HTML"> HTML </a></li>
					<li><a href="https://github.com/WilliamMcDonald/Java"> Java </a></li>
					<li><a href="https://github.com/WilliamMcDonald/Python"> Python </a></a></li>
					<li><a href="https://github.com/WilliamMcDonald/williammcdonald.github.io"> Github IO </a></li>
				</ul>
			</li>
		</ul>
	</div>
	</div>
</nav>


<!--- end of my code -->
<!--- do not delete this code -->

<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});
  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>


<div id="header">
<h1> William McDonald </h1>
</div>

<!-- the web page layout -->
<div class="container-fluid text-center">
	<div class="row content">
        <!-- Left -->
		<div class="col-sm-2 sidenav">
      <p> Contact Me </p>
      <p> This is currently a Work in progress, and does not work </p>
      <p> If you would like to contact me, contact me at wmcdonald2k.git@gmail.com </p>
      <a href="contact/index.php" class="btn btn-primary btn-c" role="button"> Form </a>
		</div>
        <!-- Placeholder Middle -->
    <div class="col-sm-8 text-center">
        <h2> Full Navigation </h2>
    </div>
        <!-- Right -->
		<div class="col-sm-2 sidenav">
			<h3> Previous Placings in Competitions </h3>
				<p> No placings yet, but I hope to be participating in picoctf 2017. </p>
		</div>
      <!-- Middle -->
    <div class="col-sm-8 text-center">
      <div class="col-sm-4 text-center">
        <div class="panel panel-primary">
          <div class="panel-heading panel-c"> Home Page </div>
          <div class="panel-body"> This page </div>
          <div class="panel-footer panel-c">
            <a href="index.php" class="btn btn-primary btn-c" role="button" data-toggle="tooltip" title="I have no idea why I put this here, you're looking at this right now."> Link </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="panel panel-primary">
          <div class="panel-heading panel-c"> Tritech Summer School </div>
          <div class="panel-body"> Details my time at the Tritech Summer Class Program </div>
          <div class="panel-footer panel-c">
            <a href="tritech/tt2016.html" class="btn btn-primary btn-c" role="button"> Tritech Summer School 2016 </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="panel panel-primary panel-c">
          <div class="panel-heading panel-c"> Template Page </div>
          <div class="panel-body"> Where I designed the look and css, feel free to use for yourself! </div>
          <div class="panel-footer panel-c">
            <a href="template.php" class="btn btn-primary btn-c" role="button"> Link </a>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>

</body>
</html>
