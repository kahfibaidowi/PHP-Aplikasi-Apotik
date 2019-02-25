<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">TAMBAH PEGAWAI</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class='alert alert-info' style='background:#f5f5f5'>
                            <a href='<?=base_url()."admin/pegawai/"?>' class='btn btn-danger btn-xs'><i class='fa fa-angle-left'></i> Kembali</a>
                        </div>

                        <form action='<?=base_url()."admin/pegawai/update"?>' method='post' class='form-horizontal' role='form' style='width:450px'>
                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#nip'>NIP</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='nip' class='form-control' name='nip' value='<?=$data['nip']?>' readonly>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#nama'>Nama Lengkap</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='nama' class='form-control' name='nama' value='<?=$data['nama_lengkap']?>'>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#telp'>No. Telepon</label>
                                <div class='col-sm-8'>
                                    <input type='text' id='telp' class='form-control' name='telp' value='<?=$data['no_telp']?>'>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#alamat'>Alamat</label>
                                <div class='col-sm-8'>
                                    <textarea id='alamat' class='form-control no-resize' name='alamat' rows='3'><?=$data['alamat']?></textarea>
                                </div>
                            </div>
                            
                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#level'>Jabatan</label>
                                <div class='col-sm-8'>
                                    <select id='level' class='form-control' name='level'>
                                        <?php
                                            $level = ['Administrator', 'Pelayanan', 'Gudang'];
                                        ?>
                                        <?php foreach($level as $item) : ?>
                                            <?php if(strtolower($item)==$data['level']) : ?>
                                                <option selected><?=$item?></option>
                                            <?php else : ?>
                                                <option><?=$item?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <div class='form-group'>
                                <div class='col-sm-offset-4' style='padding-left:15px'>
                                    <button type='submit' name='btn_update' class='btn btn-info'>
                                        Update <i class='fa fa-long-arrow-right'></i>
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
<?php get_footer() ?> 