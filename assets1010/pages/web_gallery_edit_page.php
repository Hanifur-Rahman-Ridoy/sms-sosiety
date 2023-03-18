<?php
require 'function_defination.php';

$query_result = view_all_gallery_images();


if (isset($_POST['save_image_btn'])) {

    $save_message = save_gallery_image($_POST);
}

if (isset($_GET['deleteStatus'])) {
    $delete_message = delete_gallery_image($_GET);
}




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
        <div class="col-12 col-xl-6">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title"><?php if (isset($save_message)) {
                                                echo $save_message;
                                                unset($save_message);
                                            } elseif (isset($delete_message)) {
                                                echo $delete_message;
                                                unset($delete_message);
                                            } else {
                                                echo 'Customization Page';
                                            } ?></h4>
                    <div class="dropdown pull-right">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-image"><i class="glyphicon glyphicon-plus text-info"></i>New</a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="media-list media-list-divided">

                        <!-- -----------Content Start--------- -->
                        <?php while ($image_row = mysqli_fetch_assoc($query_result)) { ?>

                            <div class="media media-single px-0">
                                <img class="w-80 rounded" src="<?php echo $image_row['gallery_image']; ?>" alt="...">
                                <span class="title fw-500 fs-16"><?php echo $image_row['image_title']; ?></span>




                                <a class="fs-18 text-gray hover-info" href="?deleteStatus=delete&deleteId=<?php echo $image_row['image_id']; ?>"><i class="glyphicon glyphicon-trash text-danger"></i></a>

                            </div>

                        <?php } ?>

                        <!-- -------------content End-------- -->


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

<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-image">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> New Image</h4>
                <a type="submit" data-bs-dismiss="modal" aria-label="Close"><i class="btn-close"></i></a>
            </div>
            <div class="modal-body">
                <form role="form" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Image Title</label>
                            <input type="text" name="image_title" class="form-control mb-3" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Img</label>
                                <label class="file">
                                    <input type="file" name="gallery_image">
                                </label>
                                <label class="form-label mt-2">Size : 1360*895</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="button">
                            <input type="submit" name="save_image_btn" class="form-control btn btn-info save-category" value="Save">
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>