<?php
if($this->session->userdata("id") == "") {
    redirect("welcome");
}
?>
<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(<?php echo base_url();?>assets/images/categories.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">Exclusive Content<span>.</span></div>
                            <div class="home_text"><p>Welcome our exclusive members! Enjoy our special services for you</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product_details" style = "margin-top:30px">
    <div class="container">
        <div class = "row">
            <h3 style ="color:black">Your Last Played Episodes</h3>
            <hr/>
            <br/><br/><br/>
            <br/>
            <table class = "table-borderless hover stripe" id = "mytable">
                <thead>
                    <tr>
                        <th style = "width:5%">Cover</th>
                        <th style = "width:45%">Title</th>
                        <th style = "width:15%">Duration</th>
                        <th style = "width:20%">Story</th>
                        <th style = "width:15%">Played</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($episode as $list) { ?>
                    <tr>
                        <td class = "align-middle" >
                            <img src="<?php echo base_url();?>assets/images/<?php echo $list->foto_recording ?>" alt="" style = "width:100%">
                        </td>
                        <td>
                            <div class="cart_item_name_container">
                                <div class="cart_item_name"><a href="<?php echo base_url();?>stories/detail/<?php echo $list->id_recording ?>"><?php echo $list->judul_recording ?></a></div>
                                <div class="cart_item_edit"><a href="<?php echo base_url();?>stories/detail/<?php echo $list->id_recording ?>">Chapter <?php echo $list->chapter_playlist ?></a></div><br/>
                                <div class="cart_item_edit"><a href="<?php echo base_url();?>stories/detail/<?php echo $list->id_recording ?>"><?php echo $list->description_recording ?></a></div>
                            </div>
                        </td>
                        <Td class = "align-middle"><?php echo $list->duration_recording." minutes" ?></Td>
                        <Td class = "align-middle"><?php echo $list->nama_playlist ?></Td>
                        <Td class = "align-middle"><?php echo $list->tgl_user_recording ?></Td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br/><br/><br/>
            <br/>
        </div>

    </div>
</div>
