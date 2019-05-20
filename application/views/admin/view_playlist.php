
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                        <div class="float-right">
                            <a href="<?php echo base_url().'admin/welcome/tmbhPlaylist' ?>"><button class="btn">Add Playlist</button></a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                        <th>Playlist</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Join Date</th>
                                        <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($play as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->id_playlist ?></td>
                                        <td><?php echo $list->description_playlist ?></td>
                                        <td><?php echo $list->nama_category ?></td>
                                        <td><?php echo $list->nama_playlist ?></td>
                                        <td><?php echo $list->nama_user ?></td>
                                        <td><?php echo $list->status_playlist ?></td>
                                        <td><?php echo $list->tgl_submit_playlist ?></td>
                                        <td><a href="<?php echo base_url().'admin/c_edit/play/'.$list->id_playlist ?>"><button class="btn btn-primary btn-outline"><i class = "fa fa-edit"></i></button></a><a href="<?php echo base_url().'admin/c_delete/play/'.$list->id_playlist ?>"><button class="btn btn-danger btn-outline"><i class = "fa fa-trash"></i></button></a></td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
