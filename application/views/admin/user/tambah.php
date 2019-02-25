<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">TAMBAH USER</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class='alert alert-info' style='background:#f5f5f5'>
                            <a href='<?=base_url()."admin/pegawai/"?>' class='btn btn-danger btn-xs'><i class='fa fa-angle-left'></i> Kembali</a>
                        </div>

                        <table class='table table-bordered'>
                            <tr>
                                <th width='120'>NIP</th>
                                <td width='500'><?=$data['nip']?></td>
                                <th width='120'>Alamat</th>
                                <td width='500'><?=$data['alamat']?></td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td width='500'><?=$data['nama_lengkap']?></td>
                                <th>No. Telepon</th>
                                <td width='500'><?=$data['no_telp']?></td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td width='500'><?=$data['level']?></td>
                                <th>Status</th>
                                <td width='500'><?=$data['aktif'] == "y" ? "Aktif" : "Tidak Aktif"?></td>
                            </tr>
                        </table>

                        <form action='<?=base_url()."admin/user/input"?>' method='post' class='form-horizontal' role='form' style='width:450px'>
                            <input type='hidden' name='nip' value='<?=$data['nip']?>'>
                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#nip'>Password</label>
                                <div class='col-sm-8'>
                                    <input type='password' id='password' class='form-control' name='password'>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#nama'>Konfirmasi Password</label>
                                <div class='col-sm-8'>
                                    <input type='password' id='password2' class='form-control' name='password2'>
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