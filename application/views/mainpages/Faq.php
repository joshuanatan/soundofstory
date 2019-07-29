<?php
if($this->session->userdata("id_user") == "") {
    redirect("welcome");
}
?>
<div class="cart_info">
    <div class="container">
        <br/>
        <br/>
        <br/>
        <br/>
        <div class = "row" style = "margin-bottom:50px">
            <h2>Frequently Asked Questions</h2>
        </div>
        <br/><br/>
        <?php foreach($faq->result() as $a):?>
        <div class = "row">
            <div class = "form-group">
                <h5><strong>Question: <?php echo $a->question_faq; ?></strong></h5>
                <h4>Answer: <?php echo $a->answer_faq; ?></h4>
            </div>
        </div>
        <hr/>
        <?php endforeach;?>
    </div>		
</div>
