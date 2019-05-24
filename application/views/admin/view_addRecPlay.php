
    
<form action="<?php echo base_url().'admin/c_add/recplay/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
    <div class="content"><div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add</strong> Recording Play
                    </div>
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">ID Playlist</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="idp" id="id_playlist" class="form-control" onchange = "loadRecordingNotInPlaylist()" required>
                                    <?php foreach($playlist->result() as $a){ ?> 
                                    <option value = "<?php echo $a->id_playlist;?>"><?php echo $a->nama_playlist;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body card-block">
                    
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">ID Recording</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="idr" class="form-control" id = "idRec" onchange = "loadRecordingDetail()" required>
                                    <?php foreach($recording->result() as $a){ ?> 
                                    <option value = "<?php echo $a->id_recording;?>"><?php echo $a->judul_recording;?></option>    
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Recording Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id = "name" type = "text" readonly class = "form-control">
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Recording Duration</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id = "duration" type = "text" readonly class = "form-control">
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Recording Image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <img id = "image" style = "height:100px">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Recording Audio</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <a href = "" id = "source" class = "btn btn-primary btn-outline col-lg-3" target = "_blank">LISTEN AUDIO</a>
                            </div>
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
                </div>
            </div>
        </div>
        
    </div><!-- .content -->    
</form>