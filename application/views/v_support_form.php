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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?> assets/css/bootstrap.min.css">

 <!-- SWEETALERT CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

    <style>
        body {
            margin: 0;
            width: 100%;
            /* background: linear-gradient(300deg, rgba(49,140,231,1) 10%, rgba(147,36,166,1) 100%);  */
            /* background: rgb(3,192,60);
            background: linear-gradient(82deg, rgba(3,192,60,1) 0%, rgba(40,199,111,1) 100%); */
            /* assets/image/bg-wasapmy.png */
            background-image: url('assets/image/bg-wasapmy.png');
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
            width: 75%;
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
    
    </style>

  <body>    
    <div class="container box-container">
        <div class="text-center pt-4">
            <h6 class="h3 text-red-900 "><img src="<?php echo base_url('assets/image/wasap-my.png');?>" alt="logo" width="25%"></h6>
            <h6 class="h6 text-black-900 mb-2">Anda boleh isi form ini untuk direct ke Whatsapp kami</h6>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10" >
                <!-- MESSAGE SUBMIT FORM & REDIRECT TO WS  -->
                <?php   
                    if (isset($_SESSION['success'])) {
                        echo '<script type="text/javascript">sweetAlert("Success !","Anda telah berjaya mengisi form","success")</script>';

                        if((isset($_POST['name'])) && (isset($_POST['phone'])) && (isset($_POST['user_type'])) && (isset($_POST['prob_type'])) && (isset($_POST['message'])))  {
                            
                            // "%0D%0A" - insert next line
                            $txt_1 = 'Nama: '.$_POST['name']."%0A";
                            $txt_2 = 'No Telefon: '.$_POST['phone']."%0D%0A";
                            
                            // if statement for USER_TYPE
                            if ($_POST['user_type']== 1) {
                                $txt_3 = 'Pengguna: Unregistered';
                            }
                            else if ($_POST['user_type'] == 2) {
                                $txt_3 = "Pengguna: Registered Free";
                            }
                            else if ($_POST['user_type'] == 3) {
                                $txt_3 = "Pengguna: Registered Premium";
                            }
                            
                            // if statement for PROB_TYPE
                            if ($_POST['prob_type']== 1) {
                                $txt_4 = 'Masalah: System update';
                            }
                            else if ($_POST['prob_type']== 2) {
                                $txt_4 = 'Masalah: Link issues (untally/unvalid)';
                            }
                            else if ($_POST['prob_type']== 3) {
                                $txt_4 = 'Masalah: Payment & Package';
                            }
                            else if ($_POST['prob_type']== 4) {
                                $txt_4 = 'Masalah: System Features';
                            }
                            else if ($_POST['prob_type']== 5) {
                                $txt_4 = 'Masalah: FB, TikTok Pixel ID / google Conversion';
                            }
                            else if ($_POST['prob_type']== 6) {
                                $txt_4 = 'Masalah: Registered account details';
                            }
                            else if ($_POST['prob_type']== 7) {
                                $txt_4 = 'Masalah: Expiration date';
                            }
                            else if ($_POST['prob_type']== 8) {
                                $txt_4 = 'Masalah: Lain-lain';
                            }
                            
                            $txt_5 = 'Mesej: '.$_POST['message']."%0D%0A";
                            
                            $text_msg = "Assalamualaikum Customer Services WASAP.MY" .'%0D%0A %0D%0A'. $txt_1.$txt_2.$txt_3.'%0D%0A'.$txt_4.'%0D%0A'.$txt_5. "Thank You";
                        }
                        // $text_msg= $name.$phone.$message; 01128951819
                        echo '<script>window.location.replace("https://api.whatsapp.com/send?phone=601128951819&text='.$text_msg.'")</script>';
                 }?>

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

                    <div class="form-group mb-3">
                        <label for="" class="label-default"><i class="fa fa-restroom"></i>User</label>
                        
                        <select name="user_type" id="gender" class="form-control box-text">
                            <option value="">Choose type of user</option>
                            <option value="1">Unregistered </option>
                            <option value="2">Registered FREE </option>
                            <option value="3">Registered PREMIUM &#11088;</option>
                        </select>
                        
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="label-default"><i class="fa fa-hand-point-right"></i>Type of problems</label>
                        <select name="prob_type" id="gender" class="form-control box-text">
                            <option value="">Choose current problem</option>
                            <option value="1">System update</option>
                            <option value="2">Link issues (untally/unvalid)</option>
                            <option value="3">Payment & Package</option>
                            <option value="4">System Features </option>
                            <option value="5">FB, TikTok Pixel ID / google Conversion</option>
                            <option value="6">Registered account details</option>
                            <option value="7">Expiration date</option>
                            <option value="8">Other</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="label-default"><i class="fa fa-envelope" ></i>Message</label>
                        <textarea type="text" name="message" class="form-control box-text"  cols="30" rows="3" placeholder="Write your message to me"></textarea>
                    </div> 

                    <div class="text-center">

                        <button class="btn btn-primary btn-user btn-block mb-3" name="submit"> 
                            <i class="fa fa-share-square"></i> Submit    
                        </button>
                        <button class="btn btn-warning btn-user btn-block mb-3" type="reset"> 
                            <i class="fa fa-sync"></i> RESET   
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