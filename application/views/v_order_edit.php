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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                
                            <form action="<?php echo base_url()."team/edit_contact1"?>" method="POST" >
                                <div class="mb-2">
                                    <label for="recipient-name" class="col-form-label">Customer Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $view_data['name'];?>" >
                                </div>
                                <div class="mb-2">
                                </div>
                                <div class="mb-2">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Status Order</option>
                                        <option value="1">Unpaid</option>
                                        <option value="2">Paid</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message/Remark</label>
                                    <textarea class="form-control" id="message-text" name="remark" value="<?php echo $view_data['remark'];?>"></textarea>
                                </div>
                            </form>
                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" name="update">Update</button>
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

                <?php   if (isset($_SESSION['success'])) { 
                    echo '<script type="text/javascript">sweetAlert("Update !","Order anda Berjaya Update","success")</script>';
                }
                ?>

            </div>  

            <div class="card-footer fw-bold">
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
            </div>
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