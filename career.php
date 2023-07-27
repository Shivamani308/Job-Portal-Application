<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CAREER</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
      .container{
background-image:url('jobportal.jpeg');
        padding-top:15%;
background-size:cover;
text-align:center;
      }
      .container h1{
        padding-bottom:50px;
      }
      .container p{
       padding-bottom:20px;
       margin-bottom:20px;
       font-size:20px;
      }
.navbar{
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top:0;
        width:100%
      }
</style>
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lgbg-light">
<div class="container-fluid">
<a class="navbar-brand" href="#">NCS JOB PORTAL</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Features</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Pricing</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            REGISTER
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="login.php">LOGIN</a></li>
<li><a class="dropdown-item" href="signup.php">SIGNUP</a></li>
<li><a class="dropdown-item" href="index.php">HOME</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<h1>JOB PORTAL</h1>
<p>Best platform to get placed</p>
</div>
</div>
</div>
<div class="row">
<?php
  $sql="SELECT cname,position,Jdesc,Skills,CTC from pjob";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows>0){
     while($rows=$result->fetch_assoc()){
      echo'
<div class="coll">
<div class="jobs">
<h3 style="text-align:center;">'.$rows['position'].'</h3>
<h4 style="text-align:center;">'.$rows['cname'].'</h4>
<p style="color: black;text-align:justify;">'.$rows['Jdesc'].'</p>
<p style="color: black;"><b>Skills Required:</b>'.$rows['Skills'].'</p>
<p style="color: black;"><b>CTC:<b>'.$rows['CTC'].'</p>
<button class="btnbtn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
</button>
</div>
</div>';
     }
  }

  ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">Apply for jobs</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form>
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Name</label>
<input type="text" class="form-control"  name="name">
</div>
<div class="mb-3">
<label for="message-text" class="col-form-label">Applying For</label>
<input type="text" class="form-control" name="apply">
</div>
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Qualification</label>
<input type="text" class="form-control" name="qual">
</div>
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Year passout</label>
<input type="text" class="form-control" name="year">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btnbtn-secondary" data-bs-dismiss="modal"></button>
<button type="submit" name="apply" class="btnbtn-primary">Send message</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>