<?php foreach($profile as $list) { ?>
<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(<?php echo base_url();?>assets/images/categories.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title"><h1 style = "font-weight:bolder; color:white; opacity:0.8"><?php echo $list->nama_user ?></h1></div>
                            <div class="home_text"><p style = "font-weight:lighter; color:white; opacity: 0.6"><?php echo $list->description_user ?></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->
<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="<?php echo base_url()."assets/profiles/images/".$list->foto_profile_user ?>" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                <?php echo $list->nama_user ?>
                            </h5>
                            <h6>
                                <?php
                                $bod = $list->tgl_lahir_user;
                                $date = date("Y-m-d");
                                $diff = abs(strtotime($date) - strtotime($bod));
                                $years = floor($diff / (365*60*60*24));
                                echo $years.' years old';
                                ?>
                            </h6>
                            <p class="proile-rating">Listened Stories: &nbsp;<span>134 Story Episodes</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Favourite Genre</p>
                    <a href="">Romance</a><br/>
                    <a href="">Action</a><br/>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Id</label>
                            </div>
                            <div class="col-md-6">
                                <p>ID USER = <?php echo $list->id_user ?>(kita belom ada username)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $list->nama_user ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $list->email_user ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $list->nohp_user ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $list->profesi_user ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Join</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $list->tgl_submit_user ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Story Heard</label>
                            </div>
                            <div class="col-md-6">
                                <p>Robin Hood with Black Eyes</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Latest Favourite Genre</label>
                            </div>
                            <div class="col-md-6">
                                <p>Romance</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Main Language</label>
                            </div>
                            <div class="col-md-6">
                                <p>English</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nationality</label>
                            </div>
                            <div class="col-md-6">
                                <p>Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>           
    </div>
<?php } ?>