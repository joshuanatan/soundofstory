<?php
if($this->session->userdata("id_user") == "") {
    redirect("welcome");
}
?>
<!-- pake format kayak gini, cuman fieldnya sama kayak diatas-->
<div class="contact">
    <div class="container">
        <div class="row">

            <!-- Get in touch -->
            <div class="col-lg-12 contact_col">
                <div class="get_in_touch">
                    <div class="section_title"></div>
                    <div class="section_subtitle"></div>
                    <div class="contact_form_container">
                        <form action="#" id="contact_form" class="contact_form">
                            <div>
                                <!-- Subject -->
                                <label for="contact_company">Subject</label>
                                <input type = "text" name="sub" placeholder="Subject" id="contact_company" class="contact_input">
                            </div>
                            <div>
                                <label for="contact_textarea">Message*</label>
                                <textarea name="isi" placeholder="Message for Us" id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
                            </div>
                            <button class="button contact_button"><span>Send Message</span></button>
                        </form>
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
