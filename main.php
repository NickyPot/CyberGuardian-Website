<?php

session_start();
if($_SESSION["loggedin"]==false)
{
    header('location: index.php');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cyber Guardian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
</head>
<body>


<div class="container-fluid">
	<a class="navbar-brand" hred="main.php"><img src="CYberGuardianLogo.png"></a>
	
<div >
	<h3> Bringing you cyber security news, one month at a time.</h3>
	</div>
 
</div>


<!-- Black with white text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

 <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="contactUs.html">Contact Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tutorPage.html">Tutor Page</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ourGoal.html">Our Goal</a>
    </li>
    
  </ul>

</nav>



<div style="background-color:darkcyan;" id="caro" class="carousel slide" data-ride="carousel"><center>

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#caro" data-slide-to="0" class="active"></li>
    <li data-target="#caro" data-slide-to="1"></li>
    <li data-target="#caro" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image.jpg">
	  <div class="carousel-caption1">
    <h3>New May 2018 Issue</h3>
    <p>The new issue is now available to you.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="image2.jpg" >
	  <div class="carousel-caption1">
    <h3>A thank you to the editor</h3>
    <p>We would like to thank, Nick, the editor of the current issue, for his outstanding work.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="image3.jpg" >
	  <div class="carousel-caption1">
    <h3>Next Issue: June 2018</h3>
    <p>The next issue is due to be released in June 2018</p>
  </div>
    </div>
  </div>

  <!-- Left and right controls -->
  
  <a class="carousel-control-prev" href="#caro" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#caro" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


<div class="containerart" style="margin-top:30px">
  <div class="row">
    
    <div class="col-sm-8">
      <h2>Computer Scientists Have Come Accross a New Generation Phishing Kit</h2>
      <h5>May 2018</h5>
      
      <p>Scientists at Check Point and CyberInt have come accross a new phishing kit that makes life easy for novice hackers. The kit includes extensive information on how to fabricate a fake website and how to get your victims to 
	  trust you with their personal and financial information.</p>

	  <p>The kit was allegedly create by a user of the Deep Web with the username [A]pache, who even includes advice such as if you are imitating a fake shopping website, use competitive price and always use domain
	  names that are similar to the targeted website.</p>
	  
	  <p>The kit costs from 100 dollars all the up tp 300 dollars, which is considerably higher than the normal prices for phishing kits. However, the kit provides a lot more resources than normal kits so a lot more 
	  people are likely to spend the extra funds, which makes this kit highly dangerous.</p>
	  
      <br>
      <h2>New 40$ toolkit helps hackers easily build Microsoft Office Macro Malware</h2>
      <h5>May 2018</h5>
      
	  <p>A toolkit that helps create Microsoft Word document files with trojans and other kinds of malicious software has been found to be on sale on the Deep Web. The piece of software costs 40$ for one month, which is a discounted price 
	  from its original 500$ per month price tag.</p>
	  
	  <p>It is suspected that the creator and the distributor of the software is likely to be of Western heritage, or a well-educated individual, as his command of the English language is proficient, which is apparent from his forum posts
	  on the Deep Web.</p>
	  
	  <p>The Doc files are usually used as attachments in spam email. Inexperienced users, then download and open them, which then gives access to the malicious software which is usually used to take control of the victim's
	  computer and/or access his or hers personal files.</p>
    
	
	<br>
      <h2>Darpa Combines Humans and Computers for Cybersecurity</h2>
      <h5>May 2018</h5>
      
	  <p>Darpa, the Defense Advanced Research Projects Agency has decided to start an initiative, where it will combine the strength of humans and the strengths of machines in order to improve significantly on cybersecurity.</p>
	  
	  <p>The organisation got the idea from a team of graduate students. The group entered a competition at DEF Con, which is a hacker/cybersecurity conference, with an autonomous cybersecurity system. A DARPA official took notice, 
		which gave rise to the initiative.</p>
	  
	  <p>The program is not expected to yield any results any time soon, as the project is the first of its kind, which means a time frame would be very difficult to manufacture. However, it is expected to massively improve
	  on current methods of cybersecurity.</p>
    </div>
	
	<div class="col-sm-4">
      <h2>About This Month's Issue</h2>
   
      <p>This month's issue is going to focus on phishing attacks, new initiatives by defense organisations and much more.</p>
	  
	   <p>Next month's issue is due: June 2018</p>
	   
	   <h2>About This Month's Issue Editor</h2>
	   
	    <img class="profilepic" src="profile.jpeg" alt="Profile Picture">
   
      <p>This month's issue's editor is Nick Potiriadis. He has been a member of our company for 20 years, and is a very competent Web Developer and Data Scientist.</p>
	  
	 
	  
	
	   
	   
      
      
     
    </div>
	
	
  </div>
</div>




</body>
</html>