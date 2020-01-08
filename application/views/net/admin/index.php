
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">

                                    <!-- <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div> -->

                                    <!-- <h4 class="header-title m-t-0 m-b-30">Menu</h4> -->


                                    <a href="<?= base_url() ?>"><button type="button" class="btn btn-default btn-rounded w-md waves-effect m-b-5" >Overview</button></a>
                                    <a href="<?= base_url() ?>admin/lihat"><button type="button" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5">Lihat</button></a>
                                    <button type="button" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Success</button>
                                    <button type="button" class="btn btn-info btn-rounded w-md waves-effect waves-light m-b-5">Info</button>
                                    <button type="button" class="btn btn-warning btn-rounded w-md waves-effect waves-light m-b-5">Warning</button>
                                    <button type="button" class="btn btn-danger btn-rounded w-md waves-effect waves-light m-b-5">Danger</button>
                                    <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Inverse</button>
                                    <button type="button" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-5">Purple</button>
                                    <button type="button" class="btn btn-pink btn-rounded w-md waves-effect waves-light m-b-5">Pink</button>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                         <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                <?php
                                    

                                    foreach ($user_menu as $m) {
                                        // $rm = $m->menu_id;
                                        // $queryMenuu = "SELECT * FROM user_menu WHERE id = '$rm' ";
                                        // $menu = $this->db->query($queryMenuu)->row_array();
                                        echo $m->menu;
                                        //var_dump($user_menu);
                                    }
                                //var_dump($user_menu);

                                    //$user = $this->db->get_where('user', ['email' => $email])->row_array();
                                    //echo $user['email'] ;
                                    
                                ?>

                                </div>
                            </div>
                        </div>


                    </div> <!-- container -->

                </div> <!-- content -->

        	