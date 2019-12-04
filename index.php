<!DOCTYPE html>

 <?php 


/*
define ('NDB_API_KEY','ZTzBpijE6CCiVQJThWDMrS53j72zaMewcfEjK5Mfr');
$params = array ('api_key' => NDB_API_KEY, 'q' => 'black pepper')










/*

$output = file_get_contents("movies.json");
$json = json_decode($jsondata, true);   
$output = "<ul>";



	echo $output .="<h4>".$movie['title']."</h4>";


/*

$jsondata = file_get_contents("data.json");
$json = json_decode($jsondata, true);

echo $json[0]['name'];
echo '<br>';






$output = file_get_contents("movies.json");
$json = json_decode($jsondata, true);   
$output = "<ul>";
foreach ($json[movies] as $movie){
	echo $obj->name;
echo "<br>";
echo $obj->interest[0];

if ($output)
}
$output .= "</ul>";
	missing information








/*
$xml_string = "<?xml version='1.0' ?>
<users> 
<user id = '398'>
<name>foo</name>
<email>foo@bar.com</email>
</user>

<user id = '398'>
<name>Peter</name>
<email>Peter@Peter.com</email>
</user>

</users>";
$xml = simplexml_load_string($xml_string);
foreach($xml->user as $user)
{
	echo $user['id'], ' ';
	echo $user->name, ' ';
	echo $user->email, '<br />';
}









/* $json_string = '{"id":1,
	 "name": "foo",
	  "email":"foo@foobar.com",
	   "interest": {"wordpress","php" ]}';


$obj = json_encode($json_string);
echo $obj->name;
echo "<br>";
echo $obj->interest[0];



/*
function page_header()

{
	
	print 'welcome to my website';


}

page_header();





/*
$MathScore = 75;
$English = 60;

if (($MathScore >=70) && ($EnglishScore >=70))
{
	echo "You qualifed for admission in Engineering";
}
else
{
	echo "You are qualifed for simple B.Sc admission";


}


/*
$ExampleVar = "Monday";
if($ExampleVar =="Monday")
{
	echo "It is monday";

}
else 
{
	echo "it is not monday ";
}



/*
$BlackjackPlayer1 = 20;
($BlackjackPlayer1 <= 21) ? $Result = "Player 1 is still in the game. " : $Result = "Player 1 is out of the action.";
echo "<p>", $Result, "</p>";


/* $StudentID = 100;
$CurstudentId = --$StudentID;

echo "<p> The first student ID is ", $CurstudentId, "</p>";
$CurstudentId = --$StudentID;
echo "<p>The second student ID is " , $CurstudentId, "</p>";

/*$x = 10;
$y = 15;


$z = $x * $y;
print "<br>";
print 'reminder ='.$z; 


*/


$xml_string = "<?xml version='1.0' ?>
<users> 
<user id = '1'>
<name>Admin: Kevin</name>
<email>mb.kevin@yahoo.com</email>
</user>

<user id = '2'>
<name>Admin: Karl</name>
<email>Karl.smyth@gmail.com</email>
</user>

</users>";

$xml = simplexml_load_string($xml_string);
foreach($xml->user as $user)
{
	echo $user['id'], ' ';
	echo $user->name, ' ';
	echo $user->email, '<br />';
}

?>
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
						<p>Web hosting is a service that allows organizations and individuals to post a website or web page onto the Internet.
							A web host, or web hosting service provider, is a business that
							provides the technologies and services needed for the website or
							webpage to be viewed in the Internet.</p>
							<p>Websites are hosted, or stored,
							on special computers called servers. When Internet users want to view
							your website, all they need to do is type your website address or
							domain into their browser.</p>
							<p>Their computer will then connect to your server and your webpages will be delivered to them through the browser. <br>
							Most hosting companies require that you own your domain in order to
							host with them, If you do not have a domain, the hosting companies will
							help you purchase one.
							<br></p>
					</div>
			</div>
			<div class="video">

				<div class="column2">

				<iframe src="https://www.youtube.com/embed/BDdACdrs1vE" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>

				</div>

			</div>


	<footer class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>K&M Web Design and Developments©</p>
	</footer>

</body>

</html>