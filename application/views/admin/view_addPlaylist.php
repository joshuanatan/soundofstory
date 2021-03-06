
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add</strong> Playlist
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo base_url().'admin/c_add/play/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="name" class="form-control" placeholder="Enter Name" required><small class="form-text text-muted">Please enter playlist's name</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label" required>Category</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="cat" class="form-control">
                                        <?php 
                                        foreach($cat as $list2) { ?>
                                            <option value="<?php echo $list2->id_category ?>"><?php echo $list2->nama_category ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="desc" class="form-control" placeholder="Enter Name" required><small class="form-text text-muted">Please enter description</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Photo</label></div>
                                <div class="col-12 col-md-9"><input type="file" name="pic1" class="form-control" required>
                                    <small class="form-text text-muted">Please upload photo</small></div>
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
