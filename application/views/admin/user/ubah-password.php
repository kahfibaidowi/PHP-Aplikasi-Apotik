<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Ubah Password</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class='alert alert-info' style='background:#f5f5f5'>
                            <a href='<?=base_url()."admin/"?>' class='btn btn-danger btn-xs'><i class='fa fa-angle-left'></i> Kembali</a>
                        </div> 

                        <form action='<?=base_url()."admin/user/update_password"?>' method='post' class='form-horizontal' role='form' style='width:450px'>
                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#passl'>Password Lama</label>
                                <div class='col-sm-8'>
                                    <input type='password' id='passl' class='form-control' name='passl'>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#passb'>Password Baru</label>
                                <div class='col-sm-8'>
                                    <input type='password' id='passb' class='form-control' name='passb'>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-md-4' for='#passkb'>Konfirmasi Password Baru</label>
                                <div class='col-sm-8'>
                                    <input type='password' id='passkb' class='form-control' name='passkb'>
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