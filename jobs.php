<?php include 'header.php'?>
<div class='content'>
<table class="table">
<thead>
<tr>
<th scope="col">sl.no</th>
<th scope="col">Candidate Name</th>
<th scope="col">position</th>
<th scope="col">Resume</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>karnika</td>
<td>software developer</td>
<td><a href=""><i class="fa-solid fa-download"></i></a></td>
</tr><tr></tr><tr>
</tr>
</tbody>
</table>
</div>
</body>
</html>
<?php
$server='localhost';
$username='root';
$password='';
$database='portal';
$conn= mysqli_connect($server,$username,$password,$database);
 if($conn->connect_error){
die("connection failed:".$conn->connect_error);
 }

if(isset($_POST['register'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $number=$_POST['ph_no'];
   $password=$_POST['password'];
   $sql = "INSERT INTO `user`(`Name`, `email`, `number`,`password`) VALUES ('$name','$email','$number','$password')";

if(mysqli_query($conn, $sql)){
     echo "<script>alert('Records inserted successfully')</script>";
}else{
echo"ERROR:could not able to execute $sql." .mysqli_error($conn);
   }
}
session_start();
if(isset($_POST['Login'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $query="SELECT * FROM user WHERE `email`='$email' AND `password`='$password'LIMIT 1";
   $result=mysqli_query($conn,$query);

   if($row=mysqli_num_rows($result)){
      header("location:index.php");
}else{
      $error='email id or password is incorrect';
   }  
}
if(isset($_POST['submit'])){
   $cname=$_POST['cname'];
   $Jdesc=$_POST['Jdesc'];
   $pos=$_POST['pos'];
   $skills=$_POST['skills'];
   $ctc=$_POST['ctc'];
   $sql="INSERT INTO `pjob`(`cname`, `position`, `Jdesc`, `Skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$ctc')";
if(mysqli_query($conn, $sql)){
      echo "<script>alert('New job posted')</script>";
}else{
echo"ERROR:failed to post the job $sql." .mysqli_error($conn);
    }
}

mysqli_close($conn);
 ?>










