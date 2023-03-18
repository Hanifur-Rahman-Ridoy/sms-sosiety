<?php
require 'function_defination.php';


$query_show_result = view_web_contact_data();
$contact_data = mysqli_fetch_assoc($query_show_result);

if (isset($_POST['btn_save_status'])) {
    // echo "<pre>";
    // print_r($_POST);
    $update_message = update_page_status($_POST);
}

if (isset($_POST['btn_save'])) {

    $update_message = update_page_info($_POST);
}



?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '4') { ?>
    <section class="content">
        <div class="row">




            <div class="col-lg-6 col-12">
                <form class="form" action="" method="post">
                    <div class="box">

                        <div class="box-header with-border">

                            <h4 class="box-title">
                                <?php
                                if (isset($update_message)) {
                                    echo $update_message;
                                    unset($update_message);
                                } else {
                                    echo "Page Status";
                                } ?>

                            </h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Small Status</label>
                                        <input type="text" class="form-control" name="page_small_status" value="<?php echo $contact_data['page_small_status'] ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Big Title part-1</label>
                                        <input type="text" class="form-control" name="page_big_status_partOne" value="<?php echo $contact_data['page_big_status_partOne'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Big Title part-2</label>
                                        <input type="text" class="form-control" name="page_big_status_partTwo" value="<?php echo $contact_data['page_big_status_partTwo'] ?>">
                                    </div>
                                </div>
                                <div class="box-footer">

                                    <input type="submit" name="btn_save_status" class="btn btn-primary" value="Update">

                                </div>
                            </div>


                        </div>
                </form>

                <!-- Slider start----------Slider start--------Slider start------------Slider start------------slider -->
                <form class="form" action="" method="post">
                    <div class="box-body">
                        <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>Location</h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="location_title" value="<?php echo $contact_data['location_title'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" name="location_address" value="<?php echo $contact_data['location_address'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Map Link</label>
                                <input class="form-control" type="url" name="location_map_link" value="<?php echo $contact_data['location_map_link'] ?>">
                            </div>

                        </div>



                        <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i>Email</h4>
                        <hr class="my-15">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="mail_title" value="<?php echo $contact_data['mail_title'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mail Address</label>
                                    <input type="mail" class="form-control" name="mail_address" value="<?php echo $contact_data['mail_address'] ?>">
                                </div>
                            </div>
                        </div>

                        <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i>Phone</h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="phone_title" value="<?php echo $contact_data['phone_title'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Number</label>
                                        <input type="number" class="form-control" name="phone_number" value="<?php echo $contact_data['phone_number'] ?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr class="my-15">
                        <h4 class="box-title text-info mb-0"><i class="ti-link me-15 text-warning"></i>Pages Link</h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Facebook Link</label>
                                    <input type="url" class="form-control" name="facebook_link" value="<?php echo $contact_data['facebook_link'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Instagram Link</label>
                                    <input type="url" class="form-control" name="instagram_link" value="<?php echo $contact_data['instagram_link'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Twitter Link</label>
                                <input class="form-control" type="url" name="twitter_link" value="<?php echo $contact_data['twitter_link'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Youtube Link</label>
                                <input class="form-control" type="url" name="youtube_link" value="<?php echo $contact_data['youtube_link'] ?>">
                            </div>


                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        <input type="submit" name="btn_save" class="btn btn-primary" value="Update">

                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>

        <!-- Part-2 start----------Part-2 start--------Part-2 start------------Part-2 start------------Part-2 -->



        <!-- Part-3 start----------Part-3 start--------Part-3 start------------Part-3 start------------Part-3 -->








        </div>
    </section>
<?php } else { ?>
    <section class="container">
        <div class="row">
            <h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
        </div>
    </section>
<?php } ?>









<!-- ---------------model part-2------------ -->

<div class="modal fade none-border" id="add-new-events">
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
                            <label class="form-label">Image Title</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Position <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>--- Select ONE ---</option>
                                    <option value="flaticon-dish">Dish</option>
                                    <option value="flaticon-24-hours-support">24 Hours Support</option>
                                    <option value="flaticon-email">Email</option>
                                    <option value="flaticon-computer">Computer</option>
                                    <option value="flaticon-crowdfunding-1">Crowdfunding-1</option>
                                    <option value="flaticon-heart-1">Heart-1</option>
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
                </form>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-info save-category" data-bs-dismiss="modal">Update</a>
                <a type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
<!-- ---------------model part-3 start------------ -->