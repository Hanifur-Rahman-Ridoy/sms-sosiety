<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from powerbi-admin-template.multipurposethemes.com/bs5/main-dark/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 11:47:20 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="icon" href="images/favicon.png">


	<title>SMS Admin Panel</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/css/vendors_css.css">
	<link rel="stylesheet" href="assets/vendor_components//bootstrap/dist/css/bootstrap.css">


	<!-- Style-->
	<link rel="stylesheet" href="assets/css/skin_color.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
		.hr-p1:hover {

			border: 3px solid black;
		}

		.hr {
			display: block;
		}
	</style>

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

	<div class="wrapper">
		<!-- <div id="loader"></div> -->

		<!-- -------------------top Header start------------------------>
		<?php
		include "includes/top_header.php"
		?>
		<!-- -------------------top Header End------------------------>

		<!-- -------------------Sidebar End------------------------>
		<?php
		include "includes/sidebar.php"
		?>
		<!-- -------------------Sidebar End------------------------>




		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container">
				<!-- Main content Start -->



				<?php

				if (isset($pages)) {
					if ($pages == 'web_home') {
						include 'pages/web_home_page.php';
					} elseif ($pages == 'web_contact') {
						include 'pages/web_contact_page.php';
					} elseif ($pages == 'web_about') {
						include 'pages/web_about_page.php';
					} elseif ($pages == 'web_events') {
						include 'pages/web_events_page.php';
					} elseif ($pages == 'web_gallery') {
						include 'pages/web_gallery_page.php';
					} elseif ($pages == 'web_ourteam') {
						include 'pages/web_ourteam_page.php';
					} elseif ($pages == 'contact') {
						include 'pages/contact_page.php';
					} elseif ($pages == "data_bank") {
						include "pages/data_bank_page.php";
					} elseif ($pages == "user_profile") {
						include "pages/user_profile_page.php";
					} elseif ($pages == "print") {
						include "pages/print_page.php";
					} elseif ($pages == "add_member") {
						include "pages/add_member_page.php";
					} elseif ($pages == "add_fee") {
						include "pages/add_fee_page.php";
					} elseif ($pages == "transaction_report") {
						include "pages/transaction_report_page.php";
					} elseif ($pages == "add_donation") {
						include "pages/add_donation_page.php";
					} elseif ($pages == "month_report") {
						include "pages/month_report_page.php";
					} elseif ($pages == "expense") {
						include "pages/expense_page.php";
					} elseif ($pages == "donation_report") {
						include "pages/donation_report_page.php";
					} elseif ($pages == "expense_report") {
						include "pages/expense_report_page.php";
					} elseif ($pages == "admin_user") {
						include "pages/admin_user_page.php";
					} elseif ($pages == "all_members") {
						include "pages/all_members_page.php";
					} elseif ($pages == "web_gallery_edit") {
						include "pages/web_gallery_edit_page.php";
					}
				} else {
					include 'pages/home_content_page.php';
				}

				?>







				<!-- Main content End -->
			</div>
		</div>
		<!-- /.content-wrapper -->

		<!-- -------------jabascript start--------------- -->


		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
	</div>


	<!-- -------------javascript start--------------- -->
	<!-- -------------Footer start--------------- -->
	<?php include "includes/footer.php" ?>

	<!-- -------------Footer End--------------- -->

	<!-- Control Sidebar Start -->

	<?php include "includes/control_sidebar.php" ?>

	<!-- Control Sidebar End -->



	<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
	<!-- <div class="control-sidebar-bg"></div> -->

	</div>
	<!-- ./wrapper -->

	<!-- ./side demo panel -->


	<!-- ------------------chat box- For the Future------------------ -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- Page Content overlay -->


	<!-- Vendor JS -->
	<script src="assets/js/vendors.min.js"></script>
	<!-- <script src="assets/js/pages/chat-popup.js"></script> -->
	<script src="assets/icons/feather-icons/feather.min.js"></script>

	<script src="assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="assets/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js"></script>

	<!-- Power BI Admin App -->

	<script src="assets/js/custom_menu.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="assets/js/pages/dashboard4.js"></script>

	<script src="assets/vendor_components/gallery/js/animated-masonry-gallery.js"></script>
	<script src="assets/vendor_components/gallery/js/jquery.isotope.min.js"></script>
	<script src="assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
	<script src="assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
	<script src="assets/js/pages/gallery.js"></script>

	<script src="assets/vendor_components/datatable/datatables.min.js"></script>
	<script src="assets/js/pages/data-table.js"></script>

	<script src="assets/js/pages/invoice.js"></script>
	<iframe style="border:0;position:absolute;width:0px;height:0px;right:0px;top:0px;" id="printArea_1" src="#1655443148027"></iframe>

	<script src="assets/js//pages//validation.js"></script>
	<script src="assets/js/pages/form-validation.js"></script>


	<script src="assets/vendor_components/sweetalert/sweetalert.min.js"></script>
	<script src="assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>

	<script src="assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
	<script src="assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
	<script src="assets/vendor_components/select2/dist/js/select2.full.js"></script>
	<script src="assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
	<script src="assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<script src="assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<script src="assets/vendor_plugins/iCheck/icheck.min.js"></script>

	<script src="assets/js/pages/advanced-form-element.js"></script>

	<script src="assets/vendor_components/moment/src/moment2.js"></script>
	<script src="assets/vendor_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js"></script>
	<script src="assets/js/pages/form-x-editable.js"></script>

	<script src="assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js"></script>

	<script src="assets/js/pages/list.js"></script>

	<script src="assets/vendor_components/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/pages/calendar.js"></script>

	<script src="assets/vendor_plugins/bootstrap-slider/bootstrap-slider.js"></script>
	<script src="assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
	<script src="assets/vendor_components/flexslider/jquery.flexslider.js"></script>
	<script src="assets/js/pages/slider.js"></script>

	<script src="assets/js/pages/custom-scroll.js"></script>









</body>

<!-- Mirrored from powerbi-admin-template.multipurposethemes.com/bs5/main-dark/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 11:48:37 GMT -->

</html>