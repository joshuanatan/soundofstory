
<body class = "bg-light">
    <div class="d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <img class="align-content" src="<?php echo base_url();?>assets/images/logosos.png" alt="">
                </div>
                <div class="">
                    <form action="<?php echo base_url().'admin/welcome/login/' ?>" method="post">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-outline">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
