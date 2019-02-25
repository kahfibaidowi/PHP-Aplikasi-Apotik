<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">TAMBAH OBAT</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class='alert alert-info' style='background:#f5f5f5'>
                            <a href='<?=base_url()."admin/obat/"?>' class='btn btn-danger btn-xs'><i class='fa fa-angle-left'></i> Kembali</a>
                        </div>

                        <form action='<?=base_url()."admin/obat/input"?>' method='post' class='form-horizontal' role='form' style='width:450px'>
                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#id-obat'>ID Obat</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='id-obat' class='form-control' readonly>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#nama'>Nama Obat</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='nama' class='form-control' name='nama'>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#satuan'>Satuan</label>
                                <div class='col-sm-8'>
                                    <select id='satuan' class='form-control' name='satuan'>
                                        <option></option>
                                        <option>Botol</option>
                                        <option>Sachet</option>
                                        <option>Tablet</option>
                                        <option>Lain Lain</option>
                                    </select>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#harga'>Harga</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='harga' class='form-control' name='harga'>
                                </div>
                            </div>
                            
                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#stok'>Stok Tersedia</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='stok' class='form-control' name='stok'>
                                </div>
                            </div>

                            <hr>

                            <div class='form-group'>
                                <div class='col-sm-offset-4' style='padding-left:15px'>
                                    <button type='submit' name='btn_input' class='btn btn-info'>
                                        Simpan <i class='fa fa-long-arrow-right'></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
<?php
    $js = [
        base_url()."assets/js-module/pegawai/form.js"
    ];
?>
<?php get_footer($js) ?> 