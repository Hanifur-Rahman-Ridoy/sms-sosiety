<?php
require 'function_defination.php';

$query_result = show_about_status_part_one_data();
$part_one_data = mysqli_fetch_assoc($query_result);
// -----------------------------------------------------
$query_result_two = show_about_status_part_two_data();
$part_two_data = mysqli_fetch_assoc($query_result_two);
// -----------------------------------------------------
$query_result_three = show_about_status_part_three_data();
$part_three_data = mysqli_fetch_assoc($query_result_three);
// ----------------------------------------------------------------
$query_result = show_all_faq_rules();



if (isset($_POST['btn_save'])) {

    $update_message = about_status_part_one_update($_POST);
}

if (isset($_POST['btn_save_part_one'])) {

    $update_message = about_status_part_two_update($_POST);
}

if (isset($_POST['btn_save_part_two'])) {

    $update_message = about_status_part_three_update($_POST);
}

if (isset($_POST['btn_add_new'])) {

    $update_message = add_new_faq_rules($_POST);
}

if (isset($_GET['delet_status'])) {

    $update_message = detele_faq_rules($_GET);
}




?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '4') { ?>
<section class="content">
    <div class="row">



        <div class="col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <?php if (isset($update_message)) {
                            echo $update_message;
                            unset($update_message);
                        } else {
                            echo "About us";
                        } ?>
                    </h4>
                </div>
                <!-- /.box-header -->
                <form class="form" action="" method="post">
                    <div class="box-body">


                        <div class="form-group">
                            <label class="form-label">Short Title</label>
                            <input type="text" class="form-control" name="small_status" value="<?php echo $part_one_data['small_status'] ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Title part-1</label>
                                    <input type="text" class="form-control" name="title_part_one" value="<?php echo $part_one_data['title_part_one'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Title part-2</label>
                                    <input type="text" class="form-control" name="title_part_two" value="<?php echo $part_one_data['title_part_two'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Members Status</label>
                            <input type="text" class="form-control" name="members_status" value="<?php echo $part_one_data['members_status'] ?>">
                        </div>


                        <div class="form-group">
                            <label class="form-label">Description</label>

                            <textarea class="textarea" name="about_description" id="editor1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $part_one_data['about_description'] ?></textarea>
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





        <div class="col-12">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#pointOne" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $part_two_data['btn_name'] ?></a>
                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#pointTwo" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo $part_two_data['btn_name'] ?></a>

            </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="pointOne" role="tabpanel" aria-labelledby="nav-home-tab">

                    <!-- ----------First content start---------------->
                    <div class="col-lg-12 col-12">
                        <div class="box">

                            <!-- /.box-header -->
                            <form class="form" action="" method="post">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label class="form-label">Button Name</label>
                                        <input type="text" class="form-control" name="btn_name" value="<?php echo $part_two_data['btn_name'] ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Title part-1</label>
                                                <input type="text" class="form-control" name="title_part_one" value="<?php echo $part_two_data['title_part_one'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Title part-2</label>
                                                <input type="text" class="form-control" name="title_part_two" value="<?php echo $part_two_data['title_part_two'] ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea class="textarea" name="about_description" id="editor1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $part_two_data['about_description'] ?></textarea>
                                    </div>



                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <input type="submit" name="btn_save_part_one" class="btn btn-primary" value="Update">
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- ----------First content End--------------  -->








                </div>
                <div class="tab-pane fade" id="pointTwo" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <!-- ----------Second content start---------------->
                    <div class="col-lg-12 col-12">
                        <div class="box">

                            <!-- /.box-header -->
                            <form class="form" action="" method="post">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label class="form-label">Button Name</label>
                                        <input type="text" class="form-control" name="btn_name" value="<?php echo $part_three_data['btn_name'] ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Title part-1</label>
                                                <input type="text" class="form-control" name="title_part_one" value="<?php echo $part_three_data['title_part_one'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Title part-2</label>
                                                <input type="text" class="form-control" name="title_part_two" value="<?php echo $part_three_data['title_part_two'] ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea class="textarea" name="about_description" id="editor1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $part_three_data['about_description'] ?></textarea>
                                    </div>




                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">

                                    <input type="submit" name="btn_save_part_two" class="btn btn-primary" value="Update">
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- ----------Second content End--------------  -->
                </div>

            </div>

        </div>

        <!-- ---------------FAQ Rules-----FAQ Rules------------FAQ Rules-----------FAQ Rules----------FAQ   start-->
        <div class="col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <?php if (isset($update_message)) {
                            echo $update_message;
                            unset($update_message);
                        } else {
                            echo "FAQ";
                        } ?>
                    </h4>
                </div>
                <!-- /.box-header -->
                <form class="form" action="" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="faq_title">
                            <input type="hidden" class="form-control" name="random_text_code" value="<?php
                                                                                                        $givenLength = 8;
                                                                                                        $pData = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q');

                                                                                                        $password = '';
                                                                                                        for ($i = 1; $i < $givenLength; $i++) {
                                                                                                            $index = rand(0, 16);
                                                                                                            $password .= $pData[$index];
                                                                                                        }
                                                                                                        echo $password;
                                                                                                        ?>">

                        </div>
                        <div class="form-group">
                            <label class="form-label">Details</label>

                            <textarea class="textarea bg-dark" name="faq_details" id="editor1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        <input type="submit" name="btn_add_new" class="btn btn-primary" value="Add New">
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>



        <div class="col-12">


            <?php while ($show_faq = mysqli_fetch_assoc($query_result)) { ?>
                <div class="box">
                    <div class="box-body">
                        <div class="form-group">
                            <a href="?delet_status=delete&delete_value=<?php echo $show_faq['faq_id'] ?>"><i class="glyphicon glyphicon-trash pull-right text-danger"></i></a>
                            <h4 class="box-title media-body ps-15 bs-5 rounded border-warning"><?php echo $show_faq['faq_title'] ?></h4>
                            <div class="media-body ps-15 bs-5 rounded border-success">
                                <p><?php echo $show_faq['faq_details'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>





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