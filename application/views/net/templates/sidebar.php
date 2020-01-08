========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                   
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <?php if ($title=='Accounting | javaXcode') : ?>
                        <ul>
                            <a href="<?= base_url() ?>menu"><li class="text-muted menu-title">Menu</li></a>
                            <li>
                                <?php if ($sb=='Dashboard') : ?>
                                    <a href="<?= base_url() ?>accounting" class="waves-effect active"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                                <?php else : ?>
                                    <a href="<?= base_url() ?>accounting" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                                <?php endif ; ?>
                            </li>
                            <li class="has_sub">
                                <?php if ($sb=='Kas') : ?>
                                    <a href="javascript:void(0);" class="waves-effect active"><i class="zmdi zmdi-money"></i> <span> Kas </span> <span class="menu-arrow"></span></a>
                                <?php else : ?>
                                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-money"></i> <span> Kas </span> <span class="menu-arrow"></span></a>
                                <?php endif ; ?>
                                <ul class="list-unstyled">
                                    <li><a href="kasbesar">Kas Besar</a></li>
                                    <li><a href="kaskecil">Kas Kecil</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <?php if ($sb=='Akuntansi') : ?>
                                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-calendar-note"></i> <span> Akuntansi </span> <span class="menu-arrow"></span></a>
                                <?php else : ?>
                                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-calendar-note"></i> <span> Akuntansi </span> <span class="menu-arrow"></span></a>
                                <?php endif ; ?>
                                <ul class="list-unstyled">
                                    <li><a href="rugilaba">Rugi Laba</a></li>
                                    <li><a href="neraca">Neraca</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-present-to-all"></i> <span> Input </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Biaya</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>auth/logout" class="waves-effect"><i class="zmdi zmdi-power"></i> <span> Log Out </span> </a>
                            </li>

                        </ul>
                        <?php elseif ($title=='Payroll | javaXcode') : ?>
                        <ul>
                            <a href="<?= base_url() ?>menu"><li class="text-muted menu-title">Menu</li></a>
                            <li>
                                <a href="<?= base_url() ?>accounting" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-account-circle"></i> <span> Karyawan </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="absensi">Absensi</a></li>
                                    <li><a href="gaji">Gaji</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-present-to-all"></i> <span> Input </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="karyawan">Karyawan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>auth/logout" class="waves-effect"><i class="zmdi zmdi-power"></i> <span> Log Out </span> </a>
                            </li>

                        </ul>
                        <?php endif ; ?>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End