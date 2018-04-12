
<?php 
include("server.php"); 
include("errors.php"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>

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

                <h2>Home Page</h2>

                <div class="content">
                    <?php if(isset($_SESSION['success'])){

                        echo ($_SESSION['success']);

                        unset($_SESSION['success']);
                    }

                        if(isset($_SESSION['username'])){

                            echo ($_SESSION['username']);


                            echo "<p><a href='index.php?logout='1''</a>logout</p>";
                        }

                        

                    ?>
                </div>
            </div>
        </div>








        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="framework/jquery/jquery.min.js"></script>
        <script src="framework/js/bootstrap.min.js"></script>

    </body>
</html>