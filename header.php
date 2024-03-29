<?php
include 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script src="bootstrap/js/jquery-3.3.1.js"></script>
  <script src="jquery/cdnjs/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
  <script src="bootstrap/js/bootstrapValidator.min.js"></script>
  <title>Kenya Taekwondo Federation</title>
  <link rel="icon" href="Images/logo.jpg">
</head>
<style>
#img1{
        height: 580px;
      }
  #logo1{
    height: 100px;
    width: 100px;
  }  
  
  @media(max-width: 1000px){

      #rightlogo{
         display: none;
         width: 0px;
      }
      #img1{
        height: 300px;
      }
      
      #hd{
         display: none;
         width: 0px;
      }
      #header1{
         display: none;
         width: 0px;
      }
      #right{
         display: none;
         width: 0px;
      }
      #leftt{
         display: none;
         width: 0px;
      }
      
      #brs{
        margin-top: 30px;
      }
      #logo1{
        height: 50px;
        width: 50px;

      }
      #heading{
        font-size: 1em;
      }

    }
    /* Dropdown Button */
.dropbtn {
    background-color:black;
    color: red;
    padding: 16px;
    font-size: 16px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: maroon;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #007844;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color:#262626;
} 
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 5px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: transparent;
  color: maroon;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}



</style>
<body style="background:white;">
<div class="container-fluid" id="header1" style="background:black;margin-top:-3px;height:50px;margin-left:0px;margin-right:0px;" >
<h5 style="color:white;text-align:left;"> <span class="glyphicon glyphicon-envelope" style="color:white;"></span>  info@kenyataekwondo.co.ke <b id="hd" style="color:blue;float:right;"><span class="fa fa-facebook-square">  &nbsp;&nbsp</span><span class="fa fa-twitter"></span>&nbsp;&nbsp</span><span class="fa fa-instagram"></span>&nbsp;&nbsp</span><span class="fa fa-youtube"></span><i style="color:green;"> <input type="text" name="name" placeholder="Search..."></i></b></h5>

</div>

<div id="heade">
<div class="container-fluid" id="header" style="background:white;margin-top:30px;margin-left:0px;margin-right:0px;" >

<div class="col-md-2" id="logo" >
 <img id="logo1" src="Images/logo.jpg"  style="border:none;margin-top:1px;">  
</div>
<div class="col-md-8">

<h3 style="color:black;" id="heading"><strong>KENYA TAEKWOO FEDERATION</strong><br> (KTF)</h3>


</div>
<div class="col-md-1" id="rightlogo">
  <img id="logo1" src="Images/logo.jpg"  style="width:200px;height:100px;border:none;margin-top:2px;"> 
</div>
</div>
</div>
<div class="container-fluid" id="toolbar" style="margin-top:-1px;margin-left:-15px;margin-right:-15px;">
  <nav class="navbar navbar-inverse" style="background:black;" id="myNav4">

    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span style="color:white;">Menu</span>
                               
      </button>
     
    <div class="collapse navbar-collapse" id="myNavbar"  >
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php" style="color:white;"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        
        <li class="dropdown">
        <a class="dropbtn" href="#" style="color:white;"><span class="glyphicon glyphicon-pencil"></span> Registration<span class="caret"></span></a>
          <div class="dropdown-content">
              
              <a href="regigistration_guideline.php" style="width:100%;border:none;" > How to Register</a>
            <a href="portal/registration.php" style="width:100%;border:none;" > Athletee registration</a>
            <a href="portal/coach_registration.php" style="width:100%;border:none;" > Coach registration</a>
            <a href="portal/referee_create_account.php" style="width:100%;border:none;" > Referee registration</a>
            <a href="portal/coach_login.php" style="width:100%;border:none;"> Club registration</a>
              
          </div>
          </li>
        <li class="dropdown">
        <a class="dropbtn" href="#" style="color:white;"><span class="glyphicon glyphicon-calendar"></span> Events<span class="caret"></span></a>
          <div class="dropdown-content">
              
              
              <a href="upcoming_event.php" style="width:100%;border:none;" >View upcoming events/seminars</a>
              <a href="#" style="width:100%;border:none;" >View past events/seminars</a>
              <a href="portal/index.php" style="width:100%;border:none;">apply events/seminars participation</a>
              
          </div>
          </li>
        <li class="dropdown">
        <a class="dropbtn" href="#" style="color:white;"><span class="glyphicon glyphicon-pawn"></span> Athletes<span class="caret"></span></a>
          <div class="dropdown-content">
              
              <a href="portal/registration.php" style="width:100%;border:none;">Register as athlete</a>
              <a href="#" style="width:100%;border:none;" >View top athletee</a>
              
          </div>
          </li>
          <li class="dropdown">
        <a class="dropbtn" href="#" style="color:white;"><span class="glyphicon glyphicon-tasks"></span> Portal<span class="caret"></span></a>
          <div class="dropdown-content">
             <a href="portal/index.php" style="width:100%;border:none;" >Athlete portal</a>
              <a href="portal/coach_login.php" style="width:100%;border:none;">Coach portal</a>
              <a href="portal/referee_login.php" style="width:100%;border:none;">Referee portal</a>
          </div>
          </li>
        <li class="dropdown" style="color:red;" >
          <a  href="#advert" style="color:white;"><span class="glyphicon glyphicon-bullhorn"></span> Advertisement</a>
          
        </li>
        
        
        <li class="dropdown">
        <a  href="#breaking" style="color:white;"><span class="glyphicon glyphicon-registration-mark"></span> News</a>
          
          </li>
           
         
        <li >
        <a  href="#" style="color:white;"><span class="glyphicon glyphicon-picture"></span> Gallery</a>
          
          </li>
          
        
      </ul>
      
    </div>
    
  </div>
</nav>
</div>
