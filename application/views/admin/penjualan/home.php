<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DATA PENJUALAN</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div style='margin-bottom:20px'>
                            <div style='float:right'>
                                <span style='float:left;margin-top:5px'>Pencarian : </span><input type='text' class='form-control' style='width:200px;float:right;margin-left:15px;margin-bottom:-5px'>
                            </div>
                        <div class='clearfix'></div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width='150'>ID Transaksi</th>
                                    <th width='300'>Admin/Pegawai</th>
                                    <th width='300'>Pembeli</th>
                                    <th width='270'>Tanggal Transaksi</th>
                                    <th width='100'>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $item) : ?>
                                    <tr>
                                        <td><?=str_pad($item['id_transaksi'], 7, "0", STR_PAD_LEFT)?></td>
                                        <td><?=$item['nama_lengkap']?></td>
                                        <td><?=$item['pembeli']?></td>
                                        <td><?=ubah_tgl($item['tgl_transaksi'])?></td>
                                        <td>
                                            <button type='button' class='btn btn-default' data-toggle='modal' data-target='#modal-detail' data-id='<?=$item['id_transaksi']?>'>
                                                <i class='fa fa-link'></i> Detail
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                        <!-- paging -->
                        <div>
                            <?=$pagination?>
                        </div>

                        <!-- modal detail -->
                        <div id='modal-detail' class='modal fade'>
                            <div class='modal-dialog modal-lg' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        <h4 class='modal-title'>Detail Transaksi</h4>
                                    </div>
                                    <div class='modal-body'>
                                        data penjualan
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                        <a href='<?=base_url()."admin/penjualan/"?>' target='_blank' class='btn btn-primary'>Cetak Struk</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
<?php
    $js = [
        base_url()."assets/js-module/penjualan/datatables.js"
    ];
?>

<?php get_footer($js) ?>
