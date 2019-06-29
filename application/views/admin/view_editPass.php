
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> Password
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo base_url().'admin/c_edit/updatePassword/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">New Password</label></div>
                                <div class="col-12 col-md-6"><input type="password" name="password" class="form-control"></div>
                                <div class="col-12 col-md-3"><button type = "submit" class = "btn btn-primary">SUBMIT</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->    
