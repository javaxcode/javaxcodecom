
            
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

                                    <div class="dropdown pull-right">
                                       <button class="btn btn-primary waves-effect waves-light" >Total Proyek : Rp. </button>
                                       <button class="btn btn-danger waves-effect waves-light" name="outstanding">Total OutStanding : Rp.
                                       <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#modalproyek">Proyek</button><br>
                                    </div>

                                    <!-- <h4 class="header-title m-t-0 m-b-30">Menu</h4> -->
                                    <form method="post" action="<?= base_url() ;?>proyek">
                                        
                                        <div class="dropdown pull-centre">
                                            <div class="col-md-2">
                                                <select class="form-control select2" name="bulan">
                                                    <option >Bulan</option>
                                                    <option value="01">Jan</option>
                                                    <option value="02">Feb</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">Apr</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Jun</option>
                                                    <option value="07">Jul</option>
                                                    <option value="08">Aug</option>
                                                    <option value="09">Sept</option>
                                                    <option value="10">Okt</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Des</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="dropdown pull-centre">
                                            <div class="col-md-2">
                                                <select class="form-control select2" name="tahun">
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" name="tp">Lihat</button></a>
                                    </form>
                                    
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                         <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box table-responsive">
                                    <table id="mydata" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>No Proyek</th>
                                                <th>Nama Klien</th>
                                                <th>Outlet</th>
                                                <!-- <th>Tempat</th> -->
                                                <th>Nilai Proyek</th>
                                                <!-- <th>Out Standing</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody id="show_data">
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->

                <div id="modalproyek" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title">Proyek</h2>
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
                                        <label for="field-5" class="control-label">Nama Klien</label>
                                        <input type="text" class="form-control" id="field-5" placeholder="Nama Klien" name="namaklien">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Outlet</label>
                                        <input type="text" class="form-control" id="field-3" placeholder="Outlet" name="outlet">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Alamat Tempat</label>
                                        <input type="text" class="form-control" id="field-3" placeholder="Tempat" name="tempat">
                                    </div>
                                </div>
                               
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Nilai Proyek</label>
                                        <input type="text" class="form-control" id="nilaiproyek" name="nilaiproyek" placeholder="Rp.">
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

<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_proyek();   //pemanggilan fungsi tampil barang.
        
        $('#mydata').dataTable();
         
        //fungsi tampil barang
        function tampil_data_proyek(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>proyek/data_proyek',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=1; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+i+'</td>'+
                                '<td>'+data[i].tanggalpjt+'</td>'+
                                '<td>'+data[i].kodeproyek+data[i].kodebulan+data[i].kodetr+'</td>'+
                                '<td>'+data[i].namaklien+'</td>'+
                                '<td>'+data[i].outlet+'</td>'+
                                
                                '<td>'+data[i].nilaiproyek+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/barang/get_barang')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(barang_kode, barang_nama, barang_harga){
                        $('#ModalaEdit').modal('show');
                        $('[name="kobar_edit"]').val(data.barang_kode);
                        $('[name="nabar_edit"]').val(data.barang_nama);
                        $('[name="harga_edit"]').val(data.barang_harga);
                    });
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        //Simpan Barang
        $('#btn_simpan').on('click',function(){
            var tanggal=$('#tanggal').val();
            var namaklien=$('#namaklien').val();
            var outlet=$('#outlet').val();
            var tempat=$('#tempat').val();
            var nilaiproyek=$('#nilaiproyek').val();
            $.ajax({
                type : "POST",
                url  : '<?php echo base_url()?>proyek/simpan_proyek',
                dataType : "JSON",
                data : {tanggal:tanggal, namaklien:namaklien, outlet:outlet, tempat:tempat, nilaiproyek:nilaiproyek},
                success: function(data){
                    $('[name="tanggal"]').val("");
                    $('[name="namaklien"]').val("");
                    $('[name="outlet"]').val("");
                    $('[name="tempat"]').val("");
                    $('[name="nilaiproyek"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_proyek();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var kobar=$('#kode_barang2').val();
            var nabar=$('#nama_barang2').val();
            var harga=$('#harga2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/update_barang')?>",
                dataType : "JSON",
                data : {kobar:kobar , nabar:nabar, harga:harga},
                success: function(data){
                    $('[name="kobar_edit"]').val("");
                    $('[name="nabar_edit"]').val("");
                    $('[name="harga_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_proyek();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/barang/hapus_barang')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_proyek();
                    }
                });
                return false;
            });

    });

</script>