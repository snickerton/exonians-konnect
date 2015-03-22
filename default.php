<?
$host=$_SERVER['HTTP_HOST'];
/*
Directory Listing Script - Version 2
====================================
Script Author: Tony Zhu
*/
?>

<?php
include "PredictionAlgorithm.php";

//$Wpacker = array();
//$Dpacker = array();

$WA = array();
$WW = array();
$WB = array();

$DA = array();
$DW = array();
$DB = array();


$Wpacker = GetWebsterData($WA, $WW, $WB);
$Dpacker = GetDunbarData($DA, $DW, $DB);


$WA = $Wpacker[0];
$WW = $Wpacker[1];
$WB = $Wpacker[2];

$DA = $Dpacker[0];
$DW = $Dpacker[1];
$DB = $Dpacker[2];


$OFA = array("a lonely stay at home wife","an efficient manager","a waiter at Hooters","a McDonalds cashier","a 'person who sells their body'","a content stay at home wife","the only person working in the family","a rejected KPop star","a successful KPop star","a life-saving nurse");
$OFR = array("a lonely stay at home wife","an efficient manager","a waiter at Hooters","a McDonalds cashier","a 'person who sells their body'","a content stay at home wife","the only person working in the family","a rejected American Idol star","a successful American Idol star","a life-saving nurse");
$OM = array("a basketball reject","a basketball star","a McDonalds hambuger flipper","a busboy","the next sexiest man alive","a great stay at home husband who will always be there","a lonely un-employed husband","an efficient manager","a programmer for Microsoft","an owner of a cat store");
$Hobby = array("cook","have 'woo-hoo!'","spend time with the family","play sports","read to the children","read","sit and watch tv all day","play console games","read other job descriptions","buy an excessive amount of items","paaarrrtttyyy!","program computers","steal candy from children and watch them cry");

?>

<html>
<head>

<LINK REL="SHORTCUT ICON" HREF="Exeter_logo.ico">

<body>


<center>


<title> Exonians Konnect </title>



<form method="post" action="">


<div>


<h2>

<img src = "Lion Right.jpg" align="middle">

<font face="Herculanum" size="8">
&nbsp; Exonians Konnect &nbsp;
</font>

<img src = "Lion Left.jpg" align="middle">


<br>
<font face="Apple Chancery" size="2">
<span style="font-weight: normal;">
Bringing entertainment to PEA by guessing your future spouse. By Tony Zhu.
</span>
</font>
</h2>






</div>

<font face="Harrington" size="6">
- - - - - - - - - - - - - - - - - - - - - - - - - - 
</font>

<br>
<br>
Name: <input type="text" name="username">
<br>
<br>
<br>

<font face="Comic Sans MS" size="3">
I am:
</font>

<br>
<br>
<input type="radio" name = "gender" value = "male"> Male &nbsp; &nbsp;

<input type="radio" name = "gender" value = "female"> Female
<br>
<br>

<font face="Comic Sans MS" size="3">
Ethnicity: 
</font>


<br>
<br>
<input type="radio" name = "race" value = "asian">Asian  
<br>
<br>
<input type="radio" name = "race" value = "black">Black   
<br>
<br>
<input type="radio" name = "race" value = "white">White   
<br>
<br>
<br>
<input type="submit" name="Button" value = "Who will I marry?">



</form>

<?php


if(isset($_POST["Button"]))
{


if($_POST["username"] == "Christmas Egg")
{
?>
  <br><br>
  <font face="Apple Chancery" size="4">
  Happy Holidays! <br>
  </font>
  <img src = "Merry Christmas.jpg" align="middle">
  <br><br>
  <img src = "Chestnuts roasting.jpg" align="middle">
  <br><br>
  <img src = "ChristmasNyan.jpg" align="middle">
<?
}


if($_POST["username"] != "")
{
	

if(($_POST["gender"] == "male") && ($_POST["race"] == "asian"))
{
  echo "Your future wife is "; 
  getRN($DA);  
  echo ". She will be "; 
  getRN($OFA);
  echo " and she will like to ";
  getRN($Hobby);
  echo ".";
}


if(($_POST["gender"] == "male") && ($_POST["race"] == "white"))
{
  echo "Your future wife is "; 
  getRN($DW);  
  echo ". She will be "; 
  getRN($OFR);
  echo " and she will like to ";
  getRN($Hobby);
  echo ".";
}


if(($_POST["gender"] == "male") && ($_POST["race"] == "black"))
{
  echo "Your future wife is "; 
  getRN($DB);  
  echo ". She will be "; 
  getRN($OFR);
  echo " and she will like to ";
  getRN($Hobby);
  echo ".";
}


if(($_POST["gender"] == "female") && ($_POST["race"] == "asian"))
{
  echo "Your future husband is "; 
  getRN($WA);  
  echo ". He will be "; 
  getRN($OM);
  echo " and he will like to ";
  getRN($Hobby);
  echo ".";
}


if(($_POST["gender"] == "female") && ($_POST["race"] == "white"))
{
  echo "Your future husband is "; 
  getRN($WW);  
  echo ". He will be "; 
  getRN($OM);
  echo " and he will like to ";
  getRN($Hobby);
  echo ".";
}


if(($_POST["gender"] == "female") && ($_POST["race"] == "black"))
{
  echo "Your future husband is "; 
  getRN($WB);  
  echo ". He will be "; 
  getRN($OM);
  echo " and he will like to ";
  getRN($Hobby);
  echo ".";
}
}
else
{
echo "Fill out the WHOLE form please...";
}


}
?>

</center>


<font face = "Chalkboard" size = 3>
Total page views:
</font>
<br>
<!-- Start of SimpleHitCounter Code -->
<div><a href="http://www.simplehitcounter.com" target="_blank"><img src="http://simplehitcounter.com/hit.php?uid=1411930&f=65280&b=0" border="0" height="18" width="83" alt="web counter"></a><br><a href="http://www.simplehitcounter.com" target="_blank" style="text-decoration:none;"></a></div>
<!-- End of SimpleHitCounter Code -->

</body>
</head>
</html>