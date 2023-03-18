<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h4 class="page-title">User list</h4>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Contact</li>
                        <li class="breadcrumb-item active" aria-current="page">User list</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-lg-9 col-md-8">
            <div class="box">
                <div class="media-list media-list-divided media-list-hover">

                    <!-- ----------------------start---------------- -->
                    <div class="media align-items-center">
                        <span class="badge badge-dot badge-danger"></span>
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="images/avatar/1.jpg" alt="...">
                        </a>

                        <div class="media-body">
                            <p>
                                <a href="#"><strong>Ridoy</strong></a>
                                <!-- <small class="sidetitle text-success">Published</small> -->
                                <small class="sidetitle text-success text-danger">Unpublished</small>

                            </p>
                            <p>AC NO - #566343</p>

                            <nav class="nav mt-2">
                                <a class="nav-link" href="add_member.php"><i class="glyphicon glyphicon-pencil text-warning"></i></a>
                                <a class="nav-link" href="#"><i class="glyphicon glyphicon-earphone text-success"></i></a>
                                <a class="nav-link" href="#"><i class="glyphicon glyphicon-envelope text-primary"></i></a>
                                <a class="nav-link" href="#"><i class="glyphicon glyphicon-trash text-danger"></i></a>
                            </nav>
                        </div>


                    </div>
                    <div class="media align-items-center">
                        <span class="badge badge-dot badge-danger"></span>
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="images/avatar/1.jpg" alt="...">
                        </a>

                        <div class="media-body">
                            <p>
                                <a href="#"><strong>Ridoy</strong></a>
                                <small class="sidetitle text-success">Published</small>
                                <!-- <small class="sidetitle text-success text-danger">Unpublished</small> -->

                            </p>
                            <p>Designer</p>

                            <nav class="nav mt-2">
                                <a class="nav-link" href="#"><i class="glyphicon glyphicon-pencil text-warning"></i></a>
                                <a class="nav-link" href="#"><i class="glyphicon glyphicon-ok text-success"></i></a>
                                <a class="nav-link" href="#"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                                <a class="nav-link" href="#"><i class="glyphicon glyphicon-trash text-danger"></i></a>
                            </nav>
                        </div>


                    </div>

                    <!-- --------------------------END-------------------- -->





                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="box no-shadow">
                <div class="box-body">
                    <a class="btn btn-outline btn-success mb-5 d-flex justify-content-between" href="javascript:void(0)">Online <span class="pull-right">103</span></a>
                    <a class="btn btn-outline btn-danger mb-5 d-flex justify-content-between" href="javascript:void(0)">Offline <span class="pull-right">19</span></a>
                    <a class="btn btn-outline btn-info mb-5 d-flex justify-content-between" href="javascript:void(0)">Available <span class="pull-right">623</span></a>
                    <a class="btn btn-outline btn-primary mb-5 d-flex justify-content-between" href="javascript:void(0)">Private <span class="pull-right">53</span></a>
                    <a class="btn btn-warning mt-10 d-flex justify-content-between" href="javascript:void(0)">All Contacts <span class="pull-right">123</span></a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success mt-10 d-block text-center">+ Add New User</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- --------------------------------------------model code start--------------------------- -->

<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Contact</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12 form-label">Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <label class="col-md-12 form-label">Email</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <label class="col-md-12 form-label">Phone</label>
                        <div class="col-md-12">
                            <input type="tel" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 form-label">Address</label>
                        <div class="col-md-12">
                            <textarea class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="admin_user.php" class="btn btn-success">Save</a>


                <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>