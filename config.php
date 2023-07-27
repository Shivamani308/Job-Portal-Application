<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>SIGNUP</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<h3>Registration</h3>
<div class="container">
<form method="post">
<div class="mb-3">
<label for="exampleInputname" class="form-label">Username</label><span>*</span>
<input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="name">
<div id="emailHelp" class="form-text"></div>
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label><span>*</span>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="email" required>
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
<label for="exampleInputnumber" class="form-label">Number</label><span>*</span>
<input type="number" class="form-control" id="exampleInputnumber" aria-describedby="emailHelp" name="ph_no">
</div>
<div class="mb-3">
<label for="exampleInputPassword" class="form-label">password</label><span>*</span>
<input type="password" class="form-control" id="exampleInputPassword" name="password" required>
</div><div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Confirm Password</label><span>*</span>
<input type="password" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3 form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Accept all the terms and conditions</label>
</div>
<div class="mb-3 button">
<input type="submit" class="btnbtn-primary" name="register">
</div>
<br>
            Already Registered? <a href="login.php">LOGIN</a>
</form>
</div></body>
</html>