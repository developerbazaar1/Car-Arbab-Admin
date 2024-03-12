
<!DOCTYPE html>
<html lang="en">
<head>

     <!-- Css Include -->
      <?php include 'include/css.php' ;?>
     <!-- /Css Include -->
    
   
</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="sign-in.php"></a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="sign-up.php">Sign Up</a></p>

            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com">

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
            </div>

            <div class="auth-submit">
                <a href="dashboard.php" class="btn btn-primary">Sign In</a>
                <a href="#" class="auth-forgot-password float-end">Forgot password?</a>
            </div>
            <div class="divider"></div>
            
        </div>
    </div>
    
     <!-- Js Include -->
      <?php include 'include/js.php' ;?>
     <!-- /Js Include -->
     
</body>
</html>