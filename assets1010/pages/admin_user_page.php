<?php
require 'function_defination.php';

$query_result = view_all_admin_users();

if (isset($_GET['btn_status'])) {

    $delete_message = delete_admin_info($_GET);
}







?>
<?php if ($_SESSION['access_level'] == '1') { ?>
    <section class="content">
        <div class="row">
            <div class="col-xl-12 col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title"><?php
                                                if (isset($delete_message)) {
                                                    echo $delete_message;
                                                } else {
                                                    echo "Admin users";
                                                }
                                                ?></h4>
                        <a class="btn btn-info float-end" href="add_new_admin_user.php">New</a>
                    </div>
                    <div class="box-body p-0">
                        <div class="media-list media-list-hover media-list-divided">

                            <?php while ($admins_info = mysqli_fetch_assoc($query_result)) { ?>

                                <div class="media">
                                    <img class="avatar avatar-lg bg-danger-light rounded" src="<?php echo $admins_info['admin_image']; ?>" alt="...">
                                    <div class="media-body fw-500">
                                        <p><strong class="text-info"><?php echo $admins_info['user_name']; ?></strong> <span class="float-end">33 min ago</span></p>
                                        <p class="text-fade">User ID : <span class="text-light"><?php echo $admins_info['account_no']; ?></span></p>
                                        <p class="text-fade">Password : <span class="text-light">******</span></p>
                                        <p class="text-fade">Access Level : <span class="text-lighter">
                                                <?php

                                                if ($admins_info['access_level'] == '1') {
                                                    echo "Admin";
                                                } elseif ($admins_info['access_level'] == '2') {
                                                    echo "Announce Manager";
                                                } elseif ($admins_info['access_level'] == '3') {
                                                    echo "Data Manager";
                                                } elseif ($admins_info['access_level'] == '4') {
                                                    echo "Website Handler";
                                                }

                                                ?>
                                            </span></p>
                                        <div class="media-block-actions">
                                            <nav class="nav nav-dot-separated g-0">
                                                <!-- <div class="nav-item">
                                                <a class="nav-link text-warning" href="#"><i class="ti-pencil-alt"></i> Edit</a>
                                            </div> -->
                                                <div class="nav-item">
                                                    <a class="nav-link text-danger" href="?btn_status=btnDelete&deleteID=<?php echo $admins_info['admin_id']; ?>"><i class=" ti-trash"></i> Delete</a>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>







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