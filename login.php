<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>        
    <!-- META SECTION -->
    <title>AMBAR - Project</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->        
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->                                    
</head>
<body>

    <div class="login-container">
      <?php 
      if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
            echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
        }
    }
    ?>
    <div class="login-box animated fadeInDown">
        <div class="login" align="center">
            <h1><span class="logo-mini"><img src="img/truck.png" class="img-square" width="35px"  alt="User Image"></span>
                <a href="index.php"><b>AMBAR</b>Project</a></h1>
            </div>
            <div class="login-body">
                <div class="login-title"><strong>Welcome</strong>, Please login</div>
                <form name="login" action="proseslogin.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" name="username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12" >
                            <input type="password" class="form-control" placeholder="Password" name="password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    <div class="login-subtitle">
                        Don't have an account yet? <a href="#">Create an account</a>
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="pull-left">
                    &copy; 2017 TIM IT
                </div>
                <div class="pull-right">
                    <a href="#">About</a> |
                    <a href="#">Privacy</a> |
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>

    </div>

</body>
</html>






