<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?php echo base_url().'admin/welcome/user' ?>">Dashboard</a></li>
                            <li>History</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">History</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                        <th>Name</th>
                                        <th>Recording</th>
                                        <th>Status</th>
                                        <th>Join Date</th>
                                        <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($hist as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->id_history ?></td>
                                        <td><?php echo $list->nama_user ?></td>
                                        <td><?php echo $list->judul_recording ?></td>
                                        <td><?php echo "Active" ?></td>
                                        <td><?php echo $list->tgl_submit_history ?></td>
                                        <td><!--<a href="<?php echo base_url().'admin/c_edit/edit/'.$list->id_history ?>"><button class="btn btn-primary btn-outline"><i class = "fa fa-edit"></i></button></a>--> <a href="<?php echo base_url().'admin/c_delete/history/'.$list->id_history ?>"><button class="btn btn-danger btn-outline"><i class = "fa fa-trash"></i></button></a></td>
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
