<?php
require 'function_defination.php';

$query_result = view_all_gallery_images();



?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '4') { ?>
<section class="content">
	<div id="gallery">
		<div class="box bg-transparent no-shadow b-0">
			<div class="box-body text-center p-0">
				<div class="btn-group">
					<a href="web_gallery.php" class="btn btn-info gallery-header-center-right-links-current">View Image</a>
					<a href="web_gallery_edit.php" class="btn btn-info">Update Image</a>
				</div>
			</div>
		</div>
		<!-- Default box -->
		<div class="box bg-transparent no-shadow b-0">
			<div class="box-body">
				<div id="gallery-content">
					<div id="gallery-content-center" class="zoom-gallery gallery-content-center-full isotope" style="position: relative; overflow: hidden; height: 3110.77px;">

						<?php while ($image_row = mysqli_fetch_assoc($query_result)) { ?>

							<a href="<?php echo $image_row['gallery_image']; ?>" data-gallery="multiimages" title="<?php echo $image_row['image_title']; ?>">
								<img src="<?php echo  $image_row['gallery_image']; ?>" alt="gallery" class="all studio isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
							</a>

						<?php } ?>


					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

</section>
<?php } else { ?>
    <section class="container">
        <div class="row">
            <h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
        </div>
    </section>
<?php } ?>