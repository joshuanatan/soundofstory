<div class="cart_info">
    <div class="container">
        <div class = "row" style = "margin-bottom:50px">
            <div class = "col">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <br/>
                <form class = "form-inline" action="<?php echo base_url().'lounge/explore/search/' ?>" method="post">
                    <input type = "text" class = "form-control col-lg-6" name="key" placeholder="Search Playlist Here..">
                    <select class = "form-control col-lg-2" style ="margin-left:30px; color:black" name="from">
                        <option value = "1">TITLE (Recording)</option>
                        <option value = "2">TITLE (Playlist)</option>
                        <option value = "3">CATEGORY</option>
                    </select>
                    <button type = "submit" class = "btn btn-outline-dark col-lg-3" style ="margin-left:30px;">SEARCH</button>
                </form>
            </div>
        </div>
        <br/><br/>
        <div class = "row">
            <table class = "table table-stripped">
                <thead>
                    <tr>
                        <th style = "width:50%">Episodes</th>
                        <th style = "width:15%">Duration</th>
                        <th style = "width:20%">Story</th>
                        <th style = "width:15%">Audience</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($episode as $list) { ?>
                    <tr>
                        <td>
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start " style = "width:100%">
                                <div class="cart_item_image">
                                    <div><img src="<?php echo base_url();?>assets/images/<?php echo $list->foto_recording ?>" alt=""></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_name"><a href="<?php echo base_url();?>stories/detail/<?php echo $list->id_recording ?>"><?php echo $list->judul_recording ?></a></div>
                                    <div class="cart_item_edit"><a href="<?php echo base_url();?>stories/detail/<?php echo $list->id_recording ?>">Chapter <?php echo $list->chapter_playlist ?></a></div><br/>
                                    <div class="cart_item_edit"><a href="<?php echo base_url();?>stories/detail/<?php echo $list->id_recording ?>"><?php echo $list->description_recording ?></a></div>
                                </div>
                            </div>
                        </td>
                        <Td class = "align-middle"><?php echo $list->duration_recording." minutes" ?></Td>
                        <Td class = "align-middle"><?php echo $list->nama_playlist ?></Td>
                        <Td class = "align-middle">30 Audience</Td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>		
</div>
