
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add</strong> Like
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo base_url().'c_add/like/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID User</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="id" class="form-control" placeholder="Enter ID" required><small class="form-text text-muted">Please enter your ID</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">ID Recording</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="idr" class="form-control" required>
                                        <?php foreach($rec as $list) { ?>
                                        <option value = "<?php echo $list->id_recording ?>"><?php echo $list->judul_recording ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Like</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="like" class="form-control" required>
                                        <option value="1">Like</option>
                                        <option value="0">Unlike</option>
                                    </select>
                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->    
