<?php

//echo "Hello chuks <br />";
?>

<?php
$name =""; $nameErr="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   if (empty($_POST["name"])){
       $nameErr ="Name is required";
   } else{
       $name=$_POST["name"];
     } 
}
?>
<?php

//$myString = "Hello!";
//echo $myString;
//echo "i \"love\" using PHP!";
?>

<?php
//function sum($x, $y){
    //$z = $x + $y;
    //return $z;
    
//}
//echo "5 + 10 =".sum(5, 10)."<br>";
//echo "7 + 13 =".sum(7, 13)."<br>";
//echo "2 + 4 =".sum(2, 4)."<br>";
?>

<?php
//echo $_SERVER['PHP_SELF'];
//echo "<br>";
//echo $_SERVER['SERVER_NAME'];
//echo "<br>";
//echo $_SERVER['HTTP_HOST'];
//echo "<br>";

?>
<h2>WELCOME</h2>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    Name:<input type="text" name="name"><br>
    <span style="red">*</span><?php echo $nameErr="Name is required" ?><br>
    
    
    E-mail:<input type="text" name="email"><br>
    <span style="red">*</span><?php echo $nameErr="Email is required" ?><br>
    <!--password:<input type="password" name="psw"><br>-->
    <input type="submit">
</form>



<?php
echo"<h2>Database:</h2>";
echo $names;
echo "<br>";
    echo $email;
echo "<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>VeloRapid</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<script src="jquery/jquery-3.3.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>




<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Velo-Rapid</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="#contact">Contact us</a></li>
      <li><a href="#contact">Services</a></li>
    </ul>
    </div>
</nav>

<div class="col-sm-3">
	
		
	<a href="group_work/brt_form.html"><button class="button">Book a Seat</button></a>
		<br />
		<br />
		

	<div class="fm">
  <form action="https://www.w3schools.com/action_page.php">
    <label for="fname">Username</label>
    <input type="text" id="fname" name="firstname" placeholder="Email..">

    <label for="lname">Password</label>
    <input type="Password" id="lname" name="lastname" placeholder="Your Password..">
    <input type="submit" value="Sign In">
    <a href="#">Register with us</a>
  </form>
  	</div>
  	<br>
  	<div>
		<p>Don't Know where to find the closest BRT Station?
			<a href="#"  style="">View Map</a>
		</p>
	</div>
	</div>
</div>

<div class="col-sm-9">
	

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/bus2.jpg" alt="">
      <div class="carousel-caption">
        <h3>Ojota</h3>
        </div>
    </div>

    <div class="item">
      <img src="img/bus4.jpg" alt="">
      <div class="carousel-caption">
        <h3>TBS</h3>
        
      </div>
    </div>
    <div class="item">
      <img src="img/brt3.jpg" alt="">
      <div class="carousel-caption">
        <h3>TBS</h3>
        
      </div>
    </div>

    <div class="item">
      <img src="img/brt1.jpg" alt="">
      <div class="carousel-caption">
        <h3>Ikeja</h3>
        
      </div>
    </div>
    

  </div>
  
  
  
  <?php require("menu.php");?>
  
  
  
  

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>


<div class="clr"></div>
<hr>
	


<div class="container-fluid fluid">
  
  <div class="row">
    <div class="col-sm-6" style="background-color:">
    
	<div class="feedback">
		<p><h3>Feedback</h3></p>
		<hr>
		<form action="https://www.w3schools.com/action_page.php">
    <label for="fname" style="color: white">Username</label>
    <input type="text" id="fname" name="firstname" placeholder="Email..">

    <label for="comment" style="color: white">Comment</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px;"></textarea>
    <input type="submit" value="Submit">
		</form>
	</div>
    </div>
    
    <div class="col-sm-3" style="background-color:">
    <h3 id="contact">Contact us</h3>
    <hr>
      <p align="justify" style="font-weight: bold; color: white">Address:No 117 Apapa Road, <br>off Costain Junction.<br><br>
		Tel: 07033577335<br>
		Whatssap: 08050936966</p>
    </div>
    <div class="col-sm-3" style="background-color:;">
      <h3>FAQ</h3>
      <hr>
      <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-1" data-toggle="collapse" data-parent="#accordion">
                                    Will I queue if I get there?
                                </a>
                            </div><!-- End panel title -->
                            <div id="collapse-1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas non urna in fringilla. Praesent consequat est at feugiat faucibus
                                </div>
                            </div><!-- End Panel collapse -->
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-2" data-toggle="collapse" data-parent="#accordion">
                                    How soon can I book?
                                </a>
                            </div><!-- End panel title -->
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas non urna in fringilla. Praesent consequat est at feugiat faucibus
                                </div>
                            </div><!-- End Panel collapse -->
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-2" data-toggle="collapse" data-parent="#accordion">
                                    If I miss my bus, what can I do?
                                </a>
                            </div><!-- End panel title -->
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas non urna in fringilla. Praesent consequat est at feugiat faucibus
                                </div>
                            </div><!-- End Panel collapse -->
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-3" data-toggle="collapse" data-parent="#accordion">
                                    How do I cancel my ticket?
                                </a>
                            </div><!-- End panel title -->
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas non urna in fringilla. Praesent consequat est at feugiat faucibus
                                </div>
                            </div><!-- End Panel collapse -->
                        </div>
                    </div>
                </div><!-- End panel group -->
    </div>
  </div>
  <p align="center" style="color: white;">Copyright &copy; Velo4 2019</p>
</div>



</body>


</html>
