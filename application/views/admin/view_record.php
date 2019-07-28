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
                            <li>Recording</li>
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
                        <strong class="card-title">Recording</strong>
                        <div class="float-right">
                            <a href="<?php echo base_url().'admin/welcome/tmbhRec' ?>"><button class="btn">Add Recording</button></a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>File Name</th>
                                    <th>User</th>
                                    <th>Views</th>
                                    <th>Likes</th>
                                    <th>Cover</th>
                                    <th>Join Date</th>
                                    <th style = "width:15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($rec as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->judul_recording ?></td>
                                        <td><?php echo $list->file_recording ?></td>
                                        <td><?php echo $list->nama_user ?></td> 
                                        <td><?php echo getAmount("history_recording","id_history",array("id_recording" => $list->id_recording));?></td>
                                        <td><?php echo getAmount("like","id_like",array("id_recording" => $list->id_recording));//like ?></td>
                                        <td><a href = "<?php echo base_url();?>assets/recording/<?php echo $list->foto_recording;?>" class = "btn btn-primary" target = "_blank">IMAGE</a></td>
                                        <td><?php echo $list->tgl_submit_recording ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'admin/c_edit/rec/'.$list->id_recording ?>"><button class="btn btn-primary btn-outline"><i class = "fa fa-edit"></i></button></a>
                                            <a href="<?php echo base_url().'admin/c_delete/rec/'.$list->id_recording ?>"><button class="btn btn-danger btn-outline"><i class = "fa fa-trash"></i></button></a>
                                            <button class = "btn btn-primary btn-outline" data-toggle = "modal" data-target = "#songs<?php echo $list->id_recording;?>"><i class = "fa fa-play"></i></i></button>
                                        </td>
                                    </tr>
                                    
                                    <div class="modal fade" id="songs<?php echo $list->id_recording;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                
                                                <div class="modal-body">
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="details_content">
                                                                <div class="details_text">
                                                                    <p><?php echo $list->description_recording ?></p>
                                                                </div>
                                                                <!-- In Stock -->
                                                                <div class="in_stock_container">
                                                                    <div class="availability"><strong>Duration:</strong></div>
                                                                    <span><?php echo $list->duration_recording.' minutes' ?></span>
                                                                </div>
                                                                

                                                                <!-- Share -->
                                                                <div style = "margin-top:20px">
                                                                    <audio controls style = "width: 100%">
                                                                        <source src="<?php echo base_url().'assets/recording/'.$list->file_recording ?>" type="audio/mpeg">
                                                                    </audio>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

