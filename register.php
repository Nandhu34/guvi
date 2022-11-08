<?php 
$first=$_POST['$name'];
$las=$_POST['$last'];
$mail=$_POST['$gmail'];
$pas=$_POST['$pass'];
$conpas==$_POST['$confpass'];
$conn=mysql_connect("localhost","root","","guvi");

$db=mysql_select_db("guvi",$conn);
$inser=mysql_query("insert into register(f_name,l_name,gmail,password)values('$firsr','$las','$mail','$pas','$conpas')");
if($inser)
{
    echo " form submitted succesfully ";
    include 'login.html';
}
else{
    echo "error has occured ";
}
mysql_close($conn);




?>
