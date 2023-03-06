<?php $this->load->view('v_order_header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report | Iman Catering</title>

    <!-- CDN DATATABLE -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' /> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- SWEETALERT CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<style>
    body {
        /* font-family: Roboto; */
        font-family: 'Open Sans', sans-serif;
        margin: 0;
        width: 100%;
        background: #e36fa8;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-3 mb-5 bg-light border-0 rounded" >
            <div class="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Orders</h5>
                 <!-- PROFILE INFORMATION -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">#orderID</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $view_data['id'];?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $view_data['name']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $view_data['phone']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Order</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php  
                                        if ($view_data['p_ayam']>0) {
                                            echo "Single Pax - Ayam ".$view_data['p_ayam'];
                                        }
                                        if ($view_data['p_kambing']>0) {
                                            echo "<br> Single Pax - Kambing ".$view_data['p_kambing'];
                                        }
                                        if ($view_data['p_campur']>0) {
                                            echo "<br> Single Pax - Campur ".$view_data['p_campur'];
                                        }
                                        if ($view_data['dk_ayam']>0) {
                                            echo "<br> Set 3/4 Dulang - Ayam ".$view_data['dk_ayam'];
                                        }
                                        if ($view_data['dk_kambing']>0) {
                                            echo "<br> Set 3/4 Dulang - Kambing ".$view_data['dk_kambing'];
                                        }
                                        if ($view_data['dk_campur']>0) {
                                            echo "<br> Set 3/4 Dulang - Campur ".$view_data['dk_campur'];
                                        }
                                        if ($view_data['d_ayam']>0) {
                                            echo "<br> Dulang - Ayam ".$view_data['d_ayam'];
                                        }
                                        if ($view_data['d_kambing']>0) {
                                            echo "<br> Dulang - Kambing ".$view_data['d_kambing'];
                                        }
                                        if ($view_data['d_campur']>0) {
                                            echo "<br> Dulang - Campur ".$view_data['d_campur'];
                                        } ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Tarikh Order</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $view_data['date']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Masa</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $view_data['time'];?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Location</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $view_data['location']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Remark</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $view_data['remark']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Total</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">RM <?php  echo $total =($view_data['p_ayam']*11)+($view_data['p_kambing']*17)+($view_data['p_campur']*20)+ ($view_data['dk_ayam']*50)+($view_data['dk_kambing']*55)+($view_data['dk_campur']*53)+($view_data['d_ayam']*75)+($view_data['d_kambing']*90)+($view_data['d_campur']*85)?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Status Order</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <?php 
                                            if ($view_data['status']!='unpaid') {
                                                $status="success";
                                                } else {
                                                $status="warning";
                                                }
                                        ?>
                                        <p class="text-muted mb-0"><span class="badge rounded-pill text-bg-<?php echo $status?>"><?php echo $view_data['status'] ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END TABLE ORDERS -->

                <!-- MODAL UPDATE -->
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Order #<?php echo $view_data['id'];?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                
                            <form action="<?php echo base_url()."team/update"?>" method="POST" >
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="recipient-name" class="col-form-label">Customer</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $view_data['name'];?>" >
                                    </div>
                                    <div class="col-6">
                                        <label for="recipient-name" class="col-form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="<?php echo $view_data['phone'];?>" >
                                    </div>
                                </div>
                                <!-- SINGLE PACK -->
                                <div class="form-group mb-3">
                                    <div class="mb-2 border-bottom pb-2">
                                        <h6 class="mb-0"> <i class="fa fa-concierge-bell"></i> Single Pack</h6>
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
                                                    <input type="number" step="1" min="0" max="10" value="0" name="p_ayam" class="quantity-field border-0 text-center w-25">
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
                                                    <input type="number" step="1" min="0" max="10" value="0" name="p_kambing" class="quantity-field border-0 text-center w-25">
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
                                                    <p class="text-dark font-weight-bold">RM 20.00</p> <?php echo $view_data['p_campur'];?>
                                                </div>
                                                <div class="input-group w-auto justify-content-end align-items-center col-lg-3">
                                                    <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                                    <input type="number" step="1" min="0" max="10" value="0" name="p_campur" value="<?php echo $view_data['p_campur'];?>" class="quantity-field border-3 text-center w-50">
                                                    <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="form-group mb-3 col-lg-6">
                                        <label for="" class="label-default px-2"><i class="fa fa-calendar"></i> <?php echo '&nbsp';?> Tarikh</label>
                                        <p><small>Tempahan awal sehari</small></p>
                                        <input type="date" class="form-control box-text" name="date"
                                        mindate="tomorrow" min="<?php echo date("Y-m-d", strtotime("+1 day")); ?>" value="<?php echo $view_data['date'];?>"> 
                                    </div>

                                    <div class="form-group mb-3 col-lg-6">
                                        <label for="" class="label-default px-2"><i class="fa fa-clock"></i> <?php echo '&nbsp';?> Masa</label>
                                        <p><small>Delivery time (12:00PM - 6:00PM)</small></p>
                                        <input type="time" id="appt" name="time" value="<?php echo $view_data['time'];?>" min="12:00" max="18:00" class="form-control box-text" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-7">
                                        <label for="" class="label-default col-form-label"><i class="fa fa-location-arrow"></i>Kawasan Penghantaran</label>
                                        <select name="location" id="gender" class="form-select box-text">
                                            <option value=""> <?php echo $view_data['location'];?></option>
                                            <option value="1">Kota Bharu</option>
                                            <option value="2">Kubang Kerian</option>
                                            <option value="3">Pengkalan Chepa</option>
                                            <option value="4">Peringat</option>
                                            <option value="5">Pasir Tumboh</option>
                                            <option value="6">PCB</option>
                                        </select>
                                    </div>
                                    <div class="col-5">
                                        <label for="recipient-name" class="col-form-label">Status</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected><?php echo $view_data['status'];?></option>
                                            <option value="unpaid">Unpaid</option>
                                            <option value="paid">Paid</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="mb-2">
                                    <label for="" class="label-default px-2">Remark</label>
                                    <textarea type="text" name="remark" value="<?php echo $view_data['remark'];?>" class="form-control"  cols="30" rows="2"><?php echo $view_data['remark'];?></textarea>
                                </div> 
                            </form>
                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" name="update">Edit</button>
                        </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                    Modal
                </button>
                <a name="update" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" href="<?php echo site_url('order/update_order1'); ?>"                         
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; color:black;">
                    Update view_data
                </a>
                <a name="update" class="btn btn-sm btn-secondary text-light" href="<?php echo site_url('order/report'); ?>"                         
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; color:black;">
                    Back
                </a>

                <?php   if (isset($_SESSION['success'])) { 
                    echo '<script type="text/javascript">sweetAlert("Update !","Order anda Berjaya Update","success")</script>';
                }
                ?>

            </div>  

            <!-- <div class="card-footer fw-bold">
                <div class="row px-4">
                    <div class="col-md-3">
                        <ul class="">
                            <h5>SINGLE PAX</h5>
                            <li class=" d-flex justify-content-between align-items-center">
                                Ayam
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kambing
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Campur
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="col-md-3">
                        <ul class="">
                            <h5>Set 3/4 DULANG</h5>
                            <li class=" d-flex justify-content-between align-items-center">
                                Ayam
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kambing
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Campur
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="">
                            <h5> <i class="fa fa-concierge-bell"></i> Set 6/7 DULANG</h5>
                            <li class=" d-flex justify-content-between align-items-center">
                                Ayam
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kambing
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Campur
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-success text-center">
                        <?php 
    

                            echo "<h3 class='fw-bold'> TOTAL SALES : RM".'</h3>';
                        ?>
                        <h3></h3>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- echo (strlen($abu)>150)?substr($post['content'],0,150).'...':$post['content']; ?> -->
<details>
    <summary>Description</summary>
    <p>
        <?php 
            $abu="The Model represents your view_data structures. Typically, your model classes will contr, aocess the HTTP request and generate a web page";
            echo $abu;
        ?>
    </p>
</details>
<!-- <p><?php echo (strlen($abu)>50)?substr($abu,0,50).'...':$abu;?></p> -->
        
        
    </div>
    
</body>
</html>