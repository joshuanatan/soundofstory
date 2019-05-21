
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Join Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($report as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->id_comment ?></td>
                                        <td><?php echo $list->nama_user ?></td>
                                        <td><?php echo $list->status_report ?></td>
                                        <td><?php echo $list->tgl_submit_report ?></td>
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
