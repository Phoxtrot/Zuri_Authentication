<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>">
    <script src="https://kit.fontawesome.com/96606bc35b.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Create Account</h2>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post" class="form" id="form">
            <!--Username-->
            <div class="form-control ">
                <label for="username">Username</label>
                <input type="text" placeholder="my_username" id="username" name="username">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <?php if (!empty($errorname)) { ?>
                    <span>                    
                        <?php echo $errorname; ?>
                    </span>
                <?php } ?>                                  
            </div>
            <!--Email-->
            <div class="form-control ">
                <label for="email">Email</label>
                <input type="email" placeholder="my_email" id="email" name="email">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <?php if (!empty($erroremail)) { ?>
                    <span>                    
                        <?php echo $erroremail;?>
                </span>               
                <?php }?>
            </div>
             <!--Password-->
             <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password" >
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <?php if (!empty($errorpassword)) { ?>
                    <span>                    
                        <?php echo $errorpassword;?>
                </span>               
                <?php }?>
            </div>
            <!--Password check-->
            <div class="form-control">
                <label for="password-check">Confirm Password</label>
                <input type="password" placeholder="Confirm password" id="check_password" name="check_password">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <?php if (!empty($errorcheckpassword)) { ?>
                    <span>                    
                        <?php echo $errorcheckpassword;?>
                </span>               
                <?php }?>
            </div>
            <!--Submit-->
            <button>Submit</button>
            <p>Have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
    
</body>
</html>