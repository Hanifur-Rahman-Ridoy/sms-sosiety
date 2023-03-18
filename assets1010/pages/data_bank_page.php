<?php
require 'function_defination.php';

$query_result = view_all_members_info();

if (isset($_GET['btn_status'])) {

    $delete_message = delete_Member_info($_GET);
}

?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '3') { ?>
    <section class="content">
        <div class="row">


            <div class="col-12">
                <div class="box">
                    <div class="box-header ">

                        <?php if (isset($_SESSION['update_status'])) { ?>

                            <h6 class="box-title text-success bold">Update Successfull</h6>

                        <?php unset($_SESSION['update_status']);
                        } elseif (isset($delete_message)) { ?>
                            <h6 class="box-title text-danger bold">Delete Successfull</h6>
                        <?php unset($delete_message);
                        } else { ?>
                            <h6 class="box-title">All Members Information</h6>
                        <?php } ?>

                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="complex_header" class="table table-striped table-hover table-bordered display" style="width:100%">
                                <thead class="table-primary bg-primary">

                                    <tr>
                                        <th>AC NO</th>
                                        <th>Name</th>
                                        <th>joining date</th>
                                        <th>Number</th>
                                        <th>Position</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>





                                    <?php while ($members_info = mysqli_fetch_assoc($query_result)) { ?>
                                        <tr>
                                            <?php if ($access_level == '3') { ?>
                                                <td><a href="#"><?php echo $members_info['member_account_no']; ?></a></td>
                                            <?php } else { ?>
                                                <td><a href="user_profile.php?membersid=<?php echo $members_info['members_id']; ?>"><?php echo $members_info['member_account_no']; ?></a></td>
                                            <?php } ?>
                                            <td><?php echo $members_info['member_name']; ?></td>
                                            <td><?php echo $members_info['joining_date']; ?></td>
                                            <td><?php echo $members_info['member_phone']; ?></td>
                                            <td><?php echo $members_info['member_position']; ?></td>
                                            <td><?php echo $members_info['member_email']; ?></td>
                                            <td class="text-center m-0 p-0">
                                                <table class="table m-1 p-0">
                                                    <tr>
                                                        <td class="bg-success-light hr-p1"> <a href="edit_member.php?memberId=<?php echo $members_info['members_id']; ?>" class="hr"><span class="glyphicon glyphicon-pencil text-dark  "></span></a></td>
                                                        <td class="bg-lightest hr-p1 "> <a href="?btn_status=delete&memberId=<?php echo $members_info['members_id']; ?>" class="hr"><span class="glyphicon glyphicon-trash text-danger"></span></td></a>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    <?php } ?>
















                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>





            <!-- /.box -->
        </div>

    </section>
<?php } else { ?>
    <section class="container">
        <div class="row">
            <h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
        </div>
    </section>
<?php } ?>