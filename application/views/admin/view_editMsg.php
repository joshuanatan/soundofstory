
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> Message
                    </div>
                    <div class="card-body card-block">
                        <?php foreach($msg as $list) { ?>
                        <form action="<?php echo base_url().'c_edit/updateMsg/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Message</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="idm" class="form-control" value="<?php echo $list->id_message ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">From (ID)</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="fid" class="form-control" value="<?php echo $list->id_user_dari ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">To (ID)</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="tid" class="form-control" value="<?php echo $list->id_user_tujuan ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Content</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="isi" class="form-control" value="<?php echo $list->konten ?>"></div>
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
