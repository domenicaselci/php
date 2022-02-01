<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="logo"> <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt=""> </div>
    <div class="text-center mt-4 name"> Twitter </div>
    <form action="register.php" method="post" class="p-3 mt-3">
    <?php include('errors.php'); ?>
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="username" id="userName" value="<?php echo $username; ?>" placeholder="Username" > </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password_1" id="pwd"  placeholder="Password"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password_2" id="pwd"  placeholder="Confirm Password"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="text" name="email" id="email" value="<?php echo $email; ?>" placeholder="Email"> </div> 
        <button class="btn mt-3" type="submit" name="register">Register</button>
    </form>
    <div class="text-center fs-6"><p>Already a member? <a href="login.php">Sign in</a></p></div>
    <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="#">Sign up</a> </div>
</div>
</body>
</html>