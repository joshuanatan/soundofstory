
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> User
                    </div>
                    <div class="card-body card-block">
                        <?php foreach($rec as $list) { ?>
                        <form action="<?php echo base_url().'admin/c_edit/updateRec/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Recording</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="idr" class="form-control" value="<?php echo $list->id_recording ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="title" class="form-control" value="<?php echo $list->judul_recording ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID User</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="id" class="form-control" value="<?php echo $list->id_user ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9"><textarea name="desc" class="form-control" value=""><?php echo $list->description_recording ?></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Duration</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="duration" class="form-control" value="<?php echo $list->duration_recording ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Recording</label></div>
                                <div class="col-12 col-md-9"><input type="file" class="form-control" name = "recording" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cover</label></div>
                                <div class="col-12 col-md-9"><input type="file" class="form-control" name = "cover" readonly></div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->    
