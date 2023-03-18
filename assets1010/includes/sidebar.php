<?php


$access_level = $_SESSION['access_level'];


?>
<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar position-relative">
    <div class="user-profile px-20 py-15">
      <div class="d-flex align-items-center">
        <div class="image">
          <img src="<?php echo $_SESSION['admin_image']; ?>" class="avatar avatar-lg bg-primary-light" alt="User Image">
        </div>
        <div class="info">
          <a class=" px-20" href="user_profile.php"><?php echo $_SESSION['user_name']; ?></a>

        </div>
      </div>

    </div>
    <div class="multinav">
      <div class="multinav-scroll" style="height: 100%;">
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="">
            <?php if ($access_level == '1') { ?>
              <a href="admin_master.php">
                <i span class="glyphicon glyphicon-home"><span class="path1"></span><span class="path2"></span></i>
                Overview
                <span class="pull-right-container">
                  <!-- <i class="glyphicon glyphicon-lock"></i> -->
                  <i class="glyphicon glyphicon-ok-sign"></i>
                </span>
              </a>
            <?php } else { ?>
              <a href="#" class="text-mute">
                <i span class="glyphicon glyphicon-home text-mute"><span class="path1"></span><span class="path2"></span></i>
                Overview
                <span class="pull-right-container">
                  <i class="glyphicon glyphicon-lock"></i>

                </span>
              </a>
            <?php } ?>


          </li>
          <li class="treeview">
            <?php if ($access_level == '1' || $access_level == '4') { ?>
              <a href="#">
                <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                <span>Dashboard</span>
                <span class="pull-right-container">
                  <!-- <i class="glyphicon glyphicon-lock"></i> -->
                  <i class="glyphicon glyphicon-ok-sign"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="web_home.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Home</a></li>
                <li><a href="web_about.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>About</a></li>
                <li><a href="web_events.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Events</a></li>
                <li><a href="web_gallery.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
                <li><a href="web_contact.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact</a></li>
              </ul>
            <?php } else { ?>
              <a href="#" class="text-mute">
                <i class="icon-Layout-4-blocks text-mute"><span class="path1"></span><span class="path2"></span></i>
                <span>Dashboard</span>
                <span class="pull-right-container">
                  <i class="glyphicon glyphicon-lock"></i>

                </span>
              </a>
            <?php } ?>

          </li>
          <li class="">
            <?php if ($access_level == '1' || $access_level == '3') { ?>
              <a href="data_bank.php">
                <i span class="cc LBC"><span class="path1"></span><span class="path2"></span></i>
                Data Bank
                <span class="pull-right-container">
                  <!-- <i class="glyphicon glyphicon-lock"></i> -->
                  <i class="glyphicon glyphicon-ok-sign"></i>
                </span>
              </a>
            <?php } else { ?>
              <a href="#" class="text-mute">
                <i span class="cc LBC text-mute"><span class="path1"></span><span class="path2"></span></i>
                Data Bank
                <span class="pull-right-container">
                  <i class="glyphicon glyphicon-lock"></i>
                </span>
              </a>
            <?php } ?>
          </li>

          <li class="header">Accounce Section</li>

          <li class="treeview">
            <?php if ($access_level == '1' || $access_level == '2') { ?>
              <a href="#">
                <i class="icon-Money"><span class="path1"></span><span class="path2"></span></i>
                <span>Add Money</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="add_fee.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Monthly Fees</a></li>
                <li><a href="add_donation.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Donation</a></li>
                <li><a href="expense.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Expense</a></li>
              </ul>
            <?php } else { ?>
              <a href="#" class="text-mute">
                <i class="icon-Money text-mute"><span class="path1"></span><span class="path2"></span></i>
                <span>Add Money</span>
                <span class="pull-right-container">
                  <i class="glyphicon glyphicon-lock"></i>
                </span>
              </a>
            <?php } ?>

          </li>
          <li class="treeview">
            <?php if ($access_level == '1' || $access_level == '2') { ?>
              <a href="#">
                <i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
                <span>Transaction Report</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="this_month_report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>This Month Fee Report</a></li>
                <li><a href="month_report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fee Report</a></li>
                <li><a href="donation_report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Donation Report</a></li>
                <li><a href="expense_report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Expense Report</a></li>
              </ul>
            <?php } else { ?>
              <a href="#" class="text-mute">
                <i class="icon-Chart-pie text-mute"><span class="path1"></span><span class="path2"></span></i>
                <span>Transaction Report</span>
                <span class="pull-right-container">
                  <i class="glyphicon glyphicon-lock"></i>
                </span>
              </a>
            <?php } ?>

          </li>
          <li class="treeview">
            <?php if ($access_level == '1' || $access_level == '3') { ?>
              <a href="#">
                <i class="icon-Plus"><span class="path1"></span><span class="path2"></span></i>
                <span>Add Information</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="add_member.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>New Member</a></li>
                <li><a href="add_position.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Position</a></li>
              </ul>
            <?php } else { ?>
              <a href="#" class="text-mute">
                <i class="icon-Plus text-mute"><span class="path1"></span><span class="path2"></span></i>
                <span>Add Information</span>
                <span class="pull-right-container">
                  <i class="glyphicon glyphicon-lock"></i>
                </span>
              </a>
            <?php } ?>


          </li>

        </ul>
      </div>
    </div>
  </section>
</aside>