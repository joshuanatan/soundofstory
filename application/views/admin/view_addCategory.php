
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add</strong> Category
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo base_url().'c_add/user/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">ID User</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="id" placeholder="Enter ID" class="form-control" required><small class="help-block form-text">Please enter your ID</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="name" class="form-control" placeholder="Enter Category Name" required><small class="form-text text-muted">Please enter category name</small></div>
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
    