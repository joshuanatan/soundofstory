
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> Rate
                    </div>
                    <div class="card-body card-block">
                        <?php foreach($rate as $list) { ?>
                        <form action="<?php echo base_url().'c_edit/updateRate/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Rating</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="idrate" class="form-control" value="<?php echo $list->id_rating ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID User</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="id" class="form-control" value="<?php echo $list->id_user ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Recording</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="idr" class="form-control" value="<?php echo $list->id_recording ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Rate</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="rate" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
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
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->    
