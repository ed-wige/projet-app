@extends('layouts.app')

@section('content')

<nav> <!-- navbar content here  --> </nav>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>AdminKit Demo - Web UI Kit &amp; Dashboard Template</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
            <!-- <a class="sidebar-link" href="pages-profile.html"> -->
          <!-- <span class="align-middle">AdminKit</span>
        </a> -->
      <center> <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        </svg>
      </center>
      <center><div class="badge badge-primary text-wrap" style="width: 6rem;">
         Admin
        </div>
      </center>
      <center><p  class="text-secondary"  width="7em">G-Stock</p>

                <ul class="sidebar-nav">
					
                    <!-- <i class="align-middle" data-feather="user"></i> <span class="align-middle">Admin</span> -->
                    <br> <br><br> 

                    <button type="button" class="btn btn-danger">Nouvel      Arrivage</button> <br><br>
                    <button type="button" class="btn btn-success">Liste des produits</button><br><br>
                    <button type="button" class="btn btn-secondary">vendre un produit</button><br><br>
                <button type="button" class="btn btn-primary"> accueil</button><br><br>
                </ul>

                </center>





               

					
					
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
						</ul>
					</li>
<!-- 
					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a href="#forms" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
            </a> -->
						<!-- <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Form Layouts</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Basic Inputs</a></li>
						</ul>
					</li> -->

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="tables-bootstrap.html">
              <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
            </a>
					</li> -->

					<!-- <li class="sidebar-header">
						Plugins & Addons
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
					</li> -->

					 <!-- <li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li>
				</ul>  -->

				  <!-- <div class="sidebar-cta">
						
					
				</div> -->
			</div>
        </nav> 
        <!-- <img src="public/img/photo/im.jpg" class="img-fluid" alt="Responsive image"> -->

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				


				<div class="navbar-collapse collapse">
					
							 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								
                                <div> <img src="public/img/photo/im.jpg" alt=""></div>

								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											
										</div>
									</a> 
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											
										</div>
									
						</li>
					</ul>
				</div>
            </nav>

			<!-- <main class="content"> -->


				<div class="container-fluid p-0">
                <img src="im.jpg" class="img-fluid"  width="100%"alt="Responsive image">
<br><br>
                <div class="card-deck">
  <div class="card">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body bg-danger text-white">
      <h2 class="card-title">Nouvel Arrivage</h2>
      <center><svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
</svg></center>
      <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
  <div class="card">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body bg-success text-white">
      <h5 class="card-title">Liste des produits</h5>
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>     
 <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
  <div class="card">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body bg-secondary text-white">
      <h5 class="card-title">Vendre un produit</h5>
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>      
<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
<!-- </div> -->

					<!-- <div class="row mb-2 mb-xl-3"> -->
						
						<!-- </div>  -->
					<!-- </div> -->
					<!-- <div class="row"> -->
						<!-- <div class="col-xl-6 col-xxl-5 d-flex"> -->
							<!-- <div class="w-100"> -->
								 <!-- <div class="row"> -->
									<!-- <div class="col-sm-6"> -->
										
										
									
										<!-- <div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Orders</h5>
												<h1 class="display-5 mt-1 mb-3">64</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div> -->
									<!-- </div> -->
								<!-- </div> -->
							<!-- </div>
						</div> -->

						

	<!-- <script src="js/vendor.js"></script>
	<script src="js/app.js"></script> -->

	<!-- <script>
		// 
	</script>
	<script>
		$(function() {
			
	</script>
	<script>
		$(function() {
			// 
	</script>
	<script>
		$(function() {
			$("#world_map").vectorMap({
				map: "world_mill",
				normalizeFunction: "polynomial",
				hoverOpacity: .7,
				hoverColor: false,
				regionStyle: {
					initial: {
						fill: "#e3eaef"
					}
				},
				markerStyle: {
					initial: {
						"r": 9,
						"fill": window.theme.primary,
						"fill-opacity": .95,
						"stroke": "#fff",
						"stroke-width": 7,
						"stroke-opacity": .4
					},
					hover: {
						"stroke": "#fff",
						"fill-opacity": 1,
						"stroke-width": 1.5
					}
				},
			// 
			setTimeout(function() {
				$(window).trigger('resize');
			}, 250)
		});
	</script> -->
	<!-- <script>
		$(function() {
			$('#datetimepicker-dashboard').datetimepicker({
				inline: true,
				sideBySide: false,
				format: 'L'
			});
		});
	</script> -->

</body>

</html>
  @endsection