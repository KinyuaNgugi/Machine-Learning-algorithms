
<?php
if(isset($_POST['submit'])){
  $outlook=$_POST['outlook'];
  $temp=$_POST['temp'];
  $wind=$_POST['wind'];
  $humid=$_POST['humid'];
}
//outlook
  if(strcmp($outlook, "overcast")==0){
  	$overcastY=4/9;
  	$overcastN=0;
  }
  else{
  	$overcastY=1;
  	$overcastN=1;
  }
  if(strcmp($outlook, "sunny")==0){
  	$sunnyY=2/9;
  	$sunnyN=3/5;
  }
  else{
  	$sunnyY=1;
  	$sunnyN=1;
  }
  if(strcmp($outlook, "rainy")==0){
  	$rainY=3/9;
  	$rainN=2/5;
  }
  else{
  	$rainY=1;
  	$rainN=1;
  }

//temperature
   if(strcmp($temp, "hot")==0){
  	$hotY=2/9;
  	$hotN=2/5;
  }
  else{
  	$hotY=1;
  	$hotN=1;
  }
   if(strcmp($temp, "mild")==0){
  	$mildY=4/9;
  	$mildN=2/5;
  } 
  else{
  	$mildY=1;
  	$mildN=1;
  }
  if(strcmp($temp, "cool")==0){
  	$coolY=3/9;
  	$coolN=1/5;
  }
  else{
  	$coolY=1;
  	$coolN=1;
  }

  //humidity
   if(strcmp($humid, "high")==0){
  	$highY=3/9;
  	$highN=4/5;
  }
  else{
  	$highY=1;
  	$highN=1;
  }
   if(strcmp($humid, "normal")==0){
  	$normalY=6/9;
  	$normalN=1/5;
  }
  else{
  	$normalY=1;
  	$normalN=1;
  }

  //wind
   if(strcmp($wind, "weak")==0){
  	$weakY=6/9;
  	$weakN=2/5;
  } 
  else{
  	$weakY=1;
  	$weakN=1;
  }
  if(strcmp($temp, "strong")==0){
  	$strongY=3/9;
  	$strongN=3/5;
  }
  else{
  	$strongY=1;
  	$strongN=1;
  }
  $playY=9/14;$playN=5/14;
  $yes=$sunnyY*$overcastY*$rainY*$hotY*$mildY*$coolY*$highY*$normalY*$strongY*$weakY*$playY;
  $no=$sunnyN*$overcastN*$rainN*$hotN*$mildN*$coolN*$highN*$normalN*$strongN*$weakN*$playN;

if($yes>$no){
	echo"YES TENNIS CAN BE PLAYED";
}
else{
	echo"TENNIS CANNOT BE PLAYED";
}
?>