<?php
require 'function_defination.php';

$query_result = view_all_expences_info();

if (isset($_GET['btn_status'])) {
    $delete_message = expences_data_delete($_GET);
}
?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '2') { ?>
<section class="content">
    <div class="row">

        <div class="col-12">
            <div class="box">
                <div class="box-header ">
                    <h4 class="box-title mb-0"><i class="ti-user me-15"></i><?php
                                                                            if (isset($delete_message)) {
                                                                                echo $delete_message;
                                                                                unset($delete_message);
                                                                            } else {
                                                                                echo 'Expense Report';
                                                                            } ?>
                    </h4>
                    <a class="btn btn-info float-end" href="expense.php">New</a>


                </div>

                <div class="box-body">

                    <div class="table-responsive">
                        <table id="complex_header" class="table table-striped table-hover table-bordered display" style="width:100%">
                            <thead class="table-primary bg-primary">

                                <tr>
                                    <th>Entry Date</th>
                                    <th>RF Name</th>
                                    <th>Title</th>
                                    <th>Amount</th>
                                    <th>Image</th>
                                    <th>Year</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php $sum = 0;
                                $rowCount = 0;
                                while ($expences_info = mysqli_fetch_assoc($query_result)) { ?>
                                    <tr>
                                        <td><?php echo $expences_info['entry_date']; ?></td>
                                        <td><?php echo $expences_info['expenser_name']; ?></td>
                                        <td><?php echo $expences_info['expenser_title']; ?></td>
                                        <td><?php $total_amount = $expences_info['total_amount'];
                                            echo $total_amount; ?> <span>TK</span></td>
                                        <td>
                                            <?php if ($expences_info['receipt_image'] != NULL) { ?>
                                                <div id="gallery-content">
                                                    <div id="gallery-content-center" class="zoom-gallery gallery-content-center-full isotope" style="position: relative; overflow: hidden; height: 3110.77px;">
                                                        <a href="<?php echo $expences_info['receipt_image']; ?>" data-gallery="multiimages" title="<?php echo $expences_info['expenses_description']; ?>">
                                                            <img src="<?php echo $expences_info['receipt_image']; ?>" height="40" alt="gallery" class="all studio isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="gallery-content" style="height:50px;width:70px ;">
                                                    <div id="gallery-content-center" class="zoom-gallery gallery-content-center-full isotope" style="position: relative; overflow: hidden; height: 2110.77px;">
                                                        <a href="assets/Image/expenxes_recipt/document.png" data-gallery="multiimages" title="<?php echo $expences_info['expenses_description']; ?>">
                                                            <img src="assets/Image/expenxes_recipt/document.png" alt="gallery" height="40" class="all studio isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        </td>
                                        <td><?php echo $expences_info['entry_year']; ?></td>

                                        <!-- <td class="text-center m-0 p-0">
                                            <table class="table m-1 p-0">
                                                <tr>

                                                    <td class="bg-lightest hr-p1 "> <a href="?btn_status=delete&btn_id=1" class="hr"><span class="glyphicon glyphicon- text-danger"></span></td></a>
                                                </tr>
                                            </table>
                                        </td> -->
                                    </tr>

                                <?php
                                    $num = 1;

                                    $rowCount = $rowCount + $num;


                                    $sum = $sum + $total_amount;
                                } ?>






                            </tbody>

                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Total Transection :</th>
                                    <th rowspan="1" colspan="1"><span class="text-warning bold"><?php echo $rowCount; ?></span></th>
                                    <th rowspan="1" colspan="1">Total Amount :</th>
                                    <th rowspan="1" colspan="2"><span class="text-warning bold"><?php echo $sum; ?></span> TK</th>

                                    <th rowspan="1" colspan="2"></th>
                                </tr>
                            </tfoot>

                        </table>

                    </div>
                </div>
            </div>
        </div>






        <!-- /.box -->
    </div>
    <!-- /.col -->
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