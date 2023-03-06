<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url(); ?> assets/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- FONT AWESOME CDN Url -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"> </link>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


<div class="bg-opacity-10" style="background-color: #F0F8FF;">
	<nav class="navbar">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url('assets/image/iman-catering.png');?>" alt="Logo" width="10%" class="d-inline-block align-text-top">
			</a>
			<a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"> 
				<i class="fa fa-bars fa-lg" style="color: #660000;"></i>
			</a>
		</div>
	</nav>

	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
		<div class="offcanvas-header">
			<img src="<?php echo base_url('assets/image/iman-catering.png');?>" alt="Logo" width="30%" class="d-inline-block align-text-top">
			<h5 class="offcanvas-title" id="offcanvasExampleLabel">Iman Catering</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>

		<div id="digital-clock"></div>
		
		<div class="offcanvas-body">
			<ul class="list-unstyled">
				<li>
					<a href="<?php echo base_url()."index.php/order"?>"><span class="nav-label nav-bar h3">
						<i class="fa-solid fa-square-plus"></i> Order Form</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url()."index.php/order/report"?>"><span class="nav-label nav-bar h3">
					<i class="fa-solid fa-file"></i> Report</span>
					</a>
				</li>                	
				<!-- <a href="<?php echo base_url()."index.php/order/updateData"?>"><span class="nav-label btn btn-sm btn-outline-primary mt-3">Update</span></a>     	 -->
			</ul>
		</div>
	</div>
</div>

<script>
	function displayDateTime() {
		var currentDate = new Date();
		var day = currentDate.getDate();
		var month = currentDate.getMonth() + 1; // January is 0
		var year = currentDate.getFullYear();
		var hours = currentDate.getHours();
		var minutes = currentDate.getMinutes();
		var seconds = currentDate.getSeconds();

		// Add a leading zero to the hours, minutes, and seconds if they are single digits
		if (hours < 10) {
			hours = "0" + hours;
		}
		if (minutes < 10) {
			minutes = "0" + minutes;
		}
		if (seconds < 10) {
			seconds = "0" + seconds;
		}

		// Concatenate the date and time into a single string
		var dateString = month + "/" + day + "/" + year + " " + hours + ":" + minutes + ":" + seconds;

		// Update the date and time display
		document.getElementById("digital-clock").innerHTML = dateString;
	}

		// Call the displayDateTime function every 1000 milliseconds (1 second)
		setInterval(displayDateTime, 1000);

</script>

<style>
	#digital-clock {
		font-size: 36px;
		color: #660000;
		text-align: center;
		font-weight: bolder;
	}

	.nav-bar {
		color: #660000;
		background-color: #ECC9C9;
		padding: 25px;
		display: block;
		width: 100%;
		border: yellow;
		border-radius: 10px;
		font-size: 20px;
		font-weight: bolder;
		text-align: center;
	}
	a {
		text-decoration: none !important;
		cursor:pointer;  
	}
</style>