<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">TRANSAKSI</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class='alert alert-info' style='background:#f5f5f5'>
                            <a href='<?=base_url()."admin/penjualan/"?>' class='btn btn-danger btn-xs'><i class='fa fa-angle-left'></i> Kembali</a>
                        </div>

                        <div id='data-transaksi' class='form-horizontal'>
                            <div style='width:400px'>
                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#id-obat'>ID Transaksi</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='id-trs' class='form-control' readonly>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#nama'>Pembeli</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='nama' class='form-control' name='nama'>
                                </div>
                            </div>
                            </div>
                        </div>

                        <br><br>
                        <hr>

                        <form id='detail-transaksi'>
                            <div class='form-group col-md-2' style='padding-left:0;padding-right:30px'>
                                <label>ID Obat</label>
                                <input type='text' class='form-control' id='id-obat' readonly>
                            </div>

                            <div class='form-group col-md-3' style='padding-left:0'>
                                <label>Nama Obat</label>
                                <input type='text' class='form-control' id='nama-obat'>
                            </div>

                            <div class='form-group col-md-1'>
                                <label>QTY</label>
                                <input type='text' class='form-control' id='qty'>
                            </div>

                            <div class='form-group col-md-2'>
                                <label>Harga</label>
                                <input type='text' class='form-control' id='harga' readonly>
                            </div>

                            <div class='form-group col-md-2'>
                                <label>Sub Total</label>
                                <input type='text' class='form-control' id='subtotal' readonly>
                            </div>

                            <div class='form-group col-md-2' style='padding-right:0;padding-left:50px'>
                                <label>&nbsp;</label><br>
                                <button type='submit' class='btn btn-info' id='btn-tambah-obat' style='width:100%'><i class='fa fa-plus'></i> Tambah</button>
                            </div>
                        </form>
                        
                        <table class='table table-bordered' style='margin-top:150px'>
                            <thead>
                            <tr>
                                <th width='150'>ID Obat</th>
                                <th>Obat</th>
                                <th width='100'>QTY</th>
                                <th width='180'>Harga</th>
                                <th width='180'>Sub Total</th>
                                <th width='80'>Aksi</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            <tr>
                                <td colspan='3'></td>
                                <th style='font-size:20px;padding-top:30px'>Total</th>
                                <th style='font-size:20px;padding-top:30px' colspan='2'>0</th>
                            </tr>
                            </tbody>
                        </table>
                        <div class='df'></div>
                        <button type='button' id='btn-save' class='btn btn-info'>Simpan <i class='fa fa-long-arrow-right'></i></button>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
<?php
    $js = [
        base_url()."assets/js-module/penjualan/form.js"
    ];
?>
<?php get_footer($js) ?>