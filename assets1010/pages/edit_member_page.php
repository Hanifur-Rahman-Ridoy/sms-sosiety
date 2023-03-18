<?php
require 'function_defination.php';
$membersID = $_GET['memberId'];

if (isset($_GET['memberId'])) {
    $row_details = show_member_info($_GET);
    $member_info = mysqli_fetch_assoc($row_details);
}


$query_result = select_all_position_info();



if (isset($_POST['btn_update'])) {

    members_info_update($_POST);
}





?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '3') { ?>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title text-success">Update Members Information
                    </div>
                    <!-- /.box-header -->
                    <form class="form" name="edit_member_info_form" action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                            <hr class="my-15">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Members Name <span class="text-danger">*</span></label>
                                        <input type="text" name="member_name" value="<?php echo $member_info['member_name']; ?>" class="form-control" placeholder="type here">
                                        <input type="hidden" name="members_id" value="<?php echo $member_info['members_id']; ?>" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Fathers Name <span class="text-danger">*</span></label>
                                        <input type="text" value="<?php echo $member_info['father_name']; ?>" name="father_name" class="form-control" placeholder="type here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mothers Name <span class="text-danger">*</span></label>
                                        <input type="text" value="<?php echo $member_info['mother_name']; ?>" name="mother_name" class="form-control" placeholder="type here">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" value="<?php echo $member_info['member_email']; ?>" name="member_email" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                        <input type="number" value="<?php echo $member_info['member_phone']; ?>" name="member_phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gender <span class="text-danger">*</span></label>
                                    <div class="c-inputs-stacked">
                                        <input name="member_gender" type="radio" id="radio_123" value="Male">
                                        <label for="radio_123" class="me-30">Male</label>
                                        <input name="member_gender" type="radio" id="radio_456" value="Female">
                                        <label for="radio_456" class="me-30">Female</label>

                                    </div>
                                </div>
                            </div>
                            <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Requirements</h4>
                            <hr class="my-15">

                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" name="member_address" value="<?php echo $member_info['member_address']; ?>" class="form-control" placeholder="Current Address">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Position <span class="text-danger">*</span></label>
                                        <select class="form-select" name="member_position">
                                            <option>--- Select ONE ---</option>
                                            <?php while ($position_info = mysqli_fetch_assoc($query_result)) { ?>
                                                <option value="<?php echo $position_info['position_name']; ?>"><?php echo $position_info['position_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Select File</label>
                                    <label class="file">
                                        <input type="file" name="member_image" id="file">
                                    </label>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Social Sites :</label>
                                        <div class="c-inputs-stacked">
                                            <input type="checkbox" id="checkbox_123">
                                            <label for="checkbox_123" class="me-30">Facebook</label>
                                            <div class="form-group">

                                                <input class="form-control" value="<?php echo $member_info['facebook_link']; ?>" name="facebook_link" type="url" placeholder="http://facebooklink">
                                            </div>
                                            <input type="checkbox" id="checkbox_234">
                                            <label for="checkbox_234" class="me-30">Twitter</label>
                                            <div class="form-group">

                                                <input class="form-control" value="<?php echo $member_info['twitter_link']; ?>" name="twitter_link" type="url" placeholder="http://facebooklink">
                                            </div>
                                            <input type="checkbox" id="checkbox_345">
                                            <label for="checkbox_345" class="me-30">Instagram</label>
                                            <div class="form-group">

                                                <input class="form-control" value="<?php echo $member_info['instagram_link']; ?>" name="instagram_link" type="url" placeholder="http://facebooklink">


                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">


                            <input type="submit" class="btn btn-primary" name="btn_update" value="Update">
                            <!-- <i class="ti-save-alt"></i> -->

                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>


        </div>

        <!-- /.row -->

    </section>
<?php } else { ?>
    <section class="container">
        <div class="row">
            <h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
        </div>
    </section>
<?php } ?>

<script>
    document.forms['edit_member_info_form'].elements['member_position'].value = '<?php echo $member_info['member_position']; ?>';
    document.forms['edit_member_info_form'].elements['member_gender'].value = '<?php echo $member_info['member_gender']; ?>';
</script>