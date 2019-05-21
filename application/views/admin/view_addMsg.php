
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add</strong> Message
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo base_url().'c_add/msg/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Content</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="isi" class="form-control" placeholder="Enter Name" required><small class="form-text text-muted">Please enter your message</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">From (ID)</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="fid" class="form-control" placeholder="Enter Name" required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">To (ID)</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="tid" class="form-control" placeholder="Enter Name" required></div>
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
