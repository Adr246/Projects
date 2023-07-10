<!DOCTYPE html>
<html lang="en">
<head>
<title>Website-Login</title>
<link rel="stylesheet" href="register.css">

</head>
<body>
    
    
    
            

        <div class="wrapper">
            <section class="form-sign">
                <header>Book Management</header>
                <form action="stall.php" method="post">

                    

                        
                        <div class="name-details">
                            <div class="fields">
                                <label>Bookname</label>
                                <input type="text" name="bname" id=bookname placeholder="Enter Bookname" required>
                                    
                            </div>
                            <div class="fields">
                                    
                                <label>author</label>
                                <input type="text" name="auth" id="author" placeholder="Enter Author Name" required>
                                   
                            </div>
                        </div>     
                            <div class="fields">
                                <label>bookprice</label>
                                <input type="number" name="price" id="price"  placeholder="Enter the price" required>
                                    
                            </div>
                                
                             
                            <div class="fields">
                                <label>Quantity></label>
                                <input type="number" name="quant" id="quant"  placeholder="Enter Quantity" required>
                                    
                            </div>

                            <div class="fields">
                                    
                                <label>Purchase Date</label>
                                <input type="date" name="date" id="date" placeholder="Purchase Date" required>
                                    
                            </div>
        
                                
                            <div class="fields-button">
                                <input type="submit" value="Continue" id="1" >
                            </div>
                                
    
                           
                                
                        
                </form>
            </section>
        </div>
</body>
</html>