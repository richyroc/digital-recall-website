#!/usr/dist/bin/php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Digital Recall - Contact Us</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Video, Dublin, DCU, Master, Project, Online video, Digital Recall, Memory, Contact, Contact Us" />
<meta name="description" content="Contact Digital Recall, Meet the Team" />
<meta name="author" content="Melanie Rabier, Richard O'Connell, Laura Ni Dhubhghaill, Austen Donohoe, Cormac O'Brien" />

<link rel="stylesheet" type="text/css" media="screen" href="style/style.css"/> 
<link rel="stylesheet" type="text/css" media="print" href=""/> 
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700,600italic' rel='stylesheet' type='text/css'>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25006203-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>


<body>


<div id="container">


  <div id="page">
 <!-- Top part of the page - Header, NavBar etc. ---------->
	<div id="header">
	<a href="index.html"><img src="image/Logo-bubbles-230px.png" border="0" /> 			 	</a>
    </div>

	<div id="navbar">
	<img id="nav" src="image/navigationbar-opc.png" />

   <div id="movement"> <a href="movement.html"> Memory &amp; Movement </a></div>
  <div id="social"> <a href="social.html"> A Digital New Hope </a> </div>
  <div id="bonuses"> <a href="bonuses.html"> Bonuses </a> </div>
  <div id="ghosts"> <a href="digitalghosts.html"> Digital Ghosts </a> </div>
  <div id="shorts"> <a href="shorts.html"> Shorts </a> </div>
  <div id="blog"> <a href="http://digitalrecallblog.wordpress.com" target="_blank">  The Blog </a> </div>
  <div id="about"> <a href="about.html"> The Project </a> </div>
  <div id="team"> <a href="team.php"> The Team </a> </div>
	</div>
    
    <div id="contactfollow"> <!-- resize images in Photoshop asap - attach the links! - and contact form? --->
     <a href="contact.html"> <img src="image/b_mail_64.png" alt="email" width="30" border="0"/> </a>
    <a href="http://vimeo.com/digitalrecall" target="_blank"> <img src="image/vimeo-30px.png" alt="vimeo" border="0"/> </a>
   <a href="http://twitter.com/digirec" target="_blank"> <img src="image/b_tw_64.png" alt="twitter" width="30" border="0" /> </a>
    <a href="http://www.facebook.com/digitalrecall" target="_blank"> <img src="image/b_fb_64.png" alt="facebook" width="30" border="0" /> </a>
    
    </div>

<div id="wrapper1">

    <!-- Main Content ---------------------->
<div id="contactform">
<h1> Contact Us </h1> 


<?php
if(isset($_POST['email'])) {
     
    $email_to = "digital.recall@yahoo.ie";
    $email_subject = "Contact Form Website";
     
     
    function died($error) {
        //  error code go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = "^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$";
  if(!eregi($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "^[a-z .'-]+$";
  if(!eregi($string_exp,$name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- print Final message after message been send -->

<p>&nbsp;  </p>

<p> 
Your email has been sent. Thank you for contacting us, we will answer shortly! In the meantime enjoy our videos. <br />
<a href="index.html" class="contact"> Back to home page </a>
</p>
 
<?
}
?>



</div>


<div id="findus">
<h1> Find Us </h1>

<img src="image/mail-invert-32.png" alt="email" border="0" />Send us an Email using the form or at: digital.recall@yahoo.ie <br />

    <a href="http://twitter.com/digirec" target="_blank"> <img src="image/twitter-invert-32.png" alt="twitter" border="0" /> </a>
Follow us on <a href="http://twitter.com/digirec" class="contact" target="_blank"> Twitter @digirec </a><br />

 <a href="http://www.facebook.com/pages/Digital-Recall/114688781956521" target="_blank"> <img src="image/facebook-invert-32.png" alt="facebook"  border="0"/> </a> <a href="http://www.facebook.com/digitalrecall" target="_blank" class="contact"> Facebook: Digital Recall Page</a> <br />

<a href="http://vimeo.com/digitalrecall" target="_blank"> <img src="image/vimeo-invert-32.png" alt="vimeo" border="0"/> </a> <a href="http://vimeo.com/digitalrecall" target="_blank" class="contact"> Vimeo: http://vimeo.com/digitalrecall </a> <br/>

</div>



</div>

<!-- bottom part of the page - Footers ------------------->
<div id="footerleft">
Quick Access: <br />
 <a href="movement.html" class="secondary">  Memory &amp; Movement </a>
 &nbsp; &nbsp; &nbsp;
 <a href="about.html" class="secondary"> The Project</a> 
 <br /> 
 <a href="social.html" class="secondary"> A Digital New Hope</a>
 &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
 <a href="http://digitalrecallblog.wordpress.com" class="secondary" target="_blank">The Blog </a> <br /> 
<a href="digitalghosts.html" class="secondary"> Digital Ghosts </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;
<a href="shorts.html" class="secondary"> Shorts </a>  <br />
</div>

<div id="footercenter">
The Random Factory:
<script src="quotes.js" type="text/javascript"></script>
</div>

<div id="footerright">
Contact or find us :   &nbsp;
	 <a href="contact.html"> <img src="image/b_mail_64.png" alt="email" width="30" border="0"/> </a>  &nbsp;
    <a href="http://vimeo.com/digitalrecall" target="_blank"> <img src="image/vimeo-30px.png" alt="vimeo" border="0"/> </a>  &nbsp;
   <a href="http://twitter.com/digirec"> <img src="image/b_tw_64.png" alt="twitter" width="30" border="0" /> </a>  &nbsp;
    <a href="http://www.facebook.com/digitalrecall" target="_blank"> <img src="image/b_fb_64.png" alt="facebook" width="30" border="0" /> </a>
    
</div>

<div id="empty">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>

</div>
</div>


</body>
</html>

