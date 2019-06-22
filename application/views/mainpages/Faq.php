<?php
if($this->session->userdata("id_user") == "") {
    redirect("welcome");
}
?>
<div class="cart_info">
    <div class="container">
        <div class = "row" style = "margin-bottom:50px">
            <div class = "col">
            </div>
        </div>
        <br/><br/>
        <div class = "row">
            <table class = "table table-stripped">
                <thead>
                    <tr>
                        <th style = "width:45%">Question</th>
                        <th style = "width:45%">Answer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($faq as $list) { ?>
                    <tr>
                        <Td class = "align-middle"><h4><?php echo $list->question;?></h4></Td>
                        <Td class = "align-middle"><h4><?php echo $list->answer;?></h4></Td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>		
</div>
