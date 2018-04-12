<?php
include("server.php"); 
include("errors.php"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration system</title>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="framework/css/bootstrap.min.css" />
        
        <style>
            h2 {
                margin-top: 32px;
                margin-bottom: 32px;
                text-align: center;
            }
            
            .container {
                border-style: solid;
                
            }
            
            .bottom-pad-32 {
                margin-bottom: 32px;
            }
            
            
            /** Horizontal + Vertical center container **/
            html, body {
                height:100%; /* important to vertically align the container */
                margin:0;
                padding:0;
            }
            
            .vertical-center {
              min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
              min-height: 100vh; /* These two lines are counted as one 🙂       */
              display: flex;
              align-items: center;
            }
            
            /** Horizontal center button **/
            .btn-center {
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    
    <body>
        
        <div class="vertical-center">
            <div class="container col-md-6 col-md-offset-3">
            
            

                <h2>Login</h2>
                <?php showErrors(); ?>
                <form action="login.php" method="post">
                <div class="form-group row">
                    <!-- error message -->
                  
                    
                  <!-- 1. username -->
                        
                  <label for="cusername" class="col-sm-2 col-md-4 col-form-label">Username</label>
                  <div class="col-sm-10 col-md-8">
                  <input class="form-control" type="text" placeholder="Artisanal kale" id="cusername" name="username">
                    </div>
    
                </div>
                    
                    <!-- 2. password_1 -->
                <div class="form-group row">
                  <label for="cpassword1" class="col-sm-2  col-md-4 col-form-label">Password</label>
                  <div class="col-sm-10 col-md-8">
                    <input class="form-control" type="password" id="cpassword1" name="password">
                  </div>
                </div>
                
            
                
                    <!-- 3. Register button -->
                <div class="form-group row btn-center">
                    <input type="submit" value="login" name="login" class="btn-success btn-lg"/>
                </div>
            </form>
                
                </div>
            </div>
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="framework/jquery/jquery.min.js"></script>
        <script src="framework/js/bootstrap.min.js"></script>
    
    </body>
</html>