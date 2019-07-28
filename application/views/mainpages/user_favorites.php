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
                        <th style = "width:45%">Favorite Stories</th>
                    </tr>
                </thead>
                <tbody>
                <?php for($a = 0; $a<count($playlist); $a++):?>
                    <tr>
                        <td>
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start " style = "width:100%">
                                <div class="cart_item_image">
                                    <div><img src="<?php echo base_url();?>assets/images/story/<?php echo $playlist[$a]["foto_playlist"];?>" alt=""></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_name"><a href="<?php echo base_url();?>lounge/stories/detail/<?php echo $playlist[$a]["id_playlist"];?>"><?php echo $playlist[$a]["nama_playlist"]; ?></a></div>
                                    <br/>
                                    
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
