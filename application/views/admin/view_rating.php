
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                        <div class="float-right">
                            <a href="<?php echo base_url().'admin/welcome/tmbhRating' ?>"><button class="btn">Add Rating</button></a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                        <th>Name</th>
                                        <th>Recording</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Join Date</th>
                                        <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($rate as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->id_rating ?></td>
                                        <td><?php echo $list->nama_user ?></td>
                                        <td><?php echo $list->judul_recording ?></td>
                                        <td><?php echo $list->jumlah_rating ?> / <b>5</b></td>
                                        <td><?php echo $list->status_rating ?></td>
                                        <td><?php echo $list->tgl_submit_rating ?></td>
                                        <td><a href="<?php echo base_url().'c_edit/rate/'.$list->id_rating ?>"><button class="btn btn-primary btn-outline"><i class = "fa fa-edit"></i></button></a><a href="<?php echo base_url().'c_delete/rate/'.$list->id_rating ?>"><button class="btn btn-danger btn-outline"><i class = "fa fa-trash"></i></button></a></td>
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
