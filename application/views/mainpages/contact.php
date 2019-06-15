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
        <form class = "form-inline" action="<?php echo base_url().'lounge/Contact/send/' ?>" method="post">
            <div class="col">
                <br/>
                <input type = "text" class = "form-control col-lg-6" name="sub" placeholder="Subject"><br/>
                <input type = "text" class = "form-control col-lg-6" name="nama" placeholder="Your Name"><br/>
                <input type = "text" class = "form-control col-lg-6" name="email" placeholder="Your Email"><br/>
                <input type = "text" class = "form-control col-lg-6" name="hp" placeholder="Your Phone Number"><br/>
                <input type = "text" class = "form-control col-lg-6" name="isi" placeholder="Message for Us"><br>
                <button type = "submit" class = "btn btn-outline-dark col-lg-3">SEND</button>
            </div>
        </form>
    </div>		
</div>
