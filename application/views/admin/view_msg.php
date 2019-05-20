
    
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                        <div class="float-right">
                            <a href="<?php echo base_url().'admin/welcome/tmbhMsg' ?>"><button class="btn">Add Message</button></a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Content</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($msg as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->id_message ?></td>
                                        <td><?php echo $list->id_user_dari ?></td>
                                        <td><?php echo $list->id_user_tujuan ?></td>
                                        <td><?php echo $list->konten ?></td>
                                        <td><?php echo $list->status_message ?></td>
                                        <td><?php echo $list->tgl_submit_message ?></td>
                                        <td><?php echo $list->jam_submit_message ?></td>
                                        <td><a href="<?php echo base_url().'c_edit/msg/'.$list->id_message ?>"><button class="btn btn-primary btn-outline"><i class = "fa fa-edit"></i></button></a><a href="<?php echo base_url().'c_delete/msg/'.$list->id_message ?>"><button class="btn btn-danger btn-outline"><i class = "fa fa-trash"></i></button></a></td>
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
