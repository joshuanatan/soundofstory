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
            <h2>
                Frequently Asked Questions</h2>
        </div>
        <br/><br/>
        <div class = "row">
            <div class = "form-group">
                <h5><strong>Question 1</strong></h5>
                <h4>Answer 1</h4>
            </div>
        </div>
        <hr/>
        <div class = "row">
            <div class = "form-group">
                <h5><strong>Question 2</strong></h5>
                <h4>Answer 2</h4>
            </div>
        </div>
        <hr/>
        <div class = "row">
            <div class = "form-group">
                <h5><strong>Question 3</strong></h5>
                <h4>Answer 3</h4>
            </div>
        </div>
    </div>		
</div>
