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
						<div class="section_subtitle col-lg-12" style = "font-size:20px">Hello,<br/><br/>Are you looking for volunteer experience? And, do you have piles of short stories unpublished? Talent for story telling? Skills for audio editing? Or even creative ideas for design? We will gladly welcome you to join our BUDDY Program!<br/><br/>You can register down below. <br/>Benefits of the program:<br/>- Exposure and recognition for your work by our audiences and visitors<br/>- Chance to develop your passion and talent<br/>- Certificate of Completion *by request <br/><br/> Cheers!</div>
						<div class="contact_form_container">
							<form action="<?= base_url('lounge/message/insertBuddy')?>" method="post" id="contact_form" class="contact_form">
								<div class="col-lg-6">
									<!-- Subject -->
									<label for="contact_company">I Want to Be Your..</label>
									<select name="subject" class="contact_input form-control" required>
										<option value = "Story Teller">Story Teller</option>
										<option value = "Writer">Writer</option>
										<option value = "Sound Editor">Sound Editor</option>
										<option value = "Artwork Designer">Artwork Designer</option>
									</select>
								</div>
								<div class="col-lg-12">
									<label for="contact_textarea">Message*</label>
									<textarea id="contact_textarea" name="konten" class="contact_input contact_textarea" required="required" placeholder="Tell us the reason why you want to be our Buddy with that role?"></textarea>
								</div>
								<div class="col-lg-12">
									<button class="button contact_button col-lg-12"><span>Send Message</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
