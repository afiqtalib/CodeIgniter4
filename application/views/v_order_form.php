<?php $this->load->view('v_order_header.php');?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order | Iman Catering </title>

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

</head>
    <style>
        body {
            margin: 0;
            width: 100%;
            /* assets/image/bg-wasapmy.png */
            /* background-color: #F5F5F7; */
            /* font-family: Verdana, Geneva, Tahoma, sans-serif; */
            color: rgb(79, 79, 79);
            -webkit-animation: name 35s infinite;
        }
        
        @-webkit-keyframes name {
            0% {
                background-color: #ff90b4;
            }
            10% {
                background-color: #840844;
            }
            30% {
                background-color: #f796b5;
            }
            50% {
                background-color: #900b4d;
            }
            70% {
                background-color: #930044;
            }
            100% {
                background-color: #fa93b1;
            }
        }   

        .box-container{
            float:center;
            background: #fff;
            text-align: left;
            font-family: 'Inter', sans-serif;
            border-radius: 20px;
            box-shadow: 0 4px 5px -1px rgba(0, 0, 0, 0.4), 0 2px 3px -1px rgba(0, 0, 0, 0.4);
            width: 90%;
            margin: 5% auto;
            padding: 15px;
        }

        .box-text{
            background: #eee;
            border: 1px solid #ccc;
            font-size: 14px;
            text-align: left;
            padding: 10px 10px;
            border-radius: 12px;
        }

        /* add on css */
        .icon-shape {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            vertical-align: middle;
        }

        .icon-sm {
            width: 2rem;
            height: 2rem;
            
        }

    </style>

    <script>
        function incrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal)) {
                parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        function decrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal) && currentVal > 0) {
                parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        $('.input-group').on('click', '.button-plus', function(e) {
            incrementValue(e);
        });

        $('.input-group').on('click', '.button-minus', function(e) {
            decrementValue(e);
        });
    </script>

  <body>    
    <div class="container card col-xl-5 col-lg-6 col-md-9 mt-4">
        <div class="text-center pt-4">
            <h6 class="h3 text-red-900 "><img src="<?php echo base_url('assets/image/iman-catering.png');?>" alt="logo" width="40%"></h6>
            <h6 class="h6 text-black-900 mb-3">Hi pelanggan Iman Catering, Anda boleh order sekarang!</h6>
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
                    // }
                    // $name=$_POST['name'];
                    // $phone=$_POST['phone']; 
                    
                    // Direct ke WA
                    // if((isset($_POST['name'])) && (isset($_POST['phone'])) && (isset($_POST['p_ayam'])) && (isset($_POST['p_kambing'])) && (isset($_POST['remark'])) && (isset($_POST['link'])))  {
                    //     // Prefilled Text in WhatsApp
                    //     $txt_1 = 'Name: '.$_POST['name']."%0A";
                    //     $txt_2 = 'Phone: '.$_POST['phone']."%0D%0A";
                    //     $txt_3 = 'Ayam PAX: '.$_POST['p_ayam']."%0D%0A";
                    //     $txt_4 = 'Kambing PAX: '.$_POST['p_kambing']."%0D%0A";
                    //     $txt_5 = 'Message: '.$_POST['remark']."%0D%0A";
                    //     $txt_6 = 'Link Location: '.$_POST['link']."%0D%0A";

                    //     $msg = "Asslamulaikum Iman Catering" .'%0D%0A %0D%0A'. $txt_1.$txt_2.$txt_3.$txt_4.$txt_5.$txt_6. "Thank You";
                    // }
                    // echo '<script>window.location.replace("https://api.whatsapp.com/send?phone=60199972514&text='.$msg.'")</script>';
                }
                ?>
                <!-- %0D%0A -->

                <!-- check validation form -->
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                
                <form class="login-container validate-form" action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="" class="label-default px-2"><i class="fa fa-address-card"></i>Nama</label>
                        <input type="text" name="name" class="form-control box-text" placeholder="Enter your name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="label-default px-2"> <i class="fa fa-mobile-alt"></i>No Telefon</label>
                        <input type="text" name="phone" class="form-control box-text" placeholder="0123456789">
                    </div>

                    <!-- SINGLE PACK -->
                    <div class="form-group mb-3">
                        <div class="mb-4 border-bottom pb-2">
                            <h5 class="mb-0"> <i class="fa fa-concierge-bell"></i> Single Pack</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-3">
                                        <p class="text-dark">Ayam</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="text-dark font-weight-bold">RM 11.00</p>
                                    </div>
                                    <div class="input-group w-auto justify-content-end align-items-center">
                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                        <input type="number" step="1" min="0" max="100" value="0" name="p_ayam" class="quantity-field border-0 text-center w-25">
                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-3">
                                        <p class="text-dark">Kambing</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="text-dark font-weight-bold">RM 17.00</p>
                                    </div>
                                    <div class="input-group w-auto justify-content-end align-items-center">
                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                        <input type="number" step="1" min="0" max="100" value="0" name="p_kambing" class="quantity-field border-0 text-center w-25">
                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-3">
                                        <p class="text-dark">Campur</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="text-dark font-weight-bold">RM 20.00</p>
                                    </div>
                                    <div class="input-group w-auto justify-content-end align-items-center">
                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                        <input type="number" step="1" min="0" max="100" value="0" name="p_campur" class="quantity-field border-0 text-center w-25">
                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- SET 3/4 DULANG  -->
                    <div class="form-group mb-3">
                        <div class="mb-4 border-bottom pb-2">
                            <h5 class="mb-0"> <i class="fa fa-utensils"></i> Set 3/4 Dulang</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-3">
                                        <p class="text-dark">Ayam</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="text-dark font-weight-bold">RM 50.00</p>
                                    </div>
                                    <div class="input-group w-auto justify-content-end align-items-center">
                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                        <input type="number" step="1" min="0" max="10" value="0" name="dk_ayam" class="quantity-field border-0 text-center w-25">
                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-3">
                                        <p class="text-dark">Kambing</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="text-dark font-weight-bold">RM 55.00</p>
                                    </div>
                                    <div class="input-group w-auto justify-content-end align-items-center">
                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                        <input type="number" step="1" min="0" max="10" value="0" name="dk_kambing" class="quantity-field border-0 text-center w-25">
                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-3">
                                        <p class="text-dark">Campur</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="text-dark font-weight-bold">RM 53.00</p>
                                    </div>
                                    <div class="input-group w-auto justify-content-end align-items-center">
                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                        <input type="number" step="1" min="0" max="10" value="0" name="dk_campur" class="quantity-field border-0 text-center w-25">
                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- SET 6/7 DULANG  -->
                    <div class="form-group mb-3">
                        <div class="mb-4 border-bottom pb-2">
                            <h5 class="mb-0"> <i class="fa fa-utensils"></i> Set 6/7 Dulang</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-3">
                                        <p class="text-dark">Ayam</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="text-dark font-weight-bold">RM 75.00</p>
                                    </div>
                                    <div class="input-group w-auto justify-content-end align-items-center">
                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                        <input type="number" step="1" min="0" max="10" value="0" name="d_ayam" class="quantity-field border-0 text-center w-25">
                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-3">
                                        <p class="text-dark">Kambing</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="text-dark font-weight-bold">RM 90.00</p>
                                    </div>
                                    <div class="input-group w-auto justify-content-end align-items-center">
                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                        <input type="number" step="1" min="0" max="10" value="0" name="d_kambing" class="quantity-field border-0 text-center w-25">
                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-3">
                                        <p class="text-dark">Campur</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="text-dark font-weight-bold">RM 85.00</p>
                                    </div>
                                    <div class="input-group w-auto justify-content-end align-items-center">
                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                        <input type="number" step="1" min="0" max="10" value="0" name="d_campur" class="quantity-field border-0 text-center w-25">
                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="form-group mb-3 col-lg-6">
                            <label for="" class="label-default px-2"><i class="fa fa-calendar"></i>Tarikh</label>
                            <p><small>Tempahan awal sehari</small></p>
                            <input type="date" class="form-control box-text" name="date"
                            mindate="tomorrow" min="<?php echo date("Y-m-d", strtotime("+0 day")); ?>" placeholder="MM/DD/YYYY">
                        </div>

                        <div class="form-group mb-3 col-lg-6">
                            <label for="" class="label-default px-2"><i class="fa fa-clock"></i>Masa</label>
                            <p><small>Delivery time (12:00PM - 6:00PM)</small></p>
                            <input type="time" id="appt" name="time" min="12:00" max="18:00" class="form-control box-text" required>
                            <!-- <select name="time" id="gender" class="form-control box-text">
                                <option value="">Pilih masa delivery</option>
                                <option value="1">12:00 PM</option>
                                <option value="2">02:00 PM </option>
                                <option value="3">03:00 PM</option>
                                <option value="4">04:00 PM</option>
                                <option value="5">05:00 PM</option>
                                <option value="6">06:00 PM</option>
                            </select> -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group mb-3 col-lg-6">
                            <label for="" class="label-default px-2"><i class="fa fa-map-marker-alt"></i>Link waze/google maps</label>
                            <input type="text" name="link" class="form-control box-text" placeholder="Masukan link lokasi delivery">
                        </div>

                        <div class="form-group mb-3 col-lg-6">
                            <label for="" class="label-default px-2"><i class="fa fa-location-arrow"></i>Kawasan Penghantaran</label>
                            <input type="text" name="location" class="form-control box-text" placeholder="Location">
                            <!-- <select name="location" id="gender" class="form-control box-text">
                                <option value=""> Pilih lokasi tempat daerah</option>
                                <option value="1">Kota Bharu</option>
                                <option value="2">Kubang Kerian</option>
                                <option value="3">Pengkalan Chepa</option>
                                <option value="4">Peringat</option>
                                <option value="5">Pasir Tumboh</option>
                                <option value="6">PCB</option>
                            </select> -->
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="label-default px-2"><i class="fa fa-envelope" ></i>Remark</label>
                        <textarea type="text" name="remark" class="form-control box-text"  cols="30" rows="3" placeholder="Write your message to me / land mark location delivery "></textarea>
                    </div> 

                    <div class="text-center justify-content-lg-around">

                        <button class="btn btn-sm btn-primary btn-user btn-block mb-3" name="submit"> 
                            <i class="fa fa-share-square"></i> Order    
                        </button>
                        <button class="btn btn-sm btn-warning btn-user btn-block mb-3" type="reset"> 
                            <i class="fa fa-sync"></i> Cancel   
                        </button>

                        <?php
                            $txt_1 = 'You can see there is no need to include special commands for spaces if they  are in a PHP variable.'."%0A";
                            $txt_2 = 'But you do need to include some inside the variable to jump lines.'."%0D%0A";
                            $txt_3 = 'And nothing special for links: https://example.com';
                            $msg= $txt_1.$txt_2.$txt_3."%0A";
                        ?>
                    </div>
                </form>

            </div>
        </div>
    </div>

        <!-- Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto mb-2">
		  		<div class="copyright text-center text-light my-auto fw-bold">
					<span>Copyright &copy; Iman Catering (2022) </span>
		  		</div>
			</div>
	  	</footer>
		<!-- End of Footer -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
  </body>
  
</html>