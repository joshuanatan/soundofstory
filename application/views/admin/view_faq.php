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
                            <li>FAQ</li>
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
                        <strong class="card-title">FAQ</strong>
                        <div class="float-right">
                            <a href="<?php echo base_url().'admin/welcome/tmbhFaq' ?>"><button class="btn">Add FAQ</button></a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($faq as $list) { ?>
                                    <tr>
                                        <td><?php echo $list->id_faq ?></td>
                                        <td><?php echo $list->question_faq ?></td>
                                        <td><?php echo $list->answer_faq ?></td>
                                        <td><a href="<?php echo base_url().'admin/c_edit/faq/'.$list->id_faq ?>"><button class="btn btn-primary btn-outline"><i class = "fa fa-edit"></i></button></a><a href="<?php echo base_url().'admin/c_delete/faq/'.$list->id_faq ?>"><button class="btn btn-danger btn-outline"><i class = "fa fa-trash"></i></button></a></td>
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
