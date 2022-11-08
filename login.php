<?php /*
$pas=$_POST['$gmail'];
$conpas==$_POST['$pass'];
$conn=mysql_connect("localhost","root","","guvi");

$db=mysql_select_db("guvi",$conn);
$inser=mysql_query("insert into login(mail,password)values('$gmail','$pass')");
if($inser)
{
  $log="select * from register where mail='$gmail' and password='$pass'";
  $res=mysqli_query($conn,$log);
  $row=mysqli_fetch_array($res);
  if(($row[]))


}
mysql_close($conn);






?>

*/



session_start();
$emailid = $_POST['gmail'];
$password = $_POST['pass'];
$con = mysqli_connect("localhost","root","","guvi")
mysqli_select_db($con,"guvi");
$qry = "select email,password from register where gmail = '$emailid'";
$res = mysqli_query($con,$qry);
$resval=mysqli_fetch_array($res);
if(($resval['email']==$emailid) && ($resval['pwd']==$password)){
 if(isset($_POST['rememberme'])){
  setcookie('emailcookie',$emailid,time()+86400);
  setcookie('passwordcookie',$password,time()+86400);
  $_SESSION['username']=$resval['fname'];
  $_SESSION['emailid']=$emailid;
  echo"<script>alert('welcome!!!')</script>";
  header("Location:home.php");
 }
 else{
  $_SESSION['username']=$resval['fname'];
  $_SESSION['emailid']=$emailid;
  echo"<script>alert('welcome!!!')</script>";
  header("Location:home.php");
 }
}
else{
 include("login.php");
 echo "<script>alert('Enter the correct Email id/Password')</script>";
}
?>