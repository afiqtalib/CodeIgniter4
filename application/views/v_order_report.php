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

    <!-- LINK DATA TABLE EXPORT -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">

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

<script>
    // JS export BUTTON
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy','csv', 'pdf', 'print'
            ]
        });
    });
</script>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-3 mb-5 bg-light border-0 rounded">
            <div class="card-body">
                <h5 class="card-title">Orders</h5>

                <!-- BEGIN TABLE ORDERS -->
                <div class="table-responsive">
                    <table id="example" style="width:100%; font-size: 15px;" id="example" class="table table-hover" >
                        <thead style="background-color: #840844;">
                            <tr class="text-white">
                                <th> No. </th>
                                <th> Name </th>
                                <th> Phone </th>
                                <th style="width:18%"> Order </th>
                                <th style="width:10%"> Tarikh </th>
                                <th> Masa </th>
                                <th> Tempat </th>
                                <!-- <th> Loc </th> -->
                                <th> Remark </th>
                                <th> Total (RM)</th>
                                <th> Status </th>
                                <th style="width:2%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;

                                // calculation 
                                $count_total_pAyam = 0;
                                $count_total_pKambing = 0;
                                $count_total_pCampur = 0;

                                $count_total_dk_Ayam = 0;
                                $count_total_dk_Kambing = 0;
                                $count_total_dk_Campur = 0;

                                $count_total_dAyam = 0;
                                $count_total_dKambing = 0;
                                $count_total_dCampur = 0;

                                foreach($result as $data)
                                { ?>                            
                                <tr>
                                    <td style="width:1%"><?php echo $no++; ?></td>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><?php echo $data['phone']; ?></td>
                                    <td><?php  
                                        if ($data['p_ayam']>0) {
                                            echo "Single Pax - Ayam ".$data['p_ayam'];
                                        }
                                        if ($data['p_kambing']>0) {
                                            echo "<br> Single Pax - Kambing ".$data['p_kambing'];
                                        }
                                        if ($data['p_campur']>0) {
                                            echo "<br> Single Pax - Campur ".$data['p_campur'];
                                        }
                                        if ($data['dk_ayam']>0) {
                                            echo "<br> Set 3/4 - Ayam ".$data['dk_ayam'];
                                        }
                                        if ($data['dk_kambing']>0) {
                                            echo "<br> Set 3/4 - Kambing ".$data['dk_kambing'];
                                        }
                                        if ($data['dk_campur']>0) {
                                            echo "<br> Set 3/4 - Campur ".$data['dk_campur'];
                                        }
                                        if ($data['d_ayam']>0) {
                                            echo "<br> Set 6/7 - Ayam ".$data['d_ayam'];
                                        }
                                        if ($data['d_kambing']>0) {
                                            echo "<br> Set 6/7 - Kambing ".$data['d_kambing'];
                                        }
                                        if ($data['d_campur']>0) {
                                            echo "<br> Set 6/7 - Campur ".$data['d_campur'];
                                        } ?>
                                    </td>
                                    <td><?php echo $data['date'] ?></td>
                                    <td><?php echo $data['time'] ?></td>
                                    <td><?php echo $data['location'] ?></td>
                                    <!-- <td> <a target='_blank' href=<?php echo $data['link'] ?>> <i class="fas fa-map-marked-alt fa-1x" style="color:#007FFF;"></i> </a></td> -->
                                    <td><?php echo $data['remark'] ?></td>
                                    <td><?php echo $total =($data['p_ayam']*11)+($data['p_kambing']*17)+($data['p_campur']*21)+ ($data['dk_ayam']*50)+($data['dk_kambing']*55)+($data['dk_campur']*53)+($data['d_ayam']*75)+($data['d_kambing']*90)+($data['d_campur']*85) ?></td>
                                    <?php 
                                        if ($data['status']!='unpaid') {
                                            $status="success";
                                            } else {
                                            $status="warning";
                                            }
                                    ?>
                                    <td> <span class="badge rounded-pill text-bg-<?php echo $status?>"><?php echo $data['status'] ?></span> </td>
                                    <td> 
                                        <a href="<?php echo site_url('order/update_order/'. $data['id'])?>"><i class="fa-sharp fa-solid fa-eye"></i> </a>
                                        <a href="<?php echo site_url('order/update_data/'. $data['id'])?>"><i class="fa-sharp fa-solid fa-pen-to-square text-warning"></i> </a>
                                        <a href="<?php echo site_url('order/delete_order/'. $data['id'])?>"><i class="fa-sharp fa-solid fa-trash text-danger"></i> </a>
                                    </td>
                                </tr> 
                                <?php
                                // SINGLE PACK
                                $total_pAyam=$data['p_ayam']; 
                                $count_total_pAyam += $total_pAyam;

                                $total_pKambing=$data['p_kambing']; 
                                $count_total_pKambing += $total_pKambing;

                                $total_pCampur=$data['p_campur']; 
                                $count_total_pCampur += $total_pCampur;

                                // set 3/4 DULANG
                                $total_dk_Ayam=$data['dk_ayam']; 
                                $count_total_dk_Ayam += $total_dk_Ayam;

                                $total_dk_Kambing=$data['dk_kambing']; 
                                $count_total_dk_Kambing += $total_dk_Kambing;

                                $total_dk_Campur=$data['dk_campur']; 
                                $count_total_dk_Campur += $total_dk_Campur;

                                // set 6/7 DULANG
                                $total_dAyam=$data['d_ayam']; 
                                $count_total_dAyam += $total_dAyam;

                                $total_dKambing=$data['d_kambing']; 
                                $count_total_dKambing += $total_dKambing;

                                $total_dCampur=$data['d_campur']; 
                                $count_total_dCampur += $total_dCampur;
                                } 
                            ?>
                        </tbody>
                    </table>
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
                                        <input type="text" class="form-control" name="name" value="<?php echo $view['name'];?>" >
                                    </div>
                                    <div class="mb-2">
                                        <label for="recipient-name" class="col-form-label">Status Order</label><br>
                                        <input class="form-check-input" type="checkbox" name="status" value="1" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Completed
                                        </label><br>
                                        <input class="form-check-input" type="checkbox" name="status" value="2" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Pending
                                        </label>
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
                                        <textarea class="form-control" id="message-text" name="remark" value=""></textarea>
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

                <?php   if (isset($_SESSION['success'])) { 
                    echo '<script type="text/javascript">sweetAlert("Update !","Order anda Berjaya Update","success")</script>';
                }
                ?>
            <!-- </div>   -->

                <div class="card-footer fw-bold">
                    <div class="row px-4">
                        <div class="col-md-3">
                            <ul class="">
                                <h5> <i class="fa fa-utensils"></i> SINGLE PAX</h5>
                                <li class=" d-flex justify-content-between align-items-center">
                                    Ayam
                                    <span class="badge bg-primary rounded-pill"><?php echo $count_total_pAyam ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Kambing
                                    <span class="badge bg-primary rounded-pill"><?php echo $count_total_pKambing ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Campur
                                    <span class="badge bg-primary rounded-pill"><?php echo $count_total_pCampur?></span>
                                </li>
                            </ul>
                            
                            <?php
                                echo str_repeat('&nbsp;', 8);
                            ?> 
                        </div>
                        <div class="col-md-3">
                            <ul class="">
                                <h5> <i class="fa fa-concierge-bell"></i> Set 3/4 DULANG</h5>
                                <li class=" d-flex justify-content-between align-items-center">
                                    Ayam
                                    <span class="badge bg-primary rounded-pill"><?php echo $count_total_dk_Ayam ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Kambing
                                    <span class="badge bg-primary rounded-pill"><?php echo $count_total_dk_Kambing ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Campur
                                    <span class="badge bg-primary rounded-pill"><?php echo $count_total_dk_Campur?></span>
                                </li>
                            </ul>
                            <?php
                                // echo "DULANG <br>";
                                // echo "Ayam : ". $count_total_dAyam;
                                // echo "<br>"; 
                                // echo "Kambing : ". $count_total_dKambing;
                                // echo "<br>"; 
                                // echo "Campur : ". $count_total_dCampur;
                            ?> 
                        </div>
                        <div class="col-md-3">
                            <ul class="">
                                <h5> <i class="fa fa-concierge-bell"></i> Set 6/7 DULANG</h5>
                                <li class=" d-flex justify-content-between align-items-center">
                                    Ayam
                                    <span class="badge bg-primary rounded-pill"><?php echo $count_total_dAyam ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Kambing
                                    <span class="badge bg-primary rounded-pill"><?php echo $count_total_dKambing ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Campur
                                    <span class="badge bg-primary rounded-pill"><?php echo $count_total_dCampur?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 text-success text-center">
                            <?php 
                                $totPriceAyam = $count_total_pAyam*11.00;
                                $totPriceKambing = $count_total_pKambing*17.00;
                                $totPriceCampur = $count_total_pCampur*21.00;

                                $totPrice_dk_Ayam = $count_total_dk_Ayam*50.00;
                                $totPrice_dk_Kambing = $count_total_dk_Kambing*55.00;
                                $totPrice_dk_Campur = $count_total_dk_Campur*53.00;

                                $totPricedAyam = $count_total_dAyam*75.00;
                                $totPricedKambing = $count_total_dKambing*90.00;
                                $totPricedCampur = $count_total_dCampur*85.00;

                                $totalSales = $totPriceAyam + $totPriceKambing + $totPriceCampur + $totPrice_dk_Ayam + $totPrice_dk_Kambing + $totPrice_dk_Campur + $totPricedAyam + $totPricedKambing + $totPricedCampur; 
                                echo "<h3 class='fw-bold'> TOTAL SALES : RM". number_format($totalSales,2) .'</h3>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table bg-white text-center rounded">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" colspan="3"> Single Pax </th>
                        <th scope="col" colspan="3"> Set 3/4 </th>
                        <th scope="col" colspan="3"> Set 6/7 </th>
                    </tr>
                    <tr>
                        <th scope="col">Tarikh</th>
                        <th scope="col"> AYAM </th>
                        <th scope="col"> KAMBING</th>
                        <th scope="col"> Campur</th>
                        <th scope="col"> AYAM </th>
                        <th scope="col"> KAMBING</th>
                        <th scope="col"> Campur</th>
                        <th scope="col"> AYAM </th>
                        <th scope="col"> KAMBING</th>
                        <th scope="col"> Campur</th>
                        <th scope="col"> Total Order</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($dashboard as $p) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $p['date'] ?></th>
                        <td><?php echo $p['total_Payam'] ?></td>
                        <td><?php echo $p['total_Pkambing'] ?></td>
                        <td><?php echo $p['total_Pcampur'] ?></td>
                        <td><?php echo $p['total_Dkayam'] ?></td>
                        <td><?php echo $p['total_Dkkambing'] ?></td>
                        <td><?php echo $p['total_Dkcampur'] ?></td>
                        <td><?php echo $p['total_Dayam'] ?></td>
                        <td><?php echo $p['total_Dkambing'] ?></td>
                        <td><?php echo $p['total_Dcampur'] ?></td>
                        <td><?php echo $p['total_order'] ?></td>
                    </tr>
                    <?php } ?> 
                </tbody>
            </table>
        <!-- echo (strlen($abu)>150)?substr($post['content'],0,150).'...':$post['content']; ?> -->
        <details>
            <summary>Description</summary>
            <p>
                <?php 
                    $abu="The Model represents your data structures. Typically, your model classes will contr, aocess the HTTP request and generate a web page";
                    echo $abu;
                ?>
            </p>
        </details>
        <!-- <p><?php echo (strlen($abu)>50)?substr($abu,0,50).'...':$abu;?></p> -->
        
    </div>
    </div>


    <!-- IMORT JQUERY -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- JS DATATABLE -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

</body>
</html>