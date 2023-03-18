<?php
require 'function_defination.php';



// -------------Home Slider--------------
$query_result_one = show_slider_data();
$slider_info = mysqli_fetch_assoc($query_result_one);

$query_result_two = show_slider_data_slider_two();
$slider_info_slider_two = mysqli_fetch_assoc($query_result_two);

$query_result_three = show_slider_data_slider_three();
$slider_info_slider_three = mysqli_fetch_assoc($query_result_three);
//--------Part Two status Show------------
$query_result_four = show_home_status_part_two();
$status_part_two = mysqli_fetch_assoc($query_result_four);
$query_result_part_two_data = show_home_part_two_data();
//--------Part Two status Show------------
$query_result_five = show_home_status_part_three();
$status_part_three = mysqli_fetch_assoc($query_result_five);
$query_result_view_title = view_event_title_name();
//--------Part three status Show------------
$query_home_event_view = show_home_event();
//--------Part Four status Show------------
$query_result_six = show_home_statuspart_four();
$status_part_four = mysqli_fetch_assoc($query_result_six);
//--------Part Five status Show------------
$part_five_all_data = show_home_part_five_data_two();
$home_part_five_data = mysqli_fetch_assoc($part_five_all_data);
//--------Part 888888 status Show------------
$query_result_eight = show_home_status_part_eight();
$status_part_eight = mysqli_fetch_assoc($query_result_eight);

$review_query = show_home_review_data();
//--------Part 99999999999 status Show------------
$sponsor_query = show_sponsor_data();












if (isset($_POST['btn_save_slider_one'])) {

	$update_message = home_slider_update($_POST);
}

if (isset($_POST['btn_save_slider_two'])) {

	$update_message = home_slider_update_slider_two($_POST);
}

if (isset($_POST['btn_save_slider_three'])) {

	$update_message = home_slider_update_slider_three($_POST);
}

// -------------Home Slider--------------

if (isset($_POST['btn_update_part_two'])) {

	$update_message = home_status($_POST);
}

if (isset($_POST['btn_save_part_two_data'])) {

	$update_message = home_part_two_data_save($_POST);
}
if (isset($_GET['part_two_delete'])) {

	$update_message = delete_home_part_two($_GET);
}
// ------------------Part 33333333-----------------

if (isset($_POST['btn_part_3_update'])) {

	$update_message = update_home_status_part_3($_POST);
}
if (isset($_POST['btn_add_popular_event'])) {

	$update_message = add_new_event_by_id($_POST);
}
if (isset($_GET['event_delete'])) {

	$update_message = delete_home_event($_GET);
}

// ----------------Part-4444444444----------------

if (isset($_POST['btn_part_fout_home_status'])) {

	$update_message = part_four_data_update($_POST);
}

// ----------------Part-55555----------------

if (isset($_POST['btn_part_five_update'])) {

	$update_message = home_part_five_update($_POST);
}
// ----------------Part-88888----------------

if (isset($_POST['btn_part_8_status'])) {

	$update_message = home_part_eight_update($_POST);
}

if (isset($_POST['save_new_review'])) {

	$update_message = save_new_review($_POST);
}
if (isset($_GET['btn_status'])) {

	$update_message = delete_home_review($_GET);
}
// ----------------Part-99999----------------

if (isset($_POST['save_new_sponsor'])) {

	$update_message = save_new_sponsor($_POST);
}

if (isset($_GET['sponsor_delete'])) {

	$update_message = delete_new_sponsor($_GET);
}











?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '4') { ?>
	<section class="content">
		<div class="row">

			<div class="col-lg-6 col-12">


				<div class="box">
					<!-- Slider start----------Slider start--------Slider start------------Slider start------------slider -->
					<form class="form" action="" method="post" enctype="multipart/form-data">
						<div class="box-body">
							<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>
								<?php
								if (isset($update_message)) {
									echo "Successfull";
									unset($update_message);;
								} else {
									echo "Slider One";
								}
								?>

							</h4>
							<hr class="my-15">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-label">Small Status</label>
										<input type="text" class="form-control" name="small_status" value="<?php echo $slider_info['small_status']; ?>">
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Big Title part-1</label>
										<input type="text" class="form-control" name="big_title_one" value="<?php echo $slider_info['big_title_one']; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Big Title part-2</label>
										<input type="text" class="form-control" name="big_title_two" value="<?php echo $slider_info['big_title_two']; ?>">

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="bg-img h-50 w-100" style="background-image: url(<?php echo $slider_info['slider_image']; ?>)"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Select File</label>
										<label class="file">
											<input type="file" name="slider_image" id="file">
										</label>
										<label class="form-label mt-2">Size : 1920*880</label>

									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6">
									<input type="submit" name="btn_save_slider_one" class="btn btn-primary" value="Save">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="box">
					<!-- Slider start----------Slider start--------Slider start------------Slider start------------slider -->
					<form class="form" action="" method="post" enctype="multipart/form-data">
						<div class="box-body">
							<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>
								Slider Two
							</h4>
							<hr class="my-15">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-label">Small Status</label>
										<input type="text" class="form-control" name="small_status_slider_two" value="<?php echo $slider_info_slider_two['small_status']; ?>">
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Big Title part-1</label>
										<input type="text" class="form-control" name="big_title_one_slider_two" value="<?php echo $slider_info_slider_two['big_title_one']; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Big Title part-2</label>
										<input type="text" class="form-control" name="big_title_two_slider_two" value="<?php echo $slider_info_slider_two['big_title_two']; ?>">

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="bg-img h-50 w-100" style="background-image: url(<?php echo $slider_info_slider_two['slider_image']; ?>)"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Select File</label>
										<label class="file">
											<input type="file" name="slider_image_slider_two" id="file">
										</label>
										<label class="form-label mt-2">Size : 1920*880</label>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6">
									<input type="submit" name="btn_save_slider_two" class="btn btn-primary" value="Save">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="box">
					<!-- Slider start----------Slider start--------Slider start------------Slider start------------slider -->
					<form class="form" action="" method="post" enctype="multipart/form-data">
						<div class="box-body">
							<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>
								Slider Three
							</h4>
							<hr class="my-15">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-label">Small Status</label>
										<input type="text" class="form-control" name="small_status_slider_three" value="<?php echo $slider_info_slider_three['small_status']; ?>">
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Big Title part-1</label>
										<input type="text" class="form-control" name="big_title_one_slider_three" value="<?php echo $slider_info_slider_three['big_title_one']; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Big Title part-2</label>
										<input type="text" class="form-control" name="big_title_two_slider_three" value="<?php echo $slider_info_slider_three['big_title_two']; ?>">

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="bg-img h-50 w-100" style="background-image: url(<?php echo $slider_info_slider_three['slider_image']; ?>)"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Select File</label>
										<label class="file">
											<input type="file" name="slider_image_slider_three" id="file">
										</label>
										<label class="form-label mt-2">Size : 1920*880</label>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6">
									<input type="submit" name="btn_save_slider_three" class="btn btn-primary" value="Save">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Part-2 start--------Features Categories------Features Categories---------Part-2 -->
		<!-- Part-2 start--------Features Categories------Features Categories---------Part-2 -->
		<!-- Part-2 start--------Features Categories------Features Categories---------Part-2 -->
		<!-- Part-2 start--------Features Categories------Features Categories---------Part-2 -->



		<hr class="bg-danger" style="height: 4px;">

		<div class="col-12 col-xl-6">
			<div class="box">
				<div class="box-header with-border">
					<form action="" method="post">
						<h4 class="box-title text-success"><?php echo $status_part_two['small_status']; ?></h4>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Small Status</label>
									<input type="text" class="form-control" value="<?php echo $status_part_two['small_status']; ?>" name="small_status">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-1</label>
									<input type="text" class="form-control" value="<?php echo $status_part_two['big_title_one']; ?>" name="big_title_one">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-2</label>
									<input type="text" class="form-control" value="<?php echo $status_part_two['big_title_two']; ?>" name="big_title_two">
								</div>
							</div>


							<div class="box-footer">

								<input type="submit" class="btn btn-primary" name="btn_update_part_two" value="Update">

							</div>
						</div>

					</form>
				</div>
				<a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#part_two">Add new</a>
				<div class="box-body">
					<div class="media-list media-list-divided">

						<!-- -----------Content Start--------- -->
						<?php while ($part_two_info = mysqli_fetch_assoc($query_result_part_two_data)) { ?>
							<div class="media media-single px-0">
								<span class="title fw-500 fs-16 text-warning"><?php echo $part_two_info['logo_name']; ?></span>
								<span class="title fw-500 fs-16"><?php echo $part_two_info['part_title']; ?></span>
								<a class="fs-18 text-gray hover-info" href="?part_two_delete=delete&id=<?php echo $part_two_info['part_id']; ?>"><i class="glyphicon glyphicon-trash text-danger"></i></a>
							</div>
						<?php } ?>
						<!-- -------------content End-------- -->


					</div>
				</div>
			</div>
		</div>

		<!-- ---------------model part-2------------ -->

		<div class="modal fade none-border" id="part_two">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><strong>Add</strong>Logo And Title</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form role="form" action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<label class="form-label">Image Title</label>
									<input type="text" class="form-control" name="part_title" placeholder="Title">
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Position <span class="text-danger">*</span></label>
										<select class="form-select" name="logo_name">
											<option>--- Select ONE ---</option>
											<option value="flaticon-dish">Food Dish</option>
											<option value="flaticon-24-hours-support">24 Hours Support</option>
											<option value="flaticon-email">Email</option>
											<option value="flaticon-computer">Computer</option>
											<option value="flaticon-crowdfunding-1">Crowdfunding</option>
											<option value="flaticon-heart-1">Heart</option>
											<option value="flaticon-high-performance">High Performance</option>
											<option value="flaticon-investment">Investment</option>
											<option value="flaticon-open-book">Open Book</option>
											<option value="flaticon-project-management">Project Management</option>
											<option value="flaticon-right-quote">Right Quote</option>
											<option value="flaticon-stethoscope">Stethoscope</option>
											<option value="flaticon-vector">Vector</option>

										</select>
									</div>

								</div>
							</div>
							<div class="modal-footer">

								<input type="submit" name="btn_save_part_two_data" value="Add" class="btn btn-info save-category">

							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
		<!-- Part-3 start-----Popular Project--------Part-3 -->
		<!-- Part-3 start-----Popular Project--------Part-3 -->
		<!-- Part-3 start-----Popular Project--------Part-3 -->
		<!-- Part-3 start-----Popular Project--------Part-3 -->
		<!-- Part-3 start-----Popular Project--------Part-3 -->
		<!-- Part-3 start-----Popular Project--------Part-3 -->
		<!-- Part-3 start-----Popular Project--------Part-3 -->


		<hr class="bg-danger" style="height: 4px;">

		<div class="col-12 col-xl-6">
			<div class="box">
				<div class="box-header with-border">
					<form action="" method="post">
						<h4 class="box-title text-success"><?php echo $status_part_three['small_status']; ?></h4>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Small Status</label>
									<input type="text" class="form-control" name="small_status" value="<?php echo $status_part_three['small_status']; ?>">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-1</label>
									<input type="text" class="form-control" name="big_title_one" value="<?php echo $status_part_three['big_title_one']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-2</label>
									<input type="text" class="form-control" name="big_title_two" value="<?php echo $status_part_three['big_title_two']; ?>">
								</div>
							</div>
							<div class="box-footer">

								<input type="submit" name="btn_part_3_update" class="btn btn-primary" value="Update">

							</div>
						</div>
					</form>

				</div>
				<a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#part_3_model">Add new +</a>
				<div class="box-body">
					<div class="media-list media-list-divided">

						<!-- -----------Content Start--------- -->
						<?php while ($home_event_view = mysqli_fetch_assoc($query_home_event_view)) { ?>
							<div class="media media-single px-0">
								<img class="w-80 rounded" src="<?php echo $home_event_view['event_image']; ?>" alt="...">
								<span class="title fw-500 fs-16"><?php echo $home_event_view['main_title']; ?></span>
								<a class="fs-18 text-gray hover-info" href="?event_delete=delete&event_id=<?php echo $home_event_view['row_id']; ?>"><i class="glyphicon glyphicon-trash text-danger"></i></a>
							</div>
						<?php } ?>


						<!-- -------------content End-------- -->


					</div>
				</div>
			</div>
		</div>

		<!-- ---------------------model        Part 333333------------- -->
		<div class="modal fade none-border" id="part_3_model">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><strong>Part 3</strong> a category</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form role="form" action="" method="post">
							<div class="row">


								<div class="form-group">

									<select class="form-control select2" style="width: 100%;" name="event_id">
										<?php while ($event_title_name_info = mysqli_fetch_assoc($query_result_view_title)) { ?>
											<option value="<?php echo $event_title_name_info['event_id']; ?>"><?php echo $event_title_name_info['main_title']; ?></option>

										<?php } ?>
									</select>
								</div>
								<!-- /.form-group -->


							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-info" name="btn_add_popular_event" value="Add">

							</div>
						</form>
					</div>

				</div>
			</div>
		</div>

		<!-- Part-4 start--------Donate Now----------Part-4 -->
		<!-- Part-4 start--------Donate Now----------Part-4 -->
		<!-- Part-4 start--------Donate Now----------Part-4 -->
		<!-- Part-4 start--------Donate Now----------Part-4 -->
		<!-- Part-4 start--------Donate Now----------Part-4 -->
		<!-- Part-4 start--------Donate Now----------Part-4 -->
		<!-- Part-4 start--------Donate Now----------Part-4 -->



		<hr class="bg-danger" style="height: 4px;">

		<div class="col-12 col-xl-6">
			<div class="box">
				<form action="" method="post">
					<div class="box-header with-border">
						<h4 class="box-title"><?php echo $status_part_four['small_status']; ?> | Part-4</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Small Status</label>
									<input type="text" class="form-control" name="small_status" value="<?php echo $status_part_four['small_status']; ?>">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-1</label>
									<input type="text" class="form-control" name="big_title_one" value="<?php echo $status_part_four['big_title_one']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-2</label>
									<input type="text" class="form-control" name="big_title_two" value="<?php echo $status_part_four['big_title_two']; ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="btn_part_fout_home_status" class="btn btn-primary" value="Update">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Part-5> start-----who we are-----------Part-5> -->
		<!-- Part-5> start-----who we are-----------Part-5> -->
		<!-- Part-5> start-----who we are-----------Part-5> -->
		<!-- Part-5> start-----who we are-----------Part-5> -->
		<!-- Part-5> start-----who we are-----------Part-5> -->
		<!-- Part-5> start-----who we are-----------Part-5> -->
		<!-- Part-5> start-----who we are-----------Part-5> -->
		<!-- Part-5> start-----who we are-----------Part-5> -->


		<hr class="bg-danger" style="height: 4px;">

		<div class="col-12 col-xl-6">
			<div class="box">
				<form action="" method="post">
					<div class="box-header with-border">
						<h4 class="box-title"><?php echo $home_part_five_data['status_small']; ?> | Part-5</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Small Status</label>
									<input type="text" class="form-control" name="status_small" value="<?php echo $home_part_five_data['status_small']; ?>">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-1</label>
									<input type="text" class="form-control" name="title_big_one" value="<?php echo $home_part_five_data['title_big_one']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-2</label>
									<input type="text" class="form-control" name="title_big_two" value="<?php echo $home_part_five_data['title_big_two']; ?>">
								</div>
							</div>


						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Members Status</label>
									<input type="text" class="form-control" name="members_title" value="<?php echo $home_part_five_data['members_title']; ?>">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Title-1</label>
									<input type="text" class="form-control" name="big_title_one" value="<?php echo $home_part_five_data['big_title_one']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Status-1</label>
									<input type="text" class="form-control" name="small_title_one" value="<?php echo $home_part_five_data['small_title_one']; ?>">
								</div>
							</div>


						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Title-2</label>
									<input type="text" class="form-control" name="big_title_two" value="<?php echo $home_part_five_data['big_title_two']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Status-2</label>
									<input type="text" class="form-control" name="small_title_two" value="<?php echo $home_part_five_data['small_title_two']; ?>">
								</div>
							</div>

							<div class="form-group">
								<input type="submit" name="btn_part_five_update" value="Update" class="btn btn-primary">
							</div>


						</div>
					</div>

				</form>
			</div>
		</div>



		<!-- Part-6 start-------Review Home status----------Part6 -->
		<!-- Part-6 start-------Review Home status----------Part6 -->
		<!-- Part-6 start-------Review Home status----------Part6 -->
		<!-- Part-6 start-------Review Home status----------Part6 -->
		<!-- Part-6 start-------Review Home status----------Part6 -->
		<!-- Part-6 start-------Review Home status----------Part6 -->
		<!-- Part-6 start-------Review Home status----------Part6 -->


		<hr class="bg-danger" style="height: 4px;">
		<div class="col-12 col-xl-6">
			<div class="box">
				<form action="" method="post">
					<div class="box-header with-border">
						<h4 class="box-title"><?php echo $status_part_eight['small_status']; ?> | Part 6</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Small Status</label>
									<input type="text" class="form-control" name="small_status" value="<?php echo $status_part_eight['small_status']; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-1</label>
									<input type="text" class="form-control" name="big_title_one" value="<?php echo $status_part_eight['big_title_one']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Big Title part-2</label>
									<input type="text" class="form-control" name="big_title_two" value="<?php echo $status_part_eight['big_title_two']; ?>">
								</div>
							</div>
							<div class="box-footer">

								<input type="submit" name="btn_part_8_status" value="Update" class="btn btn-primary">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="col-lg-6 col-12">
			<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Add New Review</h4>
				</div>
				<!-- /.box-header -->
				<form class="form" action="" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>Donner Review</h4>
						<hr class="my-15">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Name</label>
									<input type="text" class="form-control" name="rv_name" placeholder="First Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Position</label>
									<input type="text" class="form-control" name="rv_position" placeholder="Position">
								</div>
							</div>
						</div>



						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Select Image</label>
									<label class="file">
										<input type="file" id="file" name="rv_image">
									</label>
									<label class="form-label mt-2">Size : 120*120</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">size : 120*120</label>

								</div>
							</div>

						</div>

						<div class="form-group">
							<label class="form-label">Short Description</label>
							<textarea rows="5" class="form-control" name="rv_description" placeholder="Write description around 200 characters Maximum" maxlength="200"></textarea>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">

						<input type="submit" class="btn btn-primary" name="save_new_review" value="Add +">
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>

		<?php while ($review_data = mysqli_fetch_assoc($review_query)) { ?>

			<div class="col-md-6 col-12">
				<div class="media bg-white mb-20">
					<span class="avatar status-success">
						<img class="avatar" src="<?php echo $review_data['rv_image']; ?>" alt="...">
					</span>
					<div class="media-body">
						<p><strong><?php echo $review_data['rv_name']; ?></strong> <time class="float-end" datetime="2017-07-14 20:00"><?php echo $review_data['rv_position']; ?></time></p>
						<p><?php echo $review_data['rv_description']; ?></p>
						<div class="d-inline-block pull-left mt-10">
							<a type="button" class="btn btn-rounded btn-sm btn-success m-5"><?php echo $review_data['rv_rating'] . " Stars" ?></a>
							<a type="button" href="?btn_status=delete&id=<?php echo $review_data['review_id']; ?>" class="btn btn-rounded btn-sm btn-danger m-5">Delete</a>
						</div>
					</div>
				</div>
			</div>


		<?php } ?>


		<!-- Part-9 start---------Sponsor----------Part-9-->
		<!-- Part-9 start---------Sponsor----------Part-9-->
		<!-- Part-9 start---------Sponsor----------Part-9-->
		<!-- Part-9 start---------Sponsor----------Part-9-->
		<!-- Part-9 start---------Sponsor----------Part-9-->
		<!-- Part-9 start---------Sponsor----------Part-9-->
		<!-- Part-9 start---------Sponsor----------Part-9-->
		<!-- Part-9 start---------Sponsor----------Part-9-->
		<!-- Part-9 start---------Sponsor----------Part-9-->
		<hr class="bg-danger" style="height: 4px;">

		<div class="col-12 col-xl-6">
			<div class="box">
				<div class="box-header with-border">
					<form class="form" action="" method="post" enctype="multipart/form-data">
						<h4 class="box-title">Part-6 [Sponsor Logo]</h4>
						<div class="row">


						</div>
						<div class="row">

							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">URL/Link</label>
									<input type="url" class="form-control" name="sponsor_title">
								</div>
							</div>

							<div class="form-group">
								<label class="form-label">Select Image</label>
								<label class="file">
									<input type="file" id="file" name="sponsor_image">
								</label>
								<label class="form-label mt-2">Size : 210*60</label>
							</div>


							<div class="box-footer">

								<input type="submit" class="btn btn-primary" name="save_new_sponsor" value="Add +">
							</div>
						</div>

					</form>
				</div>
				<div class="box-body">
					<div class="media-list media-list-divided">

						<!-- -----------Content Start--------- -->

						<?php while ($sponsor_data = mysqli_fetch_assoc($sponsor_query)) { ?>
							<div class="media media-single px-0">
								<img class="w-150 h-50 rounded" src="<?php echo $sponsor_data['sponsor_image']; ?>" alt="...">
								<span class="title fw-500 fs-16"></span>
								<a class="fs-18 text-gray hover-info" href="?sponsor_delete=delete&sponsor_id=<?php echo $sponsor_data['sponsor_id']; ?>"><i class="glyphicon glyphicon-trash text-danger"></i></a>
							</div>
						<?php } ?>

						<!-- -------------content End-------- -->


					</div>
				</div>
			</div>
		</div>


































		</div>
	</section>
<?php } else { ?>
	<section class="container">
		<div class="row">
			<h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
		</div>
	</section>
<?php } ?>









<!-- ---------------model part-3 start------------ -->

<div class="modal fade none-border" id="add-new-events2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><strong>Add</strong> a category</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="row">
						<div class="col-md-6">
							<label class="form-label">Title</label>
							<input type="text" class="form-control" placeholder="First Name">
						</div>

						<div class="form-group mt-2">
							<label class="form-label">Select File</label>
							<label class="file">
								<input type="file" id="file">
							</label>
						</div>
						<div class="form-group">
							<label class="form-label">Small Status</label>
							<textarea rows="5" class="form-control" placeholder="About Project"></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btn-info save-category" data-bs-dismiss="modal">Update</a>
				<a type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</a>
			</div>
		</div>
	</div>
</div>



<!-- ================================================= -->

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
				<p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>
		</div>
	</div>
</div>