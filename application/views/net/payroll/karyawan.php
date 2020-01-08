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
                               <button class="btn btn-success waves-effect waves-light" >Karyawan Aktif : </button>
                               <button class="btn btn-danger waves-effect waves-light" >Karyawan Non-Aktif : </button>
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
                        <div class="card-box table-responsive">
                            <div class="dropdown pull-right">
                                <button class="btn btn-success waves-effect waves-light btn-xs m-b-5" data-toggle="modal" data-target="#modaltambahkaryawan">Tambah Karyawan</button>
                                <!-- <button class="btn btn-danger waves-effect waves-light btn-xs m-b-5" data-toggle="modal" data-target="#modaldebet">Debet</button> -->
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">Data Karyawan</h4>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                                
            </div> <!-- container -->

        </div> <!-- content -->

        <div id="modaltambahkaryawan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title">Tambah Karyawan</h2>
                    </div>
                    <form >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Nama</label>
                                    <input type="text" class="form-control" id="field-3" placeholder="Name" name="nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Jabatan</label>
                                    <select class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Job Title" name="jabatan">
                                        <optgroup label="Back Office">
                                            <option value="STR">Store</option>
                                            <option value="ADM">Adminitration</option>
                                            <option value="ACC">Accounting</option>
                                            <option value="MNG">Manager</option>
                                        </optgroup>
                                        <optgroup label="Front Office">
                                            <option value="MKT">Marketing</option>
                                            <option value="OB">Office Boy</option>
                                            <option value="PRD">Production</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                           
                        </div> 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="Birth Date" name="tanggallahir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="field-5" placeholder="Birth Place" name="tempatlahir">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Tanggal Masuk Kerja</label>
                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="Join Date" name="tanggalmasukkerja">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Alamat</label>
                                    <input type="text" class="form-control" id="field-3" placeholder="Address" name="Alamat">
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default waves-effect" id="btnsimpan" name="inputkaryawan">Input Data Karyawan</button>
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