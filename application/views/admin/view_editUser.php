
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> User
                    </div>
                    <div class="card-body card-block">
                        <?php foreach($user as $list) { ?>
                        <form action="<?php echo base_url().'admin/c_edit/updateUser/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="id" class="form-control" value="<?php echo $list->id_user ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="name" class="form-control" value="<?php echo $list->nama_user ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="email" name="email" value="<?php echo $list->email_user ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Gender</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="1">Pria</option>
                                        <option value="2">Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone Number</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="phone" class="form-control" value="<?php echo $list->nohp_user ?>"></div>
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
