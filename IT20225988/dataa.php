<?php

if(isset($_POST["submit"]))
{
   $fullname=$_POST['fullname'];
   $address=$_POST['address'];
   $phonenumber=$_POST['phonenumber'];
   $number=$_POST['number'];
   $mode=$_POST['mode'];
   $miniOrder=$_POST['miniOrder'];



	include_once"datadb.php";  
	
	
    $sql="INSERT INTO print(fullname,address,phonenumber,framesize,sevicesmode,miniorderquan) VALUES ('$fullname', '$address', '$phonenumber', '$number', '$mode', '$miniOrder')";

	if(mysqli_query($conn,$sql)) 
	{
		echo "success";


	}
	else{
		echo"fail values";

	}

}

?>