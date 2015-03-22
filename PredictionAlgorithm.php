<?php
    
    $name;
    $occupation;
    $i;
    $AP;

$Webster = array();
$Dunbar = array();

$WA = array();
$WW = array();
$WB = array();

$DA = array();
$DW = array();
$DB = array();



function GetWebsterData($WA, $WW, $WB)
{

global $Webster;

$WebsterFile = fopen("WebsterNames.txt", "r") or exit("<br><br><br><b><font face = Lucida Console size = 5 color=#00CC00>Sorry, but the program cannot find names right now. The producer is probably working very hard right now (not watching Doctor Who or something) so please be patient. </b></font>");;


//put each file line into an array element 
while(!feof($WebsterFile))
{
 array_push($Webster, fgets($WebsterFile));
} 

//use of files done so no need to keep them open
fclose($WebsterFile);

//dissect Webster array into races
for($i = 0; $i < count($Webster); $i++)
{
 $AP = next($Webster);
 
if(strpos($AP, "(asian)"))
 {
  array_push($WA, substr($AP, 0, -9)); //substr takes out the (asian)
 }

 if(strpos($AP, "(white)"))
 {
  array_push($WW, substr($AP, 0, -9)); //substr takes out the (white)
 }

 if(strpos($AP, "(black)"))
 {
  array_push($WB, substr($AP, 0, -9)); //substr takes out the (black)
 }


}

$Wpacker = array($WA, $WW, $WB);
return $Wpacker;

}//end of function




function GetDunbarData($DA, $DW, $DB)
{

global $Dunbar;

$DunbarFile = fopen("DunbarNames.txt", "r") or exit("<br><br><br><b><font face = Lucida Console size = 5 color=#00CC00>Sorry, but the program cannot find names right now. The producer is probably working very hard right now (not watching Doctor Who or something) so please be patient. </b></font>");;


//put each file line into an array element 
while(!feof($DunbarFile))
{
 array_push($Dunbar, fgets($DunbarFile));
} 

//use of files done so no need to keep them open
fclose($DunbarFile);

//dissect Webster array into races
for($i = 0; $i < count($Dunbar); $i++)
{
 $AP = next($Dunbar);
 
if(strpos($AP, "(asian)"))
 {
  array_push($DA, substr($AP, 0, -9)); //substr takes out the (asian)
 }

 if(strpos($AP, "(white)"))
 {
  array_push($DW, substr($AP, 0, -9)); //substr takes out the (white)
 }

 if(strpos($AP, "(black)"))
 {
  array_push($DB, substr($AP, 0, -9)); //substr takes out the (black)
 }


}


$Dpacker = array($DA, $DW, $DB);
return $Dpacker;

}//end of function


//getting a random name from a certain array
function getRN($inputarray)
{
 echo $inputarray[rand(0, count($inputarray) - 1)];
}



/*
function getHobby()
{
 $Hobby = array("cook","have 'woo-hoo!'","spend time with the family","play sports","read to the children","read","sit and watch tv all day","play console games","read other job descriptions","buy over-priced items","paaarrrtttyyy!","program computers","steal candy from children and watch them cry");

return $Hobby[rand(0, count($Hobby) - 1)];	
}

function getOFA()
{
 $OccupationFA = array("a lonely stay at home wife","an efficient manager","a waiter at Hooters","a McDonalds cashier","a 'person who sells their body'","a content stay at home wife","the only person working in the family","a rejected KPop star","a successful KPop star");
 return $OccupationFA[rand(0, count($OccupationFA) - 1)];
}


function getOFR()
{  
 $OccupationFR = array("a lonely stay at home wife","an efficient manager","a waiter at Hooters","a McDonalds cashier","a 'person who sells their body'","a content stay at home wife","the only person working in the family","a rejected American Idol star","a successful American Idol star");
 return $OccupationFR[rand(0, count($OccupationFR) - 1)];
}


function getOM()
{
 $OccupationM = array("a basketball reject","a basketball star","a McDonalds hambuger flipper","a busboy","the next sexiest man alive","a great stay at home husband who will always be there","a lonely un-employed husband","an efficient manager","a programmer for Microsoft","an owner of a cat store");
 return $OccupationM[rand(0, count($OccupationM) - 1)];
}*/



?>
