<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url(); ?> assets/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- FONT AWESOME CDN Url -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"> </link>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


<div class="container">
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('assets/image/iman-catering.png');?>" alt="Logo" width="10%" class="d-inline-block align-text-top">
      </a>
      <a class="ms-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"> 
        <i class="fa fa-bars fa-2x" style="color: red;"></i>
      </a>
    </div>
  </nav>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <img src="<?php echo base_url('assets/image/iman-catering.png');?>" alt="Logo" width="30%" class="d-inline-block align-text-top">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Iman Catering</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        sidebar
        <li><a href="<?php echo base_url()."index.php/order"?>"><span class="nav-label">Order</span></a></li>
        <li><a href="<?php echo base_url()."index.php/order/report"?>"><span class="nav-label">Report</span></a></li>                	
        <a href="<?php echo base_url()."index.php/order/updateData"?>"><span class="nav-label btn btn-sm btn-outline-primary mt-3">Update</span></a>     	
      </div>
    </div>
  </div>
</div>
