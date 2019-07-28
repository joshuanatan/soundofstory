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
                        <th style = "width:100%">Episodes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($a = 0; $a<count($recording); $a++):?>
                    <tr>
                        <td>
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start " style = "width:100%">
                                <div class="cart_item_image">
                                    <div><img src="<?php echo base_url();?>assets/recording/<?php echo $recording[$a]["foto_recording"];?>" alt=""></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_name"><a href="<?php echo base_url();?>lounge/stories/listen/<?php echo $recording[$a]["id_recording"];?>"><?php echo $recording[$a]["judul_recording"]; ?></a></div>
                                    <div class="cart_item_edit"><a href="<?php echo base_url();?>lounge/stories/listen/<?php echo $recording[$a]["id_recording"];?>">Chapter <?php echo $recording[$a]["chapter"];?></a></div><br/>
                                    
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>		
</div>
