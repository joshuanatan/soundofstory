
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                        <div class="float-right">
                            <a href="<?php echo base_url().'admin/welcome/tmbhRec' ?>"><button class="btn">Add Recording</button></a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                        <th>Title</th>
                                        <th>File Name</th>
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Join Date</th>
                                        <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($rec as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->id_recording ?></td>
                                        <td><?php echo $list->judul_recording ?></td>
                                        <td><?php echo $list->file_recording ?></td>
                                        <td><?php echo $list->nama_user ?></td>
                                        <td><?php echo $list->status_recording ?></td>
                                        <td><?php echo $list->tgl_submit_recording ?></td>
                                        <td><a href="<?php echo base_url().'c_edit/rec/'.$list->id_recording ?>"><button class="btn btn-primary btn-outline"><i class = "fa fa-edit"></i></button></a><a href="<?php echo base_url().'c_delete/rec/'.$list->id_recording ?>"><button class="btn btn-danger btn-outline"><i class = "fa fa-trash"></i></button></a></td>
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
