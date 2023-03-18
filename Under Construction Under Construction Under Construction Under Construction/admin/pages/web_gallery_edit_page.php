<section class="content">
    <div id="gallery">
        <div class="box bg-transparent no-shadow b-0">
            <div class="box-body text-center p-0">
                <div class="btn-group">
                    <a href="web_gallery.php" class="btn btn-info gallery-header-center-right-links-current">View Image</a>
                    <a href="web_gallery_edit.php" class="btn btn-info">Update Image</a>
                </div>
            </div>
        </div>
        <!-- Default box -->
        <div class="col-12 col-xl-6">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Edit Images</h4>
                    <div class="dropdown pull-right">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-image"><i class="glyphicon glyphicon-plus text-info"></i>New</a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="media-list media-list-divided">

                        <!-- -----------Content Start--------- -->

                        <div class="media media-single px-0">
                            <img class="w-80 rounded" src="images/gallery/creative/img-1.jpg" alt="...">
                            <span class="title fw-500 fs-16">Deeveloper Manual</span>

                            <a class="fs-18 text-gray hover-info" href="#" data-bs-toggle="modal" data-bs-target="#add-new-events"><i class="glyphicon glyphicon-pencil text-warning"></i></a>

                            <a class="fs-18 text-gray hover-info" href="#"><i class="glyphicon glyphicon-trash text-danger"></i></a>

                        </div>
                        <div class="media media-single px-0">
                            <img class="w-80 rounded" src="images/gallery/creative/img-2.jpg" alt="...">
                            <span class="title fw-500 fs-16">Deeveloper Manual</span>

                            <a class="fs-18 text-gray hover-info" href="#" data-bs-toggle="modal" data-bs-target="#add-new-events"><i class="glyphicon glyphicon-pencil text-warning"></i></a>

                            <a class="fs-18 text-gray hover-info" href="#"><i class="glyphicon glyphicon-trash text-danger"></i></a>

                        </div>
                        <div class="media media-single px-0">
                            <img class="w-80 rounded" src="images/gallery/creative/img-3.jpg" alt="...">
                            <span class="title fw-500 fs-16">Deeveloper Manual</span>

                            <a class="fs-18 text-gray hover-info" href="#" data-bs-toggle="modal" data-bs-target="#add-new-events"><i class="glyphicon glyphicon-pencil text-warning"></i></a>

                            <a class="fs-18 text-gray hover-info" href="#"><i class="glyphicon glyphicon-trash 
                            text-danger"></i></a>
                        </div>
                        <!-- -------------content End-------- -->


                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>

<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-image">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> New Image</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Image Title</label>
                            <input type="text" class="form-control mb-3" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Img</label>
                                <label class="file">
                                    <input type="file" id="file">
                                </label>
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
<!-- END MODAL -->


<!-- Modal Edit Category -->
<div class="modal fade none-border" id="add-new-events">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Edit</strong> Image</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Image Title</label>
                            <input type="text" class="form-control mb-3" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Img</label>
                                <label class="file">
                                    <input type="file" id="file">
                                </label>
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
<!-- END MODAL -->