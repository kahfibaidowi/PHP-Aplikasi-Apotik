<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DATA OBAT</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div style='margin-bottom:20px'>
                            <a href='<?=base_url()?>admin/obat/tambah' class='btn btn-info'><i class='fa fa-plus'></i> Tambah Obat</a>
                            <div style='float:right'>
                                <span style='float:left;margin-top:5px'>Pencarian : </span><input type='text' class='form-control' style='width:200px;float:right;margin-left:15px;margin-bottom:-5px'>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width='80'>#</th>
                                    <th width='230'>Nama Obat</th>
                                    <th width='330'>Satuan</th>
                                    <th width='170'>Harga</th>
                                    <th width='170'>Stok Tersedia</th>
                                    <th>Aksi</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                <?php foreach($data as $obat) : ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=$obat['nama_obat']?></td>
                                        <td><?=$obat['satuan']?></td>
                                        <td><?=$obat['harga']?></td>
                                        <td><?=$obat['stok']?></td>
                                        <td>
                                            <a href='<?=base_url()."admin/obat/edit/".$obat['id_obat']?>' class='btn btn-default btn-sm'>
                                                <i class='fa fa-edit'></i>
                                            </a>
                                            <button type='button' class='btn btn-default btn-sm' data-toggle='modal' data-target='#modal-delete' data-id='<?=$obat['id_obat']?>' data-name='<?=$obat['nama_obat']?>'>
                                                <i class='fa fa-times'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- paging -->
                        <div>
                            <?=$pagination?>
                        </div>
                        
                        <!-- modal delete -->
                        <div id='modal-delete' class='modal fade'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        <h4 class='modal-title'>Konfirmasi</h4>
                                    </div>
                                    <div class='modal-body'>
                                        <p>Apakah anda yakin ingin menghapus obat ini?</p>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                        <a href='<?=base_url()."admin/pegawai/hapus/"?>' class='btn btn-danger'>Hapus</a>
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
        base_url()."assets/js-module/pegawai/datatable.js"
    ];
?>

<?php get_footer($js) ?>
