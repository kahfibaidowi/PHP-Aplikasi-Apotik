<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PEGAWAI</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div style='margin-bottom:20px'>
                            <a href='<?=base_url()?>admin/pegawai/tambah' class='btn btn-info'><i class='fa fa-plus'></i> Tambah Pegawai</a>
                            <div style='float:right'>
                                <span style='float:left;margin-top:5px'>Pencarian : </span><input type='text' class='form-control' style='width:200px;float:right;margin-left:15px;margin-bottom:-5px'>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width='80'>Nip</th>
                                    <th width='230'>Nama Lengkap</th>
                                    <th width='330'>Alamat</th>
                                    <th width='170'>Jabatan</th>
                                    <th width='170'>Status</th>
                                    <th>Aksi</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $pegawai) : ?>
                                    <tr>
                                        <td><?=$pegawai['nip']?></td>
                                        <td><?=$pegawai['nama_lengkap']?></td>
                                        <td><?=$pegawai['alamat']?>, Telp : <?=$pegawai['no_telp']?></td>
                                        <td><?=$pegawai['level']?></td>
                                        <td>
                                            <?php $status = $pegawai['aktif'] == 'y' ? ['btn-success', 'Aktif'] : ['btn-danger', 'Nonaktif'] ?>
                                            <div class="btn-group">
                                                <button class="btn <?=$status[0]?> btn-sm" style='width:100px;text-align:left'><?=$status[1]?></button>
                                                <button data-toggle="dropdown" class="btn <?=$status[0]?> dropdown-toggle btn-sm"><span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?=base_url()?>admin/pegawai/aktifkan/<?=$pegawai['nip']?>/">Aktifkan</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="<?=base_url()?>admin/pegawai/nonaktifkan/<?=$pegawai['nip']?>/">Nonaktifkan</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='<?=base_url()."admin/pegawai/edit/".$pegawai['nip']?>' class='btn btn-default btn-sm'>
                                                <i class='fa fa-edit'></i>
                                            </a>
                                            <button type='button' class='btn btn-default btn-sm' data-toggle='modal' data-target='#modal-delete' data-name='<?=$pegawai['nama_lengkap']?>' data-id='<?=$pegawai['nip']?>'>
                                                <i class='fa fa-times'></i>
                                            </button>
                                        </td>
                                    </tr>
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
                                        <p>Apakah anda yakin ingin menghapus pegawai ini?</p>
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
