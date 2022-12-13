<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Help | WASAP MY</title>

    <!-- IMPORT FONT STYLE -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Inter:wght@300&display=swap"> </link>
    <!-- FONT AWESOME CDN Url -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"> </link>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <!-- BOOTSTRAP VERSION 5.0.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?> assets/css/bootstrap.min.css">

    <!-- SWEETALERT CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- bootstrap  -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

</head>
    <style>
        body {
            margin: 0;
            width: 100%;
            /* background: linear-gradient(300deg, rgba(49,140,231,1) 10%, rgba(147,36,166,1) 100%);  */
            background: rgb(3,192,60);
            background: linear-gradient(82deg, rgba(3,192,60,1) 0%, rgba(40,199,111,1) 100%);
            /* assets/image/bg-wasapmy.png */

            background-image: url('assets/image/bg-wasapmy2.png');
            background-repeat: repeat;
            background-position: left;
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;

            background-color: #F5F5F7;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(79, 79, 79);
            -webkit-animation: name 35s infinite;
        }
        
        @-webkit-keyframes name {
            0% {
                background-color: #F5F5F7;
            }
            10% {
                background-color: #6A3987;
            }
            30% {
                background-color: #FF2851;
            }
            50% {
                background-color: #3AC551;
            }
            70% {
                background-color: #0B5ED7;
            }
            100% {
                background-color: #F5F5F7;
            }
        }   

        /* .register
        {
            max-width: 85%;            
            background: #fff;
            position: relative;
            font-family: 'Inter', sans-serif;
            padding: 10px;
            margin: 5% auto;
            -webkit-box-shadow: 0px 50px 100px 0px rgba(64, 1, 4, 0.5), 0px -6px 0px 0px rgba(248, 99, 107, 0.04);
            box-shadow: 0px 25px 50px 0px rgba(64, 1, 4, 0.5), 0px -6px 0px 0px rgba(248, 99, 107, 0.004);
            border-radius: 20px;
        } */

        .box-container{
            float:center;
            background: #fff;
            text-align: left;
            font-family: 'Inter', sans-serif;
            border-radius: 20px;
            box-shadow: 0 4px 5px -1px rgba(0, 0, 0, 0.4), 0 2px 3px -1px rgba(0, 0, 0, 0.4);
            width: 60%;
            margin: 5% auto;
            padding: 10px;
        }

        .box-text{
            background: #eee;
            border: 1px solid #ccc;
            font-size: 14px;
            text-align: left;
            padding: 10px 10px;
            border-radius: 12px;
        }

        span {cursor:pointer; }

		.number{
			margin:100px;
		}

		.minus, .plus{
			width:20px;
			height:20px;
			background:#f2f2f2;
			border-radius:4px;
			padding:8px 5px 8px 5px;
			border:1px solid #ddd;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
		}

		input{
			height:34px;
            width: 100px;
            text-align: center;
            font-size: 26px;
			border:1px solid #ddd;
			border-radius:4px;
            display: inline-block;
            vertical-align: middle;
        }
    </style>

  <body>    
    <div class="container-sm box-container">
        <div class="text-center pt-4">
            <h6 class="h3 text-red-900 "><img src="<?php echo "iman catering";?>" alt="iman catering" width="20%"></h6>
            <h6 class="h6 text-black-900 mb-2">Please fill this form</h6>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10" >
                <!-- MESSAGE for filling the form   -->
                <?php   if (isset($_SESSION['success'])) { 
                    echo '<script type="text/javascript">sweetAlert("Success !","Order anda Berjaya","success")</script>';
                    // echo '<script>location.replace("https://wasap.my/601156759880/nakorder")</script>';
                    //  foreach ($_POST as $selected => $value) {
                        // echo "$selected = $value";
                        // echo "$value";     
                    // echo '<script>window.location.replace("https://wasap.my/601156759880/Assalamualaikum\r\n'.$value.'")</script>';
                    // }
                    // $name=$_POST['name'];
                    // $phone=$_POST['phone']; 
                    
                    if((isset($_POST['name'])) && (isset($_POST['phone'])) && (isset($_POST['user_type'])) && (isset($_POST['prob_type'])) && (isset($_POST['message'])))  {

                        $text_msg = "Asslamulaikum Customer Services WASAP.MY" .'%0D%0A %0D%0A'."Name: ".$_POST['name'] .'%0D%0A'. "Phone: ".$_POST['phone'] .'%0D%0A'. "Type of user: ".$_POST['user_type'].'%0D%0A'. "Problem: ".$_POST['prob_type'] .'%0D%0A'. "Message: " .$_POST['message']. '%0D%0A'. "Thank You";
                        }
                    // $text_msg= $name.$phone.$message;
                    echo '<script>window.location.replace("https://api.whatsapp.com/send?phone=601156759880&text='.$text_msg.'")</script>';
                }
                ?>
                <!-- %0D%0A -->

                <!-- check validation form -->
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                
                <form class="login-container validate-form" action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="" class="label-default"><i class="fa fa-hand-point-right"></i>Name</label>
                        <input type="text" name="name" class="form-control box-text" placeholder="Enter your name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="label-default"> <i class="fa fa-mobile-alt"></i>Phone Number</label>
                        <input type="text" name="phone" class="form-control box-text" placeholder="0123456789">
                    </div>

                    <div class="form-group">
                        <label for="" class="label-default"> <i class="fa fa-mobile-alt"></i>Single Pack</label>
                        <div class="">
                            <span class="minus">-</span>
                            <input type="text" name="single_pack" value="1"/>
                            <span class="plus">+</span>
                            <button type="button" class="btn-sm btn-outline-primary minus">-</button>
                            <button type="button" class="btn-sm btn-outline-primary plus">+</button>
                        </div>
                    </div>

                    <div class="col-lg-2">
                                        <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                        </div>

                    <div class="form-group  col-lg-4">
                        <label for="" class="label-default"> <i class="fa fa-mobile-alt"></i>Dulang</label>
                        <div class="">
                            <span class="minus">-</span>
                            <input type="text" name="dulang" value="1"/>
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group  col-lg-6">
                            <label for="" class="label-default"><i class="fa fa-restroom"></i>Tarikh</label>
                            <input type="date" class="form-control box-text" name="date"
                            mindate="tomorrow" min="<?php echo date("Y-m-d", strtotime("+3 day")); ?>" placeholder="MM/DD/YYYY" required="true">
                        </div>

                        <div class="form-group mb-3 col-lg-6">
                            <label for="" class="label-default"><i class="fa fa-restroom"></i>Masa</label>
                            <select name="time" id="gender" class="form-control box-text">
                                <option value="">Pilih masa delivery</option>
                                <option value="1">12:00 PM</option>
                                <option value="2">02:00 PM </option>
                                <option value="3">03:00 PM</option>
                                <option value="4">04:00 PM</option>
                                <option value="5">05:00 PM</option>
                                <option value="6">06:00 PM</option>
                            </select>
                        </div>
                    </div>

                    

                    <div class="form-group mb-3">
                        <label for="" class="label-default"><i class="fa fa-envelope" ></i>Remark</label>
                        <textarea type="text" name="remark" class="form-control box-text"  cols="30" rows="3" placeholder="Write your message to me"></textarea>
                    </div> 

                    <div class="text-center">

                        <button class="btn btn-primary btn-user btn-block mb-3" name="submit"> 
                            <i class="fa fa-share-square"></i> Order    
                        </button>
                        <button class="btn btn-warning btn-user btn-block mb-3" type="reset"> 
                            <i class="fa fa-sync"></i> RESET   
                        </button>

                        <?php
                            $txt_1 = 'You can see there is no need to include special commands for spaces if they  are in a PHP variable.'."%0A";
                            $txt_2 = 'But you do need to include some inside the variable to jump lines.'."%0D%0A";
                            $txt_3 = 'And nothing special for links: https://example.com';
                            $msg= $txt_1.$txt_2.$txt_3."%0A";
                        ?>
                            <button class="btn btn-success btn-user btn-block mb-3 ">..
                            </button>

                    </div>
                </form>

            </div>
        </div>
    </div>

        <!-- Footer -->
        <footer class="sticky-footer">
                    <div class="container my-auto mb-2">
		  		<div class="copyright text-center text-light my-auto">
					<span>Copyright &copy; WASAP.MY (2017) </span>
		  		</div>
			</div>
	  	</footer>
		<!-- End of Footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  
</html>