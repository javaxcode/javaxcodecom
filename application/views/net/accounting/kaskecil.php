<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-lg-7">
                        <div class="card-box">

                            <div class="dropdown pull-right">
                              
                              <!--  <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#modalproyek">Input Proyek</button> -->
                            </div>
                            <div class="dropdown pull-centre">
                               <button class="btn btn-success waves-effect waves-light" >Kredit : Rp. </button>
                               <button class="btn btn-danger waves-effect waves-light" >Debet : Rp. </button>
                            </div>

                     
                            
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-5">
                        <div class="card-box">


                            <!-- <h4 class="header-title m-t-0 m-b-30">Menu</h4> -->
                            <form method="post" action="">
                                
                                <div class="dropdown pull-centre">
                                    <div class="col-md-4">
                                        <select class="form-control select2" name="bulan">
                                            <option >Bulan</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Febuari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="dropdown pull-centre">
                                    <div class="col-md-4">
                                        <select class="form-control select2" name="tahun">
                                            <option value="<?= date('Y') ; ?>"><?= date('Y') ; ?></option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" name="tp">Tampilkan Data</button></a>
                            </form>
                            
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <button class="btn btn-success waves-effect waves-light btn-xs m-b-5" data-toggle="modal" data-target="#modalkredit">Kredit</button>
                                 <button class="btn btn-danger waves-effect waves-light btn-xs m-b-5" data-toggle="modal" data-target="#modaldebet">Debet</button>
                            </div>   

                            <h4 class="header-title m-t-0 m-b-30">Tabel Kas Kecil</h4>

                            <div class="row">

                                <ul class="nav nav-tabs nav-justified">
                                    <li role="presentation" class="active">
                                        <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home"aria-expanded="true">Debet</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kredit</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home"
                                         aria-labelledby="home-tab">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Kode Akun</th>
                                                    <th>No Transaksi</th>
                                                    <th>Keterangan</th>
                                                    <th>Jumlah</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile"
                                         aria-labelledby="profile-tab">
                                         <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Kode Akun</th>
                                                    <th>No Transaksi</th>
                                                    <th>Keterangan</th>
                                                    <th>Jumlah</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <!-- end row -->

                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


                
            </div> <!-- container -->

        </div> <!-- content -->

        <div id="modalkredit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title">Kredit</h2>
                    </div>
                    <form >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Tanggal</label>
                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="Date" name="tanggal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Kode Transaksi</label>
                                    <input type="text" class="form-control" id="field-5" placeholder="Kode" name="kodeakun">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Keterangan</label>
                                    <input type="text" class="form-control" id="field-3" placeholder="Keterangan" name="keterangan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Jumlah</label>
                                    <input type="text" class="form-control" id="field-3" placeholder="Rp." name="jumlah">
                                </div>
                            </div>
                           
                        </div> 
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default waves-effect" id="btnsimpan">Input Data</button>
                        <!-- <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> -->
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal -->

        <div id="modaldebet" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title">Debet</h2>
                    </div>
                    <form >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Tanggal</label>
                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="Date" name="tanggal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Kode Transaksi</label>
                                    <input type="text" class="form-control" id="field-5" placeholder="Kode" name="kodeakun">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Keterangan</label>
                                    <input type="text" class="form-control" id="field-3" placeholder="Keterangan" name="keterangan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Jumlah</label>
                                    <input type="text" class="form-control" id="field-3" placeholder="Rp." name="jumlah">
                                </div>
                            </div>
                           
                        </div> 
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default waves-effect" id="btnsimpan">Input Data</button>
                        <!-- <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> -->
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal -->