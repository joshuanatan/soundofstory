<?php
if($this->session->userdata("id_user") == "") {
    redirect("welcome");
} 
foreach($profile as $list) { ?>
<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-color:#5ce1e6"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title"><h1  style = "color:#545454">Profile Section</h1></div>
                            <div class="home_text"><p  style = "color:#545454">You can customize your profiles here</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->
<div class="container emp-profile">
    <form action="<?php echo base_url().'lounge/Profile/save/' ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <!-- FORM DALAM FORM<form method="post" enctype="multipart/form-data">-->
                        <img src="<?php echo base_url()."assets/profiles/images/".$list->foto_profile_user ?>" alt=""/>
                    
                        <input type="file" name="file" class="file btn btn-lg btn-primary">
                    <!--</form>-->
                    <!--<div class="file btn btn-lg btn-primary">
                        Change Photo
                    </div>-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h3>
                                <?php echo $list->nama_user ?>
                            </h3>
                            <h5>
                                <?php echo $list->description_user ?>
                            </h5>
                            <h6>
                                <?php
                                $bod = $list->tgl_lahir_user;
                                $date = date("Y-m-d");
                                $diff = abs(strtotime($date) - strtotime($bod));
                                $years = floor($diff / (365*60*60*24));
                                ?>
                            </h6>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Save Profile"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <!--<p>ID USER = <?php echo $list->id_user ?>(kita belom ada username)</p>-->
                                <input type="hidden" name="id" value="<?php echo $list->id_user ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="nama" value="<?php echo $list->nama_user ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" value="<?php echo $list->email_user ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" value="<?php echo $list->nohp_user ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="prof" value="<?php echo $list->profesi_user ?>" required>
                            </div>
                        </div>
                        <!--<input type="submit" class="profile-edit-btn" name="btnAddMore" value="Save Profile"/>-->
                    </div>
                </div>
            </div>
        </div>
    </form>           
    </div>
<?php } ?>