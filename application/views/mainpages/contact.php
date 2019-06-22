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
<!-- pake format kayak gini, cuman fieldnya sama kayak diatas-->
<div class="contact">
    <div class="container">
        <div class="row">

            <!-- Get in touch -->
            <div class="col-lg-8 contact_col">
                <div class="get_in_touch">
                    <div class="section_title">Get in Touch</div>
                    <div class="section_subtitle">Say hello</div>
                    <div class="contact_form_container">
                        <form action="#" id="contact_form" class="contact_form">
                            <div class="row">
                                <div class="col-xl-6">
                                    <!-- Name -->
                                    <label for="contact_name">First Name*</label>
                                    <input type="text" id="contact_name" class="contact_input" required="required">
                                </div>
                                <div class="col-xl-6 last_name_col">
                                    <!-- Last Name -->
                                    <label for="contact_last_name">Last Name*</label>
                                    <input type="text" id="contact_last_name" class="contact_input" required="required">
                                </div>
                            </div>
                            <div>
                                <!-- Subject -->
                                <label for="contact_company">Subject</label>
                                <input type="text" id="contact_company" class="contact_input">
                            </div>
                            <div>
                                <label for="contact_textarea">Message*</label>
                                <textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
                            </div>
                            <button class="button contact_button"><span>Send Message</span></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 offset-xl-1 contact_col">
                <div class="contact_info">
                    <div class="contact_info_section">
                        <div class="contact_info_title">Marketing</div>
                        <ul>
                            <li>Phone: <span>+53 345 7953 3245</span></li>
                            <li>Email: <span>yourmail@gmail.com</span></li>
                        </ul>
                    </div>
                    <div class="contact_info_section">
                        <div class="contact_info_title">Shippiing & Returns</div>
                        <ul>
                            <li>Phone: <span>+53 345 7953 3245</span></li>
                            <li>Email: <span>yourmail@gmail.com</span></li>
                        </ul>
                    </div>
                    <div class="contact_info_section">
                        <div class="contact_info_title">Information</div>
                        <ul>
                            <li>Phone: <span>+53 345 7953 3245</span></li>
                            <li>Email: <span>yourmail@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row map_row">
            <div class="col">

                <!-- Google Map -->
                <div class="map">
                    <div id="google_map" class="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- pake format kayak gini, cuman fieldnya sama kayak diatas-->
