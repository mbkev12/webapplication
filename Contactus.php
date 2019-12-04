<!DOCTYPE html>
<html lang="en">
<head>
	<title>K&M</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
/* Global */
img {
	border: 1px solid #000000;
  border-radius: 4px;
  padding: 5px;
  width: 200px;
}
ul {
  padding: 0;
  margin: 0;
}
/* Header */
header li{
  display: inline;
  padding: 0 20px 0 20px;
  float: left;
}
.navbar{
	background-color: #84ceeb;
	height: 20%;
	width: auto;
}
header a {
 color: #000000;
  text-decoration: none;
  font-size: 18px
	text-align:center;
}
a:hover {
  font-weight:normal;
  color: #8860d0;
}

/* buttons */

.btn-group{
		float: left;
	  border: none;
	  color: white;
	  padding: 0 10px 0 10px;
	  text-align: center;
	  text-decoration: none;
	  display: inline;
	  font-size: 10px;
	  margin: 4px 2px;
	  cursor: pointer;
		color: #9900cc;

}
#button0 {
  background-color:#c1c8e4;
  color: black;
  border: 2px solid #000000;
}
#button1 {
	background-color:#c1c8e4;
	color: black;
  border: 2px solid #000000;
}
#button2 {
  background-color:#c1c8e4;
  color: black;
  border: 2px solid #000000;
}
#button3 {
  background-color:#c1c8e4;
  color: black;
  border: 2px solid #000000;
}
#button4 {
  background-color:#c1c8e4;
  color: black;
  border: 2px solid #000000;
}
/* Top content*/
.jumbotron{
background-color: #5ab9ea;
display:block;
font-size: 22px;
}
/* Content */
.row{
	background-color: #5ab9ea;
	text-align: center;
	font-size: 22px;
}
.highlight{
	color:#06FE2E;
	font-weight:bold;
}
.column2{
	align-self: center;
}
.video{
	margin: 0 auto;
	width: 400px;
}
/* Footer */
footer{
  padding:20px;
  margin-top:20px;
  color:#000000;
  background-color:#5ab9ea;
  text-align: center;
	font-size: 22px;
}
</style>
<body>
	<div class="jumbotron text-center">
		<h1>
			<h1> <img src="K&M.jpg"></h1>
			<br><span class="highlight"> K&amp;M</span>  Web design and development
	</h1>
			<p>We specialize in your Web design and Development services!</p>
	</div>
<header>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
			<ul>
				<li>
					<div class="btn-group">
						<button id="button0" type="button" href="#oneway" class="btn btn-primary"><a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></button>
					</div>
				</li>

				<li>
					<div class="btn-group">
						<button id="button1" type="button" href="#oneway" class="btn btn-primary"><a href="Ourservices.php">Our Services</a></button>
					</div>
 				</li>

				

				<li><div class="btn-group">
							<button id="button3" type="button" href="#all" class="btn btn-primary"><a href="Contactus.php">Contact Us</a></button>
          	</div>
		  	</li>

				<li><div class="btn-group">
							<button id="button4" type="button" href="#xml" class="btn btn-primary"><a href="xmlhttp.html">Check XMLhttp Status </a></button>
          	</div>
		  	</li>
			</ul>
		</nav>
	</div>
</header>
		<div class="row">
				<div class="column2"><span class="highlight"> K&amp;M</span> web design and Development <br>
						<br>
						<p>
						
						<div class="column2">
					  <h2><b>Contact Us</b></h2>
	<form action="connect.php" method="post"> 
	<label id="first"> Name:</label><br/>
	<input type="text" name="name"><br/>

	<label id="first">Number:</label><br/>
	<input type="salary" name="number"><br/>

	<label id="first">Email:</label><br/>
	<input type="text" name="email"><br/>

	<button type="submit" name="save">Submit</button>
	
	<br>
			 </p>
				    

	<footer class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>K&M Web Design and Developments©</p>
	</footer>

</body>

</html>
