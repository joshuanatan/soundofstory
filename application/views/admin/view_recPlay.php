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
                            <li>Recording Playlist</li>
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
                        <strong class="card-title">Recording Playlist</strong>
                        <div class="float-right">
                            <a href="<?php echo base_url().'admin/welcome/tmbhRecPlay' ?>"><button class="btn">Add Recording Playlist</button></a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Story</th>
                                    <th>Recording</th>
                                    <th>Chapter</th>
                                    <th>Add Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($rep as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->id_recording_playlist ?></td>
                                        <td><?php echo $list->nama_user ?></td>
                                        <td><?php echo $list->nama_playlist ?></td>
                                        <td><?php echo $list->judul_recording ?></td>
                                        <td><?php echo $list->chapter_playlist ?></td>
                                        <td><?php echo $list->tgl_submit_playlist ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'admin/c_delete/rep/'.$list->id_recording_playlist ?>"><button class="btn btn-danger btn-outline"><i class = "fa fa-trash"></i></button></a></td>
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

