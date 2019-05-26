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
                            <li>User</li>
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
                        <strong class="card-title">USER</strong>
                        <div class="float-right">
                            <a href="<?php echo base_url().'admin/welcome/tmbhUser/' ?>"><button class="btn">ADD USER</button></a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Join Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($user as $listUser) { ?>
                                    <tr>
                                        <td><?php echo $listUser->id_user ?></td>
                                        <td><?php echo $listUser->nama_user ?></td>
                                        <?php
                                        if($listUser->gender_user == '1') {
                                            $jk = "Pria";
                                        }
                                        else {
                                            $jk = "Wanita";
                                        }
                                        ?>
                                        <td><?php echo $jk ?></td>
                                        <td><?php echo $listUser->email_user ?></td>
                                        <td><?php echo $listUser->nohp_user ?></td>
                                        <td><img style = "height:40%" src='<?php echo base_url().'assets/profiles/images/'.$listUser->foto_profile_user; ?>'></td>
                                        <td><?php echo "Active" ?></td>
                                        <td><?php echo $listUser->tgl_submit_user ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'admin/c_add/premium/'.$listUser->id_user ?>">
                                                <button class="btn btn-primary btn-outline">
                                                    Premium
                                                </button>
                                            </a>
                                            <a href="<?php echo base_url().'admin/c_edit/editUser/'.$listUser->id_user ?>">
                                                <button class="btn btn-primary btn-outline">
                                                    <i class = "fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo base_url().'admin/c_delete/user/'.$listUser->id_user ?>">
                                                <button class="btn btn-danger btn-outline">
                                                    <i class = "fa fa-trash"></i>
                                                </button>
                                            </a>
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

