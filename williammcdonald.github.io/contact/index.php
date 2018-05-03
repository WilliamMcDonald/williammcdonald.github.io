<!DOCTYPE html>
<html>
  <!--- 2071124516 --->
<head>
  <title> William McDonald </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/custom.min.css">
  <link rel="stylesheet" href="../css/nat.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

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
			<li><a href="../index.html"> Home </a></li>
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
      <a href="contact/index.php" class="btn disabled" role="button"> Form </a>
		</div>
        <!-- Middle -->
		<div class="col-sm-8 text-left">
      <h2> This is currently a Work in Progress and does not work </h2>
      <!-- This part is based on http://www.freecontactform.com/email_form.php -->
      <form name="contactform" method="post" action="send.php">
        <table width="450px">
            <tr>
              <td valign="top">
                <label for="first_name">First Name *</label>
              </td>
              <td valign="top">
                <input  type="text" name="first_name" maxlength="50" size="30">
              </td>
            </tr>
            <tr>
              <td valign="top">
                <label for="last_name">Last Name *</label>
              </td>
              <td valign="top">
                <input  type="text" name="last_name" maxlength="50" size="30">
              </td>
            </tr>
            <tr>
              <td valign="top">
                <label for="email">Email Address *</label>
              </td>
              <td valign="top">
                <input  type="text" name="email" maxlength="80" size="30">
              </td>
            </tr>
            <tr>
              <td valign="top">
                <label for="telephone">Telephone Number</label>
              </td>
              <td valign="top">
                <input  type="text" name="telephone" maxlength="30" size="30">
              </td>
            </tr>
            <tr>
              <td valign="top">
                <label for="comments">Comments *</label>
              </td>
              <td valign="top">
                <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="text-align:center">
                <input type="submit" value="Submit">
              </td>
            </tr>
          </table>
        </form>
      </div>
            <!-- Right -->
      <div class="col-sm-2 sidenav">
        <h3> Previous Placings in Competitions </h3>
        <p> No placings yet, but I hope to be participating in picoctf 2017. </p>
      </div>
    </div>
  </div>

</body>
</html>
