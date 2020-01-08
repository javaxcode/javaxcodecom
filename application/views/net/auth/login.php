<body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="index.html" class="logo"><span>java<span>X</span>code</span></a>
                <!-- <h5 class="text-muted m-t-0 font-600">Kitchen Equipment | Cold Storage | Maintenance</h5> -->
            </div>
            <div class="m-t-40 card-box">
                <div class="text-center">
                    <!-- <h4 class="text-uppercase font-bold m-b-0">Sign In</h4> -->
                    <div class="user-thumb">
                            <a href="ublem"> <img src="assets/images/jxc_logo1.png" class="img-responsive img-circle img-thumbnail" alt="java technic"></a>
                        </div>
                </div>

                <div class="panel-body">
                    <?php echo $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?= base_url() ?>auth">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <!-- <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                </div>
                            </div> -->
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Login
                        </button>
                        <!-- <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Login with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                            </a> -->
                    </form>

                </div>
            </div>
            <!-- end card-box-->

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-danger">Belum Punya Akun? <a href="<?= base_url() ?>auth/registration" class="text-primary m-l-5"><b>Registrasi</b></a></p>
                </div>
            </div>
            
        </div>
        <!-- end wrapper page -->