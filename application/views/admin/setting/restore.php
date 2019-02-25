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
                            <li class=""><a href="<?=base_url()."admin/setting/"?>">General</a>
                            </li>
                            <li class=""><a href="<?=base_url()."admin/setting/backup/"?>">Backup Data</a>
                            </li>
                            <li class="active"><a href="#">Restore Data</a>
                            </li>
                        </ul>

                        <div class="col-md-6">
                            <form action='<?=base_url()."admin/setting/go_restore"?>' method='post' enctype='multipart/form-data' style="margin-top:30px">
                                <input type='file' id='file' name='filequery'>
                                <hr>
                                <button type='submit' class='btn btn-info'>Restore</button>
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
