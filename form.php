<?php
$stuname=$_POST{'stuname'};
$faname=$_POST{'faname'};
$dob=$_POST{'dob'};
$gender=$_POST{'gender'};
$class=$_POST{'class'};
$number=$_POST{'number'};
$dbconnect=mysqli_connect('localhost','root','','project');
if(mysqli_connect_errno($dbconnect)){
    echo"failed to connect";
}
else{
    echo"connection succesfull";
}
?>