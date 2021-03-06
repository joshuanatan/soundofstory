
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> FAQ
                    </div>
                    <div class="card-body card-block">
                        <?php foreach($faq as $list) { ?>
                        <form action="<?php echo base_url().'admin/c_edit/updateFaq/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID FAQ</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="id" class="form-control" value="<?php echo $list->id_faq ?>" readonly></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Question</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="question" class="form-control" value="<?php echo $list->question_faq ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Answer</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="answer" class="form-control" value="<?php echo $list->answer_faq ?>"></div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->    
