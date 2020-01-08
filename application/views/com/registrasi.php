<div class="page-title-container style5">
    <div class="page-title">
        <div class="container">
            <h1 class="entry-title">Registrasi Member</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="registrasi">Registrasi</a></li>
    </ul>
</div>

<section id="content">
    <div class="container">
        <div id="main">
            <div class="post-wrapper">

                <hr class="color-light1">
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Registrasi</h4>
                        <form action="<?=base_url('com/registrasi/proses');?>" method="POST">
                            <div class="form-group">
                                <input type="email" name="email" class="input-text full-width" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" class="input-text full-width" placeholder="Password">
                            </div>
                            <!-- <div class="form-group">
                                <div class="checkbox">
                                    <label><input type="checkbox">Remember my password?</label>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <button type="submit" class="btn style2">Daftar</button>
                            </div>
                            <div class="form-group">

                                <label>Belum Jadi Member ? <a href="login">LOGIN</a></label>

                            </div>
                        </form>
                    </div>

                </div>
                <hr class="color-light1">
            </div>
        </div>
    </div>
</section>