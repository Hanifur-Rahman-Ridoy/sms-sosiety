<?php
require 'function_defination.php';

if (isset($_POST['btn_save'])) {
    $save_message = save_new_members_info($_POST);
}




$query_result = select_all_position_info();

?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '3') { ?>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title text-success"><?php if (isset($save_message)) {
                                                                echo $save_message;
                                                                unset($save_message);
                                                            } ?></h4>
                    </div>
                    <!-- /.box-header -->
                    <form class="form" action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                            <hr class="my-15">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Members Name <span class="text-danger">*</span></label>
                                        <input type="text" name="member_name" class="form-control" placeholder="type here" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Fathers Name </label>
                                        <input type="text" name="father_name" class="form-control" placeholder="type here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mothers Name </label>
                                        <input type="text" name="mother_name" class="form-control" placeholder="type here">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" name="member_email" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                        <input type="number" name="member_phone" class="form-control" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gender <span class="text-danger">*</span></label>
                                    <div class="c-inputs-stacked">
                                        <input name="member_gender" type="radio" id="radio_123" value="Male" required>
                                        <label for="radio_123" class="me-30">Male</label>
                                        <input name="member_gender" type="radio" id="radio_456" value="Female" required>
                                        <label for="radio_456" class="me-30">Female</label>

                                    </div>
                                </div>
                            </div>
                            <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Requirements</h4>
                            <hr class="my-15">

                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" name="member_address" class="form-control" placeholder="Current Address">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Position <span class="text-danger">*</span></label>
                                        <select class="form-select" name="member_position" required>
                                            <option>--- Select ONE ---</option>
                                            <?php while ($position_info = mysqli_fetch_assoc($query_result)) { ?>
                                                <option value="<?php echo $position_info['position_name']; ?>"><?php echo $position_info['position_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger">* </span>Select File</label>
                                    <label class="file">
                                        <input type="file" name="member_image" id="file" required>
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

                                                <input class="form-control" name="facebook_link" type="url" placeholder="http://facebooklink">
                                            </div>
                                            <input type="checkbox" id="checkbox_234">
                                            <label for="checkbox_234" class="me-30">Twitter</label>
                                            <div class="form-group">

                                                <input class="form-control" name="twitter_link" type="url" placeholder="http://facebooklink">
                                            </div>
                                            <input type="checkbox" id="checkbox_345">
                                            <label for="checkbox_345" class="me-30">Instagram</label>
                                            <div class="form-group">

                                                <input class="form-control" name="instagram_link" type="url" placeholder="http://facebooklink">
                                                <input class="form-control" name="member_account_no" type="hidden" value="<?php
                                                                                                                            $givenLength = 6;
                                                                                                                            $pData = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

                                                                                                                            $password = '';
                                                                                                                            for ($i = 1; $i < $givenLength; $i++) {
                                                                                                                                $index = rand(0, 9);
                                                                                                                                $password .= $pData[$index];
                                                                                                                            }
                                                                                                                            echo '#' . $password;
                                                                                                                            ?>">
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">


                            <input type="submit" class="btn btn-primary" name="btn_save" value="Save">
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