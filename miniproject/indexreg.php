<!DOCTYPE html>
<html lang="en">
<head>
<title>Website-Register</title>
<link rel="stylesheet" href="register.css" type="text/css">

</head>
<body>
    

        <div class="wrapper">
            
            
    
            <section class="form-sign">
                    
            
                <header>
                
                <img src="logo.png" alt="" srcset="" style="width:55px;height:55px;">   
                </header>
                
                <form action="register.php" method="post">
                   
                    <div class="name-details">
                        <div class="fields">
                            <label>First Name</label>
                            <input type="text" name="firstname" id=firstname placeholder="First Name" required>
                                    
                        </div>
                        <div class="fields">
                                    
                            <label>Last Name</label>
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
                                   
                        </div>
                    </div>         
                    <div class="fields">
                        <label>E-Mail</label>
                        <input type="email" name="mail" id="mail"  placeholder="E-Mail" required>
                                    
                    </div>
                                
                             
                    <div class="fields">
                        <label>Phone Number</label>
                        <input type="number" name="phone" id="phone"  placeholder="Phone Number" required>
                                    
                    </div>

                    <div class="fields">
                                    
                        <label>Password</label>
                        <input type="password" required name="passwd" id="passwd" placeholder="Password" required>
                                    
                    </div>
        
                                
                    <div class="fields-button">
                        <input type="submit" value="Sign Up" id="1" >
                    </div>
                                
    
                    <div class="link">
                        <label>Already a User?</label>
                        <a href="indexlogin.php">Login</a>
                    </div>
                               
                
                </form> 
            </section>
        </div>
</body>
</html>