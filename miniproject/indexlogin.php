<!DOCTYPE html>
<html lang="en">
<head>
<title>Website-Login</title>
<link rel="stylesheet" href="login.css">

</head>
<body>
    
    <div class="wrapper">
            <section class="form-sign">
                <header>
                    <img src="logo.png" alt="" srcset="" style="width:55px;height:55px;">
                </header>
                <form action="login-action.php" method="post">
                
                    <div class="fields">
                                <label>E-Mail</label>
                                <input type="email" name="email" placeholder="E-Mail" required>
                                    
                            </div>
                                
                                
                            <div class="fields">
                                    
                                <label>Password</label>
                                <input type="password" required name="passwd" placeholder="Password" required>
                                    
                            </div>
                            
                            <div class="links">
                                <a href="indexreg.php">Forgot Password?</a>
                            </div>
                            
                                
                            <div class="fields-button">
                                <input type="submit" value="Sign In" id="1" >
                            </div>
                                
    
                            <div class="links">
                                <label>New To The Website?</label>
                                <a href="indexreg.php">Register Here</a>
                            </div>
                                
                        
                </form>
            </section>
        </div>
</body>
</html>