<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Pengaturan</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class=" active"><a href="#">General</a>
                            </li>
                            <li class=""><a href="<?=base_url()."admin/setting/backup/"?>">Backup Data</a>
                            </li>
                            <li class=""><a href="<?=base_url()."admin/setting/restore/"?>">Restore Data</a>
                            </li>
                        </ul>

                        <div class="col-md-12" style='width:400px;margin-top:50px'>
                            <form class='form-horizontal' action='<?=base_url()."admin/setting/change_setting/"?>' method='post'>
                                <div class='form-group'>
                                    <label class='control-label col-md-4'>Nama Apotik</label>
                                    <div class='col-md-8'>
                                        <input type='text' class='form-control' name='nama' value='<?=conf_setting("nama")?>'>
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <label class='control-label col-md-4'>Pemilik Apotik</label>
                                    <div class='col-md-8'>
                                        <input type='text' class='form-control' name='pemilik' value='<?=conf_setting("pemilik")?>'>
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <label class='control-label col-md-4'>Alamat</label>
                                    <div class='col-md-8'>
                                        <textarea class='form-control no-resize' name='alamat'><?=conf_setting("alamat")?></textarea>
                                    </div>
                                </div>

                                <hr>

                                <div class='col-md-offset-4' style='margin-left:15px'>
                                    <button type='submit' class='btn btn-info'>Update</button>
                                </div>
                            </form>
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
