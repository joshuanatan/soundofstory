
<div class="content">
    <div class="animated fadeIn">
            <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add</strong> User
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo base_url().'admin/c_add/user/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="name" class="form-control" placeholder="Enter Name" required><small class="form-text text-muted">Please enter your name</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Enter Email" class="form-control" required><small class="help-block form-text">Please enter your email</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-9"><input type="password" id="password" name="pass" placeholder="Password" class="form-control" required><small class="help-block form-text">Please enter a complex password</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Gender</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="jk" id="jk" class="form-control" required>
                                        <option value="1">Pria</option>
                                        <option value="2">Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone Number</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required><small class="form-text text-muted">Please enter your phone number</small></div>
                            </div>
                            <!--<div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="address" class="form-control" placeholder="Enter Address" required><small class="form-text text-muted">Please enter your address</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="desc" class="form-control" placeholder="Enter Description" required><small class="form-text text-muted">Please enter your description</small></div>
                            </div>-->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Photo</label></div>
                                <div class="col-12 col-md-9"><input type="file" name="pic1" class="form-control"></div>
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
