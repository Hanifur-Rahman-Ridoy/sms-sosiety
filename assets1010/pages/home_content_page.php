<?php
require 'function_defination.php';
// -------row Count---------
$total_members = total_member_count();
$total_donor = total_donor_count();
$total_admins = total_admins_count();

//---------money Count-----

$total_amount = show_total_amount();
$total_amount_output = mysqli_fetch_assoc($total_amount);

$this_mounth_fee = this_mounth_fee();
$this_mounth_donation = this_mounth_donation();
$this_mounth_expences = this_mounth_expences();

//---------Aditional Information-----
$total_done_project = total_done_project();
$total_done_project_this_month = total_done_project_this_month();
$total_image = total_image();




?>
<?php if ($_SESSION['access_level'] == '1') { ?>
	<section class="content">
		<div class="row">
			<div class="col-xl-4">
				<a href="data_bank.php" class="box">
					<div class="box-body">
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<div class="text-dark fw-700 h2 mb-2 mt-5"><?php echo $total_members; ?></div>
								<div class="fs-16">Total Members</div>
							</div>
							<div class="bg-danger-light rounded-circle h-80 w-80 text-center l-h-100">
								<span class="text-danger fs-40 icon-User"><span class="path1"></span><span class="path2"></span></span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-4">
				<a href="#" class="box">
					<div class="box-body">
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<div class="text-dark fw-700 h2 mb-2 mt-5"><?php echo $total_donor; ?></div>
								<div class="fs-16">Total Donor</div>
							</div>
							<div class="bg-warning-light rounded-circle h-80 w-80 text-center l-h-100">
								<span class="text-warning fs-40 icon-Binocular"></span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-4">
				<a href="admin_user.php" class="box">
					<div class="box-body">
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<div class="text-dark fw-700 h2 mb-2 mt-5"><?php echo $total_admins; ?></div>
								<div class="fs-16">Total Admins</div>
							</div>
							<div class="bg-success-light rounded-circle h-80 w-80 text-center l-h-100">
								<span class="text-danger fs-40 icon-Settings"><span class="path1"></span><span class="path2"></span></span>
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="col-xl-4 col-12">
				<h2 class="my-20 text-dark">Current Balance</h2>
				<div class="box overflow-h">
					<div class="box-body pb-0">
						<h4>Current Amount</h4>
						<h2 class="text-dark mt-30 fw-700"><?php echo $total_amount_output['current_amount']; ?> TK
							<!-- <small class="text-success">25% -->
							</small>
						</h2>
						<div id="statisticschart5"></div>
					</div>
				</div>
				<div class="box overflow-h">
					<div class="box-body pb-0">
						<h4>Total Expense</h4>
						<h2 class="text-dark mt-30 fw-700"><?php echo $total_amount_output['total_expencess']; ?> TK
							<!-- <small class="text-danger">11% -->
							<!-- <span class="badge badge-pill badge-danger-light"><i class="fa fa-angle-down text-danger"></i></span></small> -->
						</h2>
						<div id="statisticschart6"></div>
					</div>
				</div>
			</div>

			<div class="col-xl-8 col-12">
				<h2 class="my-20 text-dark">Earning Summary</h2>
				<div class="box">
					<div class="box-body p-0">
						<div class="row">
							<div class="col-lg-6 col-12">
								<div class="box no-shadow mb-0">
									<div class="box-body">
										<div class="d-flex justify-content-start align-items-center">
											<div>
												<div id="chart41"></div>
											</div>
											<div>
												<h4>Total Fee</h4>
												<h3 class="text-dark my-0 fw-500"><?php echo $total_amount_output['total_fee']; ?> TK</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="box no-shadow mb-0">
									<div class="box-body">
										<div class="d-flex justify-content-start align-items-center">
											<div>
												<div id="chart42"></div>
											</div>
											<div>
												<h4>Total Donation</h4>
												<h3 class="text-dark my-0 fw-500"><?php echo $total_amount_output['total_donation']; ?> TK</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="charts_widget_43_chart"></div>
						<div class="bg-primary p-30 rounded mt-30">
							<div class="d-lg-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
										<span class="icon-Money fs-18 text-success"><span class="path1"></span><span class="path2"></span></span>
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-white hover-success fs-16"><?php echo $this_mounth_fee; ?> TK</a>
										<span class="text-white-50">Fee This Month</span>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
										<span class="icon-Money fs-18 text-warning"><span class="path1"></span><span class="path2"></span></span>
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-white hover-danger fs-16"><?php echo $this_mounth_donation; ?> TK</a>
										<span class="text-white-50">Donation This Month</span>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
										<span class="icon-Money fs-18 text-primary"><span class="path1"></span><span class="path2"></span></span>
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-white hover-success fs-16"><?php echo $this_mounth_expences; ?> TK</a>
										<span class="text-white-50">Expense This Month</span>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
										<span class="icon-Attachment1 fs-18 text-info"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-white hover-info fs-16"><?php echo $total_amount_output['total_amount']; ?> TK</a>
										<span class="text-white-50">Total Amount</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6 col-md-3 col-xl-3">
				<a class="box box-link-pop text-center" href="javascript:void(0)">
					<div class="box-body">
						<p class="fs-40 text-info">
							<strong><?php echo $total_done_project; ?></strong>
						</p>
					</div>
					<div class="box-body py-25 bg-info-light btsr-0 bter-0">
						<p class="fw-600">
							<span class="icon-Air-ballon me-5 text-danger"><span class="path1"></span><span class="path2"></span></span>Total Done Project
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-3 col-xl-3">
				<a class="box box-link-pop text-center" href="javascript:void(0)">
					<div class="box-body">
						<p class="fs-40 text-danger">
							<strong><?php echo $total_done_project_this_month; ?></strong>
						</p>
					</div>
					<div class="box-body py-25 bg-danger-light btsr-0 bter-0">
						<p class="fw-600">
							<span class="icon-221 me-5 text-danger"><span class="path1"></span><span class="path2"></span></span>This Month Project
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-3 col-xl-3">
				<a class="box box-link-pop text-center" href="javascript:void(0)">
					<div class="box-body">
						<p class="fs-40 text-info">
							<strong><?php echo $total_image; ?></strong>
						</p>
					</div>
					<div class="box-body py-25 bg-info-light btsr-0 bter-0">
						<p class="fw-600">
							<span class="icon-Image me-5 text-info"><span class="path1"></span><span class="path2"></span></span>Total Images
						</p>
					</div>
				</a>
			</div>



		</div>
	</section>
<?php } else { ?>
	<section class="container">
		<div class="row">
			<h1>welcome To <span class="text-success">SMS</span> Admin</h1>
		</div>
	</section>
<?php } ?>