<?php  
 include_once("Controllors/studentProfil.php");
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "admin_aqua";  
 $message = "";  
 
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["email"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  echo "essaie";
               echo $_POST["email"];
               echo "this";
               echo  $_POST["password"]  ;
               $mail= $_POST["email"];
               $pssw= $_POST["password"];
                $query = "SELECT * FROM users WHERE email = '$mail' AND password = '$pssw'";  
                $statement = $connect->prepare($query);  
                $statement->execute();  
                $count = $statement->rowCount();  
               
                if($count > 0)  
                {  echo "reussis";
                     $_SESSION["email"] = $mail;  
                     $_SESSION["id"]= $statement->fetchColumn(0);
                     
                     header("location: studentProfil.php");  
                }  
                else  
                {  echo "fechlen";
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>free-educational-responsive-web-template-webEdu</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="courses.html">Primary</a></li>
                  <li><a href="price.html">Middle</a></li>
                  <li><a href="videos.html">Secondary</a></li>
                  <li><a href="videos.html">Student</a></li>
                  <li><a href="videos.html">Parent</a></li>
                
                  <li><a href="contact.html">Contact  </a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <div class="bg">
    <div class="bg-img"></div>
     
        <div class="form" method="post">
          <div class="login">
            <div class="login-header">
                <div class="bg-logo"></div>
              </br>
             </br>
              </br>
              </br></br>
              
              <p></br></br>Please enter your credentials to login.</p>
            </div>
          <form class="login-form" method="post">
            <input type="email" name="email" class="form-control" />
            
            <input type="password" name="password" class="form-control"/>
          
          
            <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="login">Login</button>
                     
                    </div>
                  </div>
            
          </form>
        </div>
       </div>

      
</div>


    
  	<div class="footer2">
     
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
                <a href="about.html">About</a>
                <a href="courses.html">Primary</a>
               <a href="price.html">Middle</a>
                <a href="videos.html">Secondary</a>
               <a href="videos.html">Student</a>
               <a href="videos.html">Parent</a>
              
               <a href="contact.html">Contact  </a>
							
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
						
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
