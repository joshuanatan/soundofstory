<?php
if($this->session->userdata("id_user") == "") {
    redirect("welcome");
}
?>
<div class="contact">
	<div class="container">
		<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-12 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Get in Touch</div>
						<div class="section_subtitle col-lg-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
						<div class="contact_form_container">
							<form action="<?= base_url('lounge/message/insertMessage')?>" method="post" id="contact_form" class="contact_form">
								<div class="col-lg-6">
									<!-- Subject -->
									<label for="contact_company">Subject</label>
									<select name="subject" class="contact_input" id="subject">
										<option value="Halo">Halo</option>
										<option value="Helo">Helo</option>
									</select>
								</div>
								<div class="col-lg-12">
									<label for="contact_textarea">Message*</label>
									<textarea id="contact_textarea" name="konten" class="contact_input contact_textarea" required="required"></textarea>
								</div>
								<div class="col-lg-12">
									<button class="button contact_button col-lg-12"><span>Send Message</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info -->
				
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Google Map -->
					<div class="map">
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map"></div>
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
		</div>
	</div>
</div>
