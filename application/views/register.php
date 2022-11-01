<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?> assets/css/bootstrap.min.css">
     <!-- font awesome CDN Url -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
</link>
</head>

    <style>
        body {
            margin: 0;
            width: 100%;
            background: linear-gradient(300deg, rgba(49,140,231,1) 10%, rgba(147,36,166,1) 100%);
        }

        .register
        {
            max-width: 60%;
            background: #fff;
            position: relative;
            margin: 15px auto;
            /* padding: 5px 35px 5px 35px; */
            -webkit-box-shadow: 0px 50px 100px 0px rgba(64, 1, 4, 0.1), 0px -6px 0px 0px rgba(248, 99, 107, 0.004);
            box-shadow: 0px 50px 100px 0px rgba(64, 1, 4, 0.1), 0px -6px 0px 0px rgba(248, 99, 107, 0.004);
            border-radius: 15px;
        }
    </style>

  <body>    
    <div class="container register">
        <div class="text-center pt-4">
            <h6 class="h3 text-red-900 "><i class="fa fa-chalkboard-teacher"></i> Registration</h6>
            <h6 class="h6 text-blue-900 mb-2">Admin Please fill the form below</h6>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5" >
                <!-- result to register the user   -->
                <?php   if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
                <?php }?>

                <!-- check validation form -->
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                
                <form class="login-container validate-form" action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="" class="label-default"><i class="fa fa-hand-point-right"></i> Name</label>
                        <input type="text" name="name" class="form-control border-primary" placeholder="Enter client name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="label-default"><i class="fa fa-envelope" ></i> Email</label>
                        <input type="email" name="email" class="form-control border-primary" placeholder="user@gmail.com">
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="label-default"><i class="fa fa-eye-slash"></i> Password</label>
                        <input type="password" name="password" class="form-control border-primary"  placeholder="Default password: 12345">
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="label-default"><i class="fa fa-restroom"></i> Gender</label>
                        <select name="gender" id="gender" class="form-control border-primary">
                            <option value="">Select user Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="label-default"> <i class="fa fa-mobile-alt"></i> Phone Number</label>
                        <input type="text" name="phone" class="form-control border-primary" placeholder="01212345678">
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary btn-user btn-block mt-2 mb-3" name="register"> 
                        <i class="fa fa-user-plus"></i> Register    
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

        <!-- Footer -->
        <footer class="sticky-footer">
                    <div class="container my-auto">
		  		<div class="copyright text-center text-light my-auto">
					<span>Copyright &copy; Train The Marketer (TTM) by Pande Media</span>
		  		</div>
			</div>
	  	</footer>
		<!-- End of Footer -->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  
</html>