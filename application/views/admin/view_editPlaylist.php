
<div class="content">
    <div class="animated fadeIn">
            <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> Playlist
                    </div>
                    <div class="card-body card-block">
                        <?php foreach($play as $list) { ?>
                        <form action="<?php echo base_url().'c_edit/updatePlay/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Playlist</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="idp" class="form-control" value="<?php echo $list->id_playlist ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="name" class="form-control" value="<?php echo $list->nama_playlist ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">ID User</label></div>
                                <div class="col-12 col-md-9"><input type="email" name="id" value="<?php echo $list->id_user ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label></div>
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
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Recording</label></div>
                                <div class="col-12 col-md-9">
                                    <?php foreach($rec as $list) {
                                    ?>
                                    <input type="checkbox" name="rec[]" value="<?php echo $list->id_recording ?>"><?php echo $list->judul_recording ?><br>
                                    <?php } ?>
                                    <small class="form-text text-muted">Please select recording</small>
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
