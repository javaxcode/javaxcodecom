            <div class="page-title-container style5">
                <div class="page-title">
                    <div class="container">
                        <h1 class="entry-title">Harga</h1>
                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Harga</li>
                </ul>
            </div>
        

        <section id="content">
            
            <div class="section">
                <div class="container">
                     <div class="heading-box col-md-10 col-lg-8">
                        <h2 class="box-title">PAKET HOSTING</h2>
                        <p >Silahkan tentukan sendiri Paket Web Hosting Indonesia Terbaik untuk Kebutuhan Anda.</p>
                    </div>
                    <div class="pricing-table-container">
                        <div class="row">
                            {data}
                            <div class="col-sms-6 col-sm-6 col-md-3 animated" data-animation-type="bounceInLeft">
                                <div class="pricing-table style1">
                                    <div class="pricing-table-header">
                                        <div class="pricing-row">
                                            <span class="currency-symbol">Rp. {harga}</span>
                                            <small>Per Bulan</small>
                                        </div>
                                        <h4 class="pricing-type">{nama}</h4>
                                    </div>
                                    <div class="pricing-table-content">
                                        {deskripsi}
                                    </div>
                                    <div class="pricing-table-footer">
                                        <a href="<?=base_url('/checkout/go/{id}');?>" class="btn style4">Pesan Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            {/data}
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

        