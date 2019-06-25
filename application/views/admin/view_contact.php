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
                            <li>Contact</li>
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
                        <strong class="card-title">Contact</strong>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Content</th>
                                    <th>Phone Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($contact as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->id_pesan ?></td>
                                        <td><?php echo $list->subject?></td>
                                        <td><?php echo $list->nama_user ?></td>
                                        <td><?php echo $list->email_user ?></td>
                                        <td><textarea class ="form-control" readonly><?php echo $list->konten ?></textarea></td>
                                        <td><?php echo $list->nohp_user ?></td>
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
