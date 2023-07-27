<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LOGIN</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container">
<form method="post">
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label><span>*</span>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
<label for="exampleInputPassword" class="form-label">Password</label><span>*</span>
<input type="password" class="form-control" id="exampleInputPassword" name="password">
<div id="password11" class="form-text">password must contain atleast 6 characters.</div>
</div>
<div class="mb-3 button">
<button type="submit" class="btnbtn-primary" name="Login">Submit</button>
</div>
<br>
NEW USER|CREATE ACCOUNT <a href="signup.php">SIGNUP</a>
</form>
</div>
</body>
</html>

