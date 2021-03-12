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

    <div class="container">
      <div class="row">
            <div class="col-md-3">
              <div class="grey-box-icon">
                <div class="icon-box-top grey-box-icon-pos">
                  <img src="1x/schedule.png" alt="" />
                </div><!--icon box top -->
                <h4>Global schedule</h4>
                <p>here you van find the global schedule of the school you can check it when click on the link below</p>
                   <p><a href="#"><em>Read More</em></a></p>
              </div><!--grey box -->
            </div><!--/span3-->
            <div class="col-md-3">
              <div class="grey-box-icon">
                <div class="icon-box-top grey-box-icon-pos">
                  <img src="1x/teacher.png" alt="" />
                </div><!--icon box top -->
                <h4>Our teachers</h4>
                <p>here you find the list of our teachers with their reception day and time check it when click on the link below</p>
                   <p><a href="#"><em>Read More</em></a></p>
              </div><!--grey box -->
            </div><!--/span3-->
            <div class="col-md-3">
              <div class="grey-box-icon">
                <div class="icon-box-top grey-box-icon-pos">
                  <img src="1x/show.png" alt="" />
                </div><!--icon box top -->
                <h4>Pratical information</h4>
                <p>here you find all the pratical information relative to our school check it when click on the link below</p>
                   <p><a href="#"><em>Read More</em></a></p>
              </div><!--grey box -->
            </div><!--/span3-->
            <div class="col-md-3">
              <div class="grey-box-icon">
                <div class="icon-box-top grey-box-icon-pos">
                  <img src="1x/food.png" alt="" />
                </div><!--icon box top -->
                <h4>Restaurants</h4>
                <p>here you find all the meal schedue we offer in our school you can just check it when click on the link below.</p>
                   <p><a href="#"><em>Read More →</em></a></p>
              </div><!--grey box -->
            </div><!--/span3-->
          </div>


          <?php
        $host = "localhost";  
        $username = "root";  
        $password = "";  
        $database = "admin_aqua";  
        $message = "";  
       
       
           $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
         $stmnt=$conn->prepare("SELECT * FROM `articles` WHERE optous ='1' and opsecondary= '1'");
         $stmnt->execute();
         $details=$stmnt->fetchAll();
        foreach($details as $detail){
          
        
        ?>
          <div class="col-md-3">
              <div class="grey-box-icon">
                <div class="icon-box-top grey-box-icon-pos">
                  <img src="1x/schedule.png" alt="" />
                </div><!--icon box top -->
                <h4><?php echo $detail['titre'];?></h4>
                <p><?php          echo $detail['description'];?></p>
                   <p><a href="#"><em>Read More</em></a></p>
              </div><!--grey box -->
            </div><!--/span3-->
     
      <?php }?>
      </div>
      
      </section>
      <hr>


    <!-- container -->
    <section class="container">
   
              <div class="row">
        <div class="row">
            <!-- main content -->
            <section class="col-sm-8 maincontent">
                <h3>Teachers of this level:</h3>
              
               
                
            </section>
            <!-- /main -->

           

        </div>
        <table class="table">
                <thead>
                  <tr>
                    <th>name</th>
                    <th>familyname</th>
                    <th>Reception day</th>
                    <th>Start reception</th>
                    <th>End of reception</th>
                    <th>E-mail</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <?php
                        $host = "localhost";  
                         $username = "root";  
                        $password = "";  
                        $database = "admin_aqua";  
                          $message = "";  
        
        
                               $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
                               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
                               $stmnt=$conn->prepare("SELECT * FROM classes where id_level= 3 ");
                              $stmnt->execute();
                              $details=$stmnt->fetchAll();//contient toute les classes de ce niveau
                              foreach($details as $detail){
                                  $class=$detail['id_class'];
                                $stmnt1=$conn->prepare("SELECT * FROM session where id_class= '$class' ");
                                $stmnt1->execute();
                                $details1=$stmnt1->fetchAll();
                                foreach($details1 as $detail1)
                                {$prof=$detail1['id_teacher'];
                                    $stmnt2=$conn->prepare("SELECT * FROM teachers where id_teacher= '$prof' ");
                                    $stmnt2->execute();
                                    $details2=$stmnt2->fetchAll();
                                    foreach($details2 as $detail2){
         
                              ?>
                       <tr>          
                    <td><?php          echo $detail2['name'];?></td>
                    <td><?php          echo $detail2['family_name'];?></td>
                    <td><?php          echo $detail2['recep_day'];?></td>
                    <td><?php          echo $detail2['start_recep'];?></td>
                    <td><?php          echo $detail2['end_recep'];?></td>
                    <td><?php          echo $detail2['email'];?></td>
                  
                             
                              
                    
                  </tr>
                  <?php }}}?>
                 
                </tbody>
                
              </table>
              <div class="row">
            <!-- main content -->
            <section class="col-sm-8 maincontent">
                <h3>Restaurants:</h3>
              
               
                
            </section>
            <!-- /main -->

           

        </div>
              <table class="table">
                <thead>
                  <tr>
                    <th>Day</th>
                    <th>Starter</th>
                    <th>Main</th>
                    <th>Dessert</th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <?php
                        $host = "localhost";  
                         $username = "root";  
                        $password = "";  
                        $database = "admin_aqua";  
                          $message = "";  
        
        
                               $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
                               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
                               $stmnt=$conn->prepare("SELECT * FROM meals ");
                              $stmnt->execute();
                              $details=$stmnt->fetchAll();
                              foreach($details as $detail){
         
                              ?>
                       <tr>          
                    <td><?php          echo $detail['day'];?></td>
                    <td><?php          echo $detail['starter'];?></td>
                    <td><?php          echo $detail['main'];?></td>
                    <td><?php          echo $detail['dessert'];?></td>
                    <td><?php          echo $detail['time'];?></td>
                             
                              
                    
                  </tr>
                  <?php }?>
                 
                </tbody>
              </table>
    </section>
    <section id="main-content">
      
      <div class="row"  id="schedule">
           
            
        <?php
                            $host = "localhost";  
                             $username = "root";  
                            $password = "";  
                            $database = "admin_aqua";  
                              $message = "";  
            
            
                                   $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
                                   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
                                   $stmnt2=$conn->prepare("SELECT * FROM classes where id_level= 3");
                                  $stmnt2->execute();
                                  $details2=$stmnt2->fetchAll();
    
                                  foreach($details2 as $detail2){
                                    $group=$detail2['id_class'];
                                    ?>
                                    <section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> Schedule Group:<?php          echo $detail2['name_class']; echo " -- "; echo $detail2['id_level']; ?> </h3>
                                    
           <div class="col-md-12">
          <div class="content-panel">
                  
                  
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Day</th>
                        <th>Session1</th>
                        <th>Session2</th>
                        <th>Session3</th>
                        <th>Session4</th>
                        <th>Session5</th>
                        <th>Session6</th>
                        <th>Session7</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                      <?php
                           
             
                                   $stmnt=$conn->prepare("SELECT * FROM meals ");
                                  $stmnt->execute();
                                  $details=$stmnt->fetchAll();
    
                                  foreach($details as $detail){
                                    $day= $detail['day'];?>
                                     <tr>
                                     <td><?php          echo $detail['day'];?></td>
                                     <?php
                                   $stmnt1=$conn->prepare("SELECT * FROM session WHERE day= '$day' AND id_class= '$group' ORDER BY h_start ");
                                   $stmnt1->execute();
                                   $details1=$stmnt1->fetchAll();
                                   foreach($details1 as $detail1){
             
                                  ?>
                                    
                        <td><?php          echo $detail1['h_start']; echo " -- "; echo $detail1['h_end']; ?>
                        <br></br><?php          echo "Class:"; echo $detail1['id_classrooms'];?></td>
                        
                                 
                                  
                        
                     
                      <?php }?>
                      </tr>
                      <?php }?>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <?php }?>
      </section>
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
