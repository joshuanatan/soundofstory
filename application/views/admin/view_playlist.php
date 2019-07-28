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
                            <li>Playlist</li>
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
                        <strong class="card-title">Playlist</strong>
                        <div class="float-right">
                            <a href="<?php echo base_url().'admin/welcome/tmbhPlaylist' ?>"><button class="btn">Add Playlist</button></a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Playlist</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>User</th>
                                    <th>Favorited</th><th>Cover</th>
                                    <th>Join Date</th>
                                    <th>Premium</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($play as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->nama_playlist ?></td>
                                        <td><?php echo $list->description_playlist ?></td>
                                        <td><?php echo $list->nama_category ?></td>
                                        <td><?php echo $list->nama_user ?></td>
                                        <td><?php echo getAmount("user_favourite","id_user_favourite",array("id_playlist" => $list->id_playlist));?></td>
                                        <td><a href = "<?php echo base_url();?>assets/images/story/<?php echo $list->foto_playlist;?>" class = "btn btn-primary" target = "_blank">IMAGE</a></td>
                                        <td><?php echo $list->tgl_submit_playlist ?></td>
                                        <td><?php if($list->status_premium == 1) echo "PREMIUM"; else echo "REGULAR"; ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'admin/c_edit/play/'.$list->id_playlist ?>"><button class="btn btn-primary btn-outline"><i class = "fa fa-edit"></i></button></a>
                                            <a href="<?php echo base_url().'admin/c_delete/play/'.$list->id_playlist ?>"><button class="btn btn-danger btn-outline"><i class = "fa fa-trash"></i></button></a><br/><br/>
                                            <?php if($list->status_premium == 0):?>
                                            <a href = "<?php echo base_url();?>admin/c_edit/premium_playlist/<?php echo $list->id_playlist;?>"><button class="btn btn-primary btn-outline">Set Premium</button></a>
                                            <?php else:?>
                                            <a href = "<?php echo base_url();?>admin/c_edit/undo_premium_playlist/<?php echo $list->id_playlist;?>"><button class="btn btn-danger btn-outline">Set Regular</button></a>
                                            <?php endif;?>
                                        </td>
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
