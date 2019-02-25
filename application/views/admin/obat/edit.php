<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">EDIT OBAT</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class='alert alert-info' style='background:#f5f5f5'>
                            <a href='<?=base_url()."admin/obat/"?>' class='btn btn-danger btn-xs'><i class='fa fa-angle-left'></i> Kembali</a>
                        </div>

                        <form action='<?=base_url()."admin/obat/update"?>' method='post' class='form-horizontal' role='form' style='width:450px'>
                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#id-obat'>ID Obat</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='id-obat' class='form-control' name='id' value='<?=$data['id_obat']?>' readonly>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#nama'>Nama Obat</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='nama' class='form-control' name='nama' value='<?=$data['nama_obat']?>'>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#satuan'>Satuan</label>
                                <div class='col-sm-8'>
                                    <select id='satuan' class='form-control' name='satuan'>
                                        <?php
                                            $satuan = [
                                                'Botol',
                                                'Sachet',
                                                'Tablet',
                                                'Lain Lain'
                                            ]
                                        ?>
                                        <?php foreach($satuan as $item) : ?>
                                            <?php if(strtolower($item) == $data['satuan']) : ?>
                                                <option selected><?=$item?></option>
                                            <?php else : ?>
                                                <option><?=$item?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#harga'>Harga</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='harga' class='form-control' name='harga' value='<?=$data['harga']?>'>
                                </div>
                            </div>
                            
                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#stok'>Stok Tersedia</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='stok' class='form-control' name='stok' value='<?=$data['stok']?>' readonly>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#stoktambah'>Tambah/Kurangi Stok</label>
                                <div class='col-sm-8'>
                                    <div class='input-group'>
                                        <div class='input-group-btn'>
                                            <button type='button' id='btn-plusmin' class='btn btn-default' style='width:40px'>+</button>
                                            <input type='hidden' id='input-plusmin' name='togglestok' value='+'>
                                        </div>
                                        <input type='text' id='stoktambah' class='form-control' name='stoktambah' value='0'>
                                    </div>
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
        base_url()."assets/js-module/obat/form.js"
    ];
?>
<?php get_footer($js) ?> 