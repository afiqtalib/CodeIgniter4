<?php $this->load->view('v_order_header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report | Iman Catering</title>
</head>

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
        <div class="card">
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
                                <th> Order </th>
                                <th> Tarikh </th>
                                <th> Masa </th>
                                <th> Tempat </th>
                                <th> Location </th>
                                <th> Remark </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach($result as $data)
                                {                            
                                echo "<tr> ";
                                    echo "<td style='width:1%'>".$no++."</td>";
                                    echo "<td>".$data['name']."</td>";
                                    echo "<td>".$data['phone']."</td>";
                                    echo "<td>"; 
                                    if (( ($data['p_ayam']) && ($data['p_kambing']) && ($data['p_campur']) ) > 0) {

                                    }
                                    echo "Single Pax - Ayam ".$data['p_ayam'] . "<br> Single Pax - Kambing ".$data['p_kambing'] ."<br> Single Pax - Campur ".$data['p_campur'];

                                    echo "</td>";
                                    echo "<td>".$data['date']."</td>";
                                    echo "<td>".$data['time']."</td>";
                                    echo "<td>".$data['location']."</td>";
                                    echo "<td> <a target='_blank' href='".$data['link']."'> <i class='fas fa-map-marked-alt fa-2x' style='color:#007FFF;'></i> </a> </td>";
                                    echo "<td>".$data['remark']."</td>";
                                    echo "<td>"."<a href='#' class='btn btn-sm btn-warning'>Update</a>"."</td>";
                                echo "</tr>";
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- END TABLE ORDERS -->

                <a href="#" class="btn btn-sm btn-primary">button</a>
            </div>
            <div class="card-footer text-muted">
                <?php
                    echo "SINGLE PAX <br>"; 

                    $totAyam = 0;
                    $total_pAyam=$data['p_ayam']; 
                    $totAyam += $total_pAyam;
                    echo "Ayam : ". $totAyam;

                    echo "<br>"; 
                    // echo str_repeat('&nbsp;', 8);                    
                    
                    $totKambing = 0;
                    $total_pKambing=$data['p_kambing']; 
                    $totKambing += $total_pKambing;
                    echo "Kambing : ". $totKambing;
                
                ?> 
                <br>
                <?php 
                    // $totAyam = 0;
                    $total_pAyam=$data['p_ayam']; 
                    $totPriceAyam = $totAyam*11.00;

                    $total_pKambing=$data['p_kambing']; 
                    $totPriceKambing = $totKambing*17.00;

                    $totalSales = $totPriceAyam + $totPriceKambing;

                    echo "TOTAL SALES = : RM". $totalSales;
                    
                ?>
            </div>
        </div>
        
        
    </div>
    
</body>
</html>