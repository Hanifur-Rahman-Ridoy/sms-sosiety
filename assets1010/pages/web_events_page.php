<?php
require 'function_defination.php';

$query_show_result = view_web_event_data();


if (isset($_POST['btn_save'])) {

    $save_message = save_new_event_info($_POST);
}

if (isset($_GET['delet_status'])) {

    $delete_message = delete_event_info($_GET);
}



?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '4') { ?>
    <section class="content">
        <div class="row">


            <div class="col-lg-12 col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title"> <?php
                                                if (isset($save_message)) {
                                                    echo $save_message;
                                                    unset($save_message);
                                                } elseif (isset($delete_message)) {
                                                    echo $delete_message;
                                                    unset($delete_message);
                                                } else {
                                                    echo "Add New Event";
                                                } ?></h4>
                    </div>
                    <!-- /.box-header -->
                    <form class="form" action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Short Title</label>
                                        <input type="text" class="form-control" name="short_title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Main Title</label>
                                        <input type="text" class="form-control" name="main_title">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Select Image</label>
                                <label class="file">
                                    <input type="file" name="event_image">
                                </label>
                                <label class="form-label mt-2">Size : 3000*2000</label>
                            </div>





                            <div class="form-group">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control" name="event_location">
                            </div>


                            <div class="form-group">
                                <label class="form-label">event description</label>
                                <!-- <textarea rows="5" class="form-control" name="event_description"></textarea> -->
                                <textarea class="textarea" name="event_description" id="editor1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                            <input type="submit" name="btn_save" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>


            <?php while ($events_info = mysqli_fetch_assoc($query_show_result)) { ?>

                <div class="col-12">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border ">
                            <h4 class="box-title pull-left"><?php echo $events_info['short_title']; ?></h4>
                            <a href="?delet_status=delete&delete_value=<?php echo $events_info['event_id']; ?>"><i class="glyphicon glyphicon-trash pull-right text-danger"></i></a>
                        </div>
                        <div class="box-body">
                            <div id="slimtest4">
                                <div class="row">
                                    <div class="col-md-5"><img src="<?php echo $events_info['event_image']; ?>" class="img-responsive" alt="" /></div>
                                    <div class="col-md-7">
                                        <h3><?php echo $events_info['main_title']; ?></h5>
                                            <h5 class="text-warning"><i class="glyphicon glyphicon-map-marker text-info"> </i> <?php echo $events_info['event_location']; ?></h5>

                                            <p><?php echo $events_info['event_description']; ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php } ?>





        </div>
    </section>
<?php } else { ?>
    <section class="container">
        <div class="row">
            <h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
        </div>
    </section>
<?php } ?>