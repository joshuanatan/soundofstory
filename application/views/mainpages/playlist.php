<?php include("../req/head-open.php");?>
<?php include("../req/styles/cart-css.php");?>
<?php include("../req/head-close.php");?>
<?php include("../req/menu.php");?>
<div class="cart_info">
    <div class="container">
        <div class = "row" style = "margin-bottom:50px">
            <div class = "col">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <br/>
                <form class = "form-inline">
                    <input type = "text" class = "form-control col-lg-6" placeholder="Search Playlist Here..">
                    <select class = "form-control col-lg-2" style ="margin-left:30px; color:black">
                        <option value = "">TITLE</option>
                        <option value = "">GENRE</option>
                        <option value = "">STYLE</option>
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
                    <tr>
                        <td>
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start " style = "width:100%">
                                <div class="cart_item_image">
                                    <div><img src="../images/product_1.jpg" alt=""></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_name"><a href="playlist-detail.php">Robin Hood and the Red Blanket</a></div>
                                    <div class="cart_item_edit"><a href="playlist-detail.php">Chapter 1</a></div><br/>
                                    <div class="cart_item_edit"><a href="playlist-detail.php">Robin hood met a little girl with red blanket covering her eyes hence she could not see the stone under the sea</a></div>
                                </div>
                            </div>
                        </td>
                        <Td class = "align-middle">12:23:34</Td>
                        <Td class = "align-middle">Story Name Here</Td>
                        <Td class = "align-middle">30 Audience</Td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>		
</div>

<?php include("../req/footer.php");?>
<?php include("../req/close.php");?>