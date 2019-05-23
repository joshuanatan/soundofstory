
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> Category
                    </div>
                    <div class="card-body card-block">
                        <?php foreach($cat as $list) { ?>
                        <form action="<?php echo base_url().'admin/c_edit/updateCate/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Category</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="idc" class="form-control" value="<?php echo $list->id_category ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="name" class="form-control" value="<?php echo $list->nama_category ?>"></div>
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
