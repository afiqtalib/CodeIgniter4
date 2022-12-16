<?php $this->load->view('v_order_header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report | Iman Catering</title>
</head>
<!-- CDN DATATABLE -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

<style>
    body {
        margin: 0;
        width: 100%;
        background: rgb(239,119,121);
        background: linear-gradient(302deg, rgba(239,119,121,1) 3%, rgba(251,206,177,1) 75%);    
    }
</style>

<body>
    <div class="container mt-5">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Orders</h5>
                <p class="card-text">letak filter range date </p>

                <!-- BEGIN TABLE ORDERS -->
                <div class="table-responsive">
                    <table id="example" style="width:100%; color: black;" class="table table-bordered table-hover display" >
                        <thead class="table-primary">
                            <tr class="text-dark">
                                <th> No. </th>
                                <th> Name </th>
                                <th> Phone </th>
                                <th style="width:18%"> Order </th>
                                <th style="width:10%"> Tarikh </th>
                                <th> Masa </th>
                                <th> Tempat </th>
                                <th> Location </th>
                                <th> Remark </th>
                                <th style="width:2%">`</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;

                                // calculation 
                                $count_total_pAyam = 0;
                                $count_total_pKambing = 0;
                                $count_total_pCampur = 0;

                                $count_total_dAyam = 0;
                                $count_total_dKambing = 0;
                                $count_total_dCampur = 0;

                                foreach($result as $data)
                                {                            
                                echo "<tr> ";
                                    echo "<td style='width:1%'>".$no++."</td>";
                                    echo "<td>".$data['name']."</td>";
                                    echo "<td>".$data['phone']."</td>";
                                    echo "<td>"; 
                                    if ($data['p_ayam']>0) {
                                        echo "Single Pax - Ayam ".$data['p_ayam'];
                                    }
                                    if ($data['p_kambing']>0) {
                                        echo "<br> Single Pax - Kambing ".$data['p_kambing'];
                                    }
                                    if ($data['p_campur']>0) {
                                        echo "<br> Single Pax - Campur ".$data['p_campur'];
                                    }
                                    if ($data['d_ayam']>0) {
                                        echo "<br> Dulang - Ayam ".$data['d_ayam'];
                                    }
                                    if ($data['d_kambing']>0) {
                                        echo "<br> Dulang - Kambing ".$data['d_kambing'];
                                    }
                                    if ($data['d_campur']>0) {
                                        echo "<br> Dulang - Campur ".$data['d_campur'];
                                    }

                                    // if ( isset ($data['p_ayam']) || $data['p_kambing'] || $data['p_campur']  == '0') {
                                    //     echo "Single Pax - Ayam ".$data['p_ayam'] . "<br> Single Pax - Kambing ".$data['p_kambing'] ."<br> Single Pax - Campur ".$data['p_campur'];
                                    // }
                                    // echo "Single Pax - Ayam ".$data['p_ayam'] . "<br> Single Pax - Kambing ".$data['p_kambing'] ."<br> Single Pax - Campur ".$data['p_campur'];

                                    echo "</td>";
                                    echo "<td>".$data['date']."</td>";
                                    echo "<td>".$data['time']."</td>";
                                    echo "<td>".$data['location']."</td>";
                                    echo "<td> <a target='_blank' href='".$data['link']."'> <i class='fas fa-map-marked-alt fa-2x' style='color:#007FFF;'></i> </a> </td>";
                                    echo "<td>".$data['remark']."</td>";
                                    echo "<td>"."<i class='fas fa-edit fa-lg text-warning'></i>"."</td>";
                                echo "</tr>";
            
                                $total_pAyam=$data['p_ayam']; 
                                $count_total_pAyam += $total_pAyam;

                                $total_pKambing=$data['p_kambing']; 
                                $count_total_pKambing += $total_pKambing;

                                $total_pCampur=$data['p_campur']; 
                                $count_total_pCampur += $total_pCampur;

                                // DULANG
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

                <button type="button" class="btn btn-primary"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                    Custom button
                </button>
            </div>
            <div class="card-footer fw-bold">
                <div class="row px-4">
                    <div class="col-sm-3">
                        <!-- <ul class="">
                            <h5>SINGLE PAX</h5>
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
                        </ul> -->
                        
                        <?php
                            // echo str_repeat('&nbsp;', 8);
                            echo "SINGLE PAX <br>";
                            echo "Ayam : ". $count_total_pAyam;
                            echo "<br>"; 
                            echo "Kambing : ". $count_total_pKambing;
                            echo "<br>"; 
                            echo "Campur : ". $count_total_pCampur;
                        ?> 
                    </div>
                    <div class="col-sm-3">
                        <?php
                            echo "DULANG <br>";
                            echo "Ayam : ". $count_total_dAyam;
                            echo "<br>"; 
                            echo "Kambing : ". $count_total_dKambing;
                            echo "<br>"; 
                            echo "Campur : ". $count_total_dCampur;
                        ?> 
                    </div>
                    <div class="col-sm-6 text-success">
                        <?php 
                            $totPriceAyam = $count_total_pAyam*11.00;
                            $totPriceKambing = $count_total_pKambing*17.00;
                            $totPriceCampur = $count_total_pCampur*20.00;

                            $totPricedAyam = $count_total_dAyam*75.00;
                            $totPricedKambing = $count_total_dKambing*90.00;
                            $totPricedCampur = $count_total_dCampur*85.00;

                            $totalSales = $totPriceAyam + $totPriceKambing + $totPriceCampur + $totPricedAyam + $totPricedKambing + $totPricedCampur; 
                            echo "<h1> TOTAL SALES : RM". number_format($totalSales,2) .'</h1>';
                        ?>
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    
</body>
</html>