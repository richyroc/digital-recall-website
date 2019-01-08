#!/usr/dist/bin/php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Digital Recall - About Us </title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Video, Dublin, DCU, Master, Project, Online video, Digital Recall, Memory, About Us, Meet the team" />
<meta name="description" content="About Us, Digital Recall, Meet the Team" />
<meta name="author" content="Melanie Rabier, Richard O'Connell, Laura Ni Dhubhghaill, Austen Donohoe, Cormac O'Brien" />

<link rel="stylesheet" type="text/css" media="screen" href="style/style.css"/> 
<link rel="stylesheet" type="text/css" media="print" href=""/> 
<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:700|Josefin+Sans:400,300&subset=latin&v2' rel='stylesheet' type='text/css'>

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
   <a href="http://twitter.com/digirec"> <img src="image/b_tw_64.png" alt="twitter" width="30" border="0" /> </a>
    <a href="http://www.facebook.com/digitalrecall" target="_blank"> <img src="image/b_fb_64.png" alt="facebook" width="30" border="0" /> </a>
    
    </div>



<div id="wrapper1">


<div id="teamcontent"> 
You want to learn more about who is behind these videos?  <br />
< -- Take a look at our profiles
</div>

<?php

echo "<div id='teamnavbar' class='check'>";
echo "<h1>Who are we? </h1>";

if( ! ($fp = fopen( "bios.xml" , "r" )) )//links xml file
  die("Couldn't open xml file!");//gives error message just in case
$bio_counter = 0;
$bio_data = array();//makes content from our xml file active and available
$xml_current_tag_state = '';
function startElementHandler( $parser, $element_name, $element_attribs )
{
  global $bio_counter;
  global $bio_data;
  global $xml_current_tag_state;
  if( $element_name == "BIO" )
  {
    $bio_data[$bio_counter]["name"] = $element_attribs["NAME"];
  }
  else
  {
    $xml_current_tag_state = $element_name;
  }
}
function endElementHandler( $parser, $element_name )
{
  global $bio_counter;
  global $bio_data;
  global $xml_current_tag_state;
  $xml_current_tag_state = '';
  if( $element_name == "BIO" )
  {
    $bio_counter++;
  }
}
function characterDataHandler( $parser , $data )
{
  global $bio_counter;
  global $bio_data;
  global $xml_current_tag_state;
  if( $xml_current_tag_state == '' )
    return;
if( $xml_current_tag_state == "NAME" ) {//lets parser know which files to load in this case the name extension
    $bio_data[$bio_counter]["name"] = $data;
  }	
	
  if( $xml_current_tag_state == "INFO" ) {
    $bio_data[$bio_counter]["info"] = $data;
  }
  if( $xml_current_tag_state == "LOWDOWN" ) {
    $bio_data[$bio_counter]["lowdown"] = $data;
  }
  if( $xml_current_tag_state == "NEWS" ) {
    $bio_data[$bio_counter]["news"] = $data;
  }
  if( $xml_current_tag_state == "IMAGE" ) { 
$bio_data[$bio_counter]["image"] = $data; 
} 

}
if( !($xml_parser = xml_parser_create()) )
  die("Couldn't create XML parser!");//error message if needed

xml_set_element_handler($xml_parser, "startElementHandler", "endElementHandler");
xml_set_character_data_handler($xml_parser, "characterDataHandler");
while( $data = fread($fp, 4092) )
{
  if( !xml_parse($xml_parser, $data, feof($fp)) )
  {
    break; // get out of while loop if we're done with the file
  }
}


xml_parser_free($xml_parser);

$currentTitle = $bio_data[$i]["name"];

$lenghtOfArray = count($bio_data);

for( $i=0 ; $i < $lenghtOfArray ; ++$i )
{
$currentName = $bio_data[$i]["name"];


echo "<a href='team.php?chosenbio=";//prints out user selected bio
echo $currentName;
echo "'>"; //closes opened php tag
echo $currentName;
echo "</a><br>";
$whichbio = $_GET["whichbio"];
echo $whichbio; 


$chosenbio = $_GET["chosenbio"]; 
echo $whichbio;


}


$thisPos = 0;
$lengthOfArray = count($bio_data);

for( $i=0 ; $i < $lengthOfArray ; ++$i )
{
$thisName = $bio_data[$i]["name"];

if ($thisName == $chosenbio) {//matches request bio to exact poisiton in xml file

$thisPos = $i;



}//end of IF

}//end of FOR LOOP

echo "</div>";

echo "<div id='teamimg'>";

echo "<img src=images/stills/";
echo $bio_data[$thisPos]["image"]; 
echo ".jpg class=imgleft>";
//prints out image based on xml file

if ( $chosenbio == " " ) {
	echo "<br />";
}//for team photo landing image


//differant questions for each individual team member
//Laura
else if ( $chosenbio == "Laura Ni Dhubhghaill" ) {
echo "<em><strong>Who are you? </em></strong>";//written question
echo $bio_data[$thisPos]["name"]; //prints out based on written content in xml file 

echo"<br/><br/>";

echo "<em><strong>What are your interests?</em> </strong>";
echo $bio_data[$thisPos]["news"];
echo "<br/><br/>";

echo "<em><strong>What video experience do you have? </strong></em>";
echo $bio_data[$thisPos]["lowdown"]; 

echo"<br/><br/>";

echo "<em><strong> What's your most important memory? 
 </strong></em>";
echo $bio_data[$thisPos]["info"]; 
}

//Melanie
else if ( $chosenbio == "Melanie Rabier" ) {
echo "<em><strong>So tell us who you are?  </em></strong>";//written question
echo $bio_data[$thisPos]["name"]; //prints out based on written content in xml file 

echo"<br/><br/>";

echo "<em><strong>No but seriously, tell us a bit more? </em> </strong>";
echo $bio_data[$thisPos]["news"];
echo "<br/><br/>";

echo "<em><strong>So is this what made you came to Ireland?  </strong></em>";
echo $bio_data[$thisPos]["lowdown"]; 

echo"<br/><br/>";

echo "<em><strong>Ok so after all that, what are your plans now?  </strong></em>";
echo $bio_data[$thisPos]["info"]; 
}


//Austen
else if ( $chosenbio == "Austen Donohoe" ) {
echo "<em><strong>Who are you? </em></strong>";//written question
echo $bio_data[$thisPos]["name"]; //prints out based on written content in xml file 

echo"<br/><br/>";

echo "<em><strong>What are your interests?</em> </strong>";
echo $bio_data[$thisPos]["news"];
echo "<br/><br/>";

echo "<em><strong>What is your earliest Tech-Related Memory? </strong></em>";
echo $bio_data[$thisPos]["lowdown"]; 

echo"<br/><br/>";

echo "<em><strong>Inspirations: </strong></em>";
echo $bio_data[$thisPos]["info"];

echo"<br/><br/>";

 
}

//Cormac
else if ( $chosenbio == "Cormac O Brien" ) {
echo "<em><strong>Who are you? </em></strong>";//written question
echo $bio_data[$thisPos]["name"]; //prints out based on written content in xml file 

echo"<br/><br/>";

echo "<em><strong>Where can you be found? What are you? </em> </strong>";
echo $bio_data[$thisPos]["news"];
echo "<br/><br/>";

echo "<em><strong>Where are you, right now? </strong></em>";
echo $bio_data[$thisPos]["lowdown"]; 

echo"<br/><br/>";

echo "<em><strong> Are you really? </strong></em>";
echo $bio_data[$thisPos]["info"]; 
}


//Richard
else if ( $chosenbio == "Richard O Connell" ) {
echo "<em><strong>Who are you? </em></strong>";//written question
echo $bio_data[$thisPos]["name"]; //prints out based on written content in xml file 

echo"<br/><br/>";

echo "<em><strong>What are your interests? </em> </strong>";
echo $bio_data[$thisPos]["news"];
echo "<br/><br/>";

echo "<em><strong>What is your ambition? </strong></em>";
echo $bio_data[$thisPos]["lowdown"]; 

echo"<br/><br/>";

echo "<em><strong> Has digital technology effected your memories of different events: </strong></em>";
echo $bio_data[$thisPos]["info"]; 
}


echo "</div>";

echo "</div>";

?>




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
   <a href="http://twitter.com/digirec" target="_blank"> <img src="image/b_tw_64.png" alt="twitter" width="30" border="0" /> </a>  &nbsp;
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
